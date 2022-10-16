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

    private function generateSlug($string){
        $string = explode(",", $string)[0];
        $string = strtolower(str_replace([',', "'", ' ', '.'], '-', $string));

        return $string;
    }

    public function handle()
    {
        $listings = Listing::distinct('location')->get('location')->map(function ($listing){
            return $listing->location;
        });

        // $countries = $listings->map(function ($listing){
        //     return str($listing)->explode(', ')->last();
        // })->unique()->values();
        $locations = Location::get();

        // $countries = $locations->map(function ($location){
        //     $name = str($location->name)->explode(', ')->last();
        //     $this->line($name);
        //     try{
        //         // $country = Country::create([
        //         //     "slug"=>$this->generateSlug($name),
        //         //     "name"=>$name,
        //         // ]);
        //         $country = Country::where("name", $name)->first();

        //         $location->country()->associate($country);
        //         $location->save();
        //     }
        //     catch(QueryException $e){
        //         print($e->getMessage());
        //     }
        //     return [
        //         "slug"=>$this->generateSlug($name),
        //         "name"=>$name,
        //     ];
        // })
        // ->unique()
        // ->values();

        foreach($listings as $listing){

            $location = $this->generateSlug($listing);

            try{
                Location::create([
                  "name" => $listing,
                  "slug" => $location,
                ]);

            }
            catch(QueryException $e){
                print($e->getMessage());
            }
        }
    }
}
