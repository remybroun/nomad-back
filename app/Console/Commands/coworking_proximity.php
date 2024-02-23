<?php

namespace App\Console\Commands;

use App\Models\Coworking;
use App\Models\CoworkingListingProximity;
use App\Models\Listing;
use Illuminate\Console\Command;

class coworking_proximity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coworking:proximity';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */

    function haversineGreatCircleDistance(
        $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
    {
        // convert from degrees to radians
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * $earthRadius;
    }

    function checkProximityToCoworking($listing, $coworkings)
    {
        foreach ($coworkings as $coworking) {
            $distance = $this->haversineGreatCircleDistance($coworking->lat, $coworking->lng, $listing->latitude, $listing->longitude);

            if ($distance > 2000) {
                continue;
            }

            // Check if a proximity entry already exists for this particular coworking and listing pair
            $existing_prox = CoworkingListingProximity::where([
                "coworking_id" => $coworking->id,
                "listing_id" => $listing->id // Ensure to check both coworking_id and listing_id
            ])->first();

            if ($existing_prox) {
                // If an existing proximity is found, perhaps update distance or skip
                continue;
            }

            $this->line($listing->url . " " . $coworking->name . " " . $distance);

            // Create or update the proximity entry with both IDs and distance
            $proximity = CoworkingListingProximity::create([
                "coworking_id" => $coworking->id, // Directly include coworking_id
                "listing_id" => $listing->id, // Directly include listing_id
                "distance" => $distance, // Include distance
            ]);

            // Note: No need to use associate() since IDs are directly assigned
            $proximity->save();
        }
    }


    public function handle()
    {
        $listings = Listing::get();
        $coworkings = Coworking::get();

        foreach ($listings as $listing) {
            if (!$listing->longitude || !$listing->latitude) {
                continue;
            }
            $this->checkProximityToCoworking($listing, $coworkings);
        }

    }
}
