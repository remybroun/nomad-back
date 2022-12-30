<?php

namespace App\Console\Commands;
use App\Models\Listing;
use App\Models\Wework;
use App\Models\WeworkListingProximity;

use Illuminate\Console\Command;

class analize_wework_proximity extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:proximity';

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

    function checkProximityToWework($listing, $weworks){
        foreach ($weworks as $wework) {
            $distance = $this->haversineGreatCircleDistance($wework->lat, $wework->lng, $listing->latitude, $listing->longitude);

            if ($distance > 2000){
                continue;
            }

            $this->line($listing->external_url." ".$wework->default_name." ".$distance);

            $proximity = WeworkListingProximity::where([
                'wework_id' => $wework->id,
                'listing_id' => $listing->id,
            ]);
            $proximity->distance = $distance;


            if ($proximity) {
                $proximity = WeworkListingProximity::create([
                    "distance"=>$distance,
                ]);
                $proximity->weworks()->associate($wework);
                $proximity->listings()->associate($listing);
                $proximity->save();
                continue;
            }
        }
    }


    public function handle()
    {
        // $listings = Listing::latest()->take(7)->get();
        $listings = Listing::get();
        $weworks = Wework::get();

        foreach ($listings as $listing) {
            if(!$listing->longitude || !$listing->latitude){
                continue;
            }
            $this->checkProximityToWework($listing, $weworks);
        }

    }
}
