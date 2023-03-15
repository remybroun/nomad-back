<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Listing;
use App\Models\Coworking;
use App\Models\CoworkingListingProximity;

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

    function checkProximityToCoworking($listing, $coworkings){
        foreach ($coworkings as $coworking) {
            $distance = $this->haversineGreatCircleDistance($coworking->lat, $coworking->lng, $listing->latitude, $listing->longitude);
            if ($distance > 2000){
                continue;
            }
            $this->line($listing->url." ".$coworking->name." ".$distance);

            $existing_prox = CoworkingListingProximity::where([
                "coworking_id" => $coworking->id
            ])->first();

            if($existing_prox){
                continue;
            }
            $proximity = CoworkingListingProximity::firstOrCreate([
                "distance"=>$distance,
            ]);
            $proximity->coworkings()->associate($coworking);
            $proximity->listings()->associate($listing);
            $proximity->save();

        }
    }


    public function handle()
    {
        $listings = Listing::get();
        $coworkings = Coworking::get();

        foreach ($listings as $listing) {
            if(!$listing->longitude || !$listing->latitude){
                continue;
            }
            $this->checkProximityToCoworking($listing, $coworkings);
        }

    }
}
