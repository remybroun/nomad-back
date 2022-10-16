<?php

namespace App\Console\Commands;
use App\Models\Listing;
use App\Models\Location;
use Illuminate\Console\Command;

class AssociateLocation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'associate:locationToSlug';

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


    private function generateSlug($string){
        $string = explode(",", $string)[0];
        $string = strtolower(str_replace([',', "'", ' ', '.'], '-', $string));
        return $string;
    }

    public function handle()
    {
        $listings = Listing::get();
        foreach($listings as $listing){
            if ($listing->location_id){
                continue;
            }
            $location_str = $this->generateSlug($listing->location);
            $location_obj = Location::where("slug", $location_str)->first();
            $this->line($listing->location);
            $listing->locationSlug()->associate($location_obj);
            $listing->save();
        }

    }
}
