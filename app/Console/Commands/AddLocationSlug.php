<?php

namespace App\Console\Commands;
use Illuminate\Database\QueryException;
use Illuminate\Console\Command;
use App\Models\Listing;
use App\Models\Location;
use App\Models\Country;

class AddLocationSlug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transform:location-slug';

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

    private function stripAccents($str) {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçćèéêęëìíîïñńòóôõöøùúûüýÿžÅÀÁÂÃÄÇÈÉÊËĠÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaacceeeeeiiiinnoooooouuuuyyzAAAAAACEEEEGIIIINOOOOOUUUUY');
    }
    private function generateSlug($string){
        $string = explode(",", $string)[0];
        $string = str_replace([',', "'", "ʻ", '.'], '-', $string);
        $string = str_replace([' '], '--', $string);
        $string = strtolower($string);
        $string = $this->stripAccents($string);

        return $string;
    }


    public function handle()
    {
        // $listing_locations = Listing::distinct('location')->get('location')->map(function ($listing){
        //     return $listing->location;
        // });
    
        $listing_locations = Listing::distinct('location')->get();
        // ->map(function ($listing){
        //     return $listing->location;
        // });
    
        foreach($listing_locations as $listing_location){

            $this->line($listing_location->location);
            $location_slug = $this->generateSlug($listing_location->location);
            $location = Location::where('slug', $location_slug)->first();

            // $this->line($location.' --- '.($listing_location->location).' --- '.$location->country);

            if($location && $listing_location->location_id===$location->id && $location->country){
                $this->line('pass');
                continue;
            }

            $country_str = str($listing_location->location)->explode(', ')->last();
            $country = Country::where('name', $country_str)->first();
            $this->line($country);

            if(!$location){
                try{
                    $location = Location::create([
                      "name" => $listing_location->location,
                      "slug" => $location_slug,
                    ]);
                    $this->line($location_slug . " Location Created");

                }
                catch(QueryException $e){
                    $this->line($e->getMessage());
                }
            }

            if(!$listing_location->location_id){
                $this->line("Associating Listing to Location");
                $this->line($listing_location->id);
                $listing_location->location_slug()->associate($location);
                $listing_location->save();
            }

            $this->line($listing_location->location_id);

            if(!$country){
                try{
                    $country = Country::create([
                        "slug"=>$this->generateSlug($country_str),
                        "name"=>$country_str,
                    ]);
                    $this->line($country_str . " Location Created");
                }
                catch(QueryException $e){
                    $this->line($e->getMessage());
                }
            }

            if(!$location->country){
                $this->line("Associating Location to Country");
                $location->country()->associate($country);
                $location->save();
            }

        }
    }
}
