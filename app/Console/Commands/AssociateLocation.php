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
            $location_obj = Location::where("name", $listing->location)->first();
            $this->line($listing->location);
            $listing->location_slug()->associate($location_obj);
            $listing->save();
        }
    }
}
