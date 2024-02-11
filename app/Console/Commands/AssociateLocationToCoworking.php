<?php

namespace App\Console\Commands;

use App\Http\Controllers\ListingController;
use App\Models\Country;
use App\Models\Coworking;
use App\Models\Location;
use Illuminate\Console\Command;

class AssociateLocationToCoworking extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'associate:coworking-location';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private function create_location($coworking, $slug)
    {
        try {
            $location = Location::create([
                "name" => $coworking->city,
                "slug" => $slug,
            ]);
            $this->line($slug . " Location Created");

        } catch (QueryException $e) {
            $this->line($e->getMessage());
        }

        try {
            $country_obj = Location::where("slug", 'LIKE', ListingController::generateSlug($coworking->country))->first();
            if (!$country_obj) {
                $country_obj = Country::firstOrCreate([
                    "slug" => ListingController::generateSlug($coworking->country),
                    "name" => $coworking->country,
                ]);
            }

            $this->line($coworking->country . " Country Created");
            $this->line("Associating Location to Country");
            $location->country()->associate($country_obj);
            $location->save();
        } catch (QueryException $e) {
            $this->line($e->getMessage());
        }
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $coworkings = Coworking::get();
        foreach ($coworkings as $coworking) {

            if ($coworking->location_id) {
                continue;
            }

            $slug = ListingController::generateSlug($coworking->city);


            $location_obj = Location::where("slug", 'LIKE', $slug)->first();

            if (!$location_obj) {
                $this->line("This location needs to be created");
//                Create Location
                $this->create_location($coworking, $slug);
                continue;
            }
            $this->line($coworking->city);
            $coworking->location_slug()->associate($location_obj);
            $coworking->save();
        }
    }
}
