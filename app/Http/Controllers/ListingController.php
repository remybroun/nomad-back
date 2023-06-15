<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ListingResource;
use App\Models\Listing;
use App\Models\Location;
use App\Models\Country;
use App\Models\Visit;
use App\Models\Wework;
use App\Models\Coworking;
use App\Models\UnverifiedListings;
use App\Models\WeworkListingProximity;
use App\Models\CoworkingListingProximity;
use App\Models\ListingPrice;


class ListingController extends Controller
{
    public function index(Request $request){
        $limit = request()->get('limit');
        $listings = Listing::with(["mainListingImage", "location_slug", "close_coworkings", "latest_price"])->orderBy('is_featured', 'DESC')->orderBy('id', 'DESC');

        if(request()->get('page')){
            $listings = $listings->paginate();
        }else{
            $listings = $listings->get();
        }
        if ($limit){
            $listings = $listings->take($limit);
        }


        return ListingResource::collection($listings);
    }

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

    function checkProximityToWework($listing){
        $weworks = Wework::get();
        foreach ($weworks as $wework) {
            $distance = $this->haversineGreatCircleDistance($wework->lat, $wework->lng, $listing->latitude, $listing->longitude);
            if ($distance < 2000){
                $proximity = WeworkListingProximity::create([
                    "distance"=>$distance,
                ]);
                $proximity->weworks()->associate($wework);
                $proximity->listings()->associate($listing);
                $proximity->save();
            }
        }
    }    

    function checkProximityToCoworking($listing){
        $coworkings = Coworking::get();
        foreach ($coworkings as $coworking) {
            $distance = $this->haversineGreatCircleDistance($coworking->lat, $coworking->lng, $listing->latitude, $listing->longitude);
            
            if ($distance > 2000){
                continue;
            }

            $proximity = CoworkingListingProximity::create([
                "distance"=>$distance,
            ]);

            $proximity->coworkings()->associate($coworking);
            $proximity->listings()->associate($listing);
            $proximity->save();

        }
    }    

    public function store(Request $request){
        request()->validate([
            'title' => 'string',
            'description' => 'string',
            'location' => 'string',
            'external_url' => 'string',
            'longitude' => 'numeric',
            'latitude' => 'numeric',
            'amenities' => 'array',
            'arrangements' => 'array',
        ]);
        $listing = Listing::where('external_url', request('external_url'))->get();
        if (!$listing->isEmpty()){
            return response()->json(['message' => "Listing with this URL is already added"], 422);
        }
        $listing = Listing::create([
            'title' => request('title'),
            'description' => request('description'),
            'location' => request('location'),
            'longitude' => request('longitude'),
            'latitude' => request('latitude'),
            'amenities' => request('amenities'),
            'arrangements' => request('arrangements'),
            'is_featured' => False,
            'external_url' => request('external_url'),
            'price_per_night' => request('price_per_night'),
        ]);


        $location_slug = $this->generateSlug(request('location'));
        $country_str = str(request('location'))->explode(', ')->last();
        $country = Country::where('name', $country_str)->first();
        $location = Location::where('slug', $location_slug)->first();

        if(!$location){
            try{
                $location = Location::create([
                  "name" => request('location'),
                  "slug" => $location_slug,
                ]);
                
            }

            catch(QueryException $e){
                print($e->getMessage());
            }
        }

        $listing->location_slug()->associate($location);
        $listing->save();

        if(!$country){
            try{
                $country = Country::create([
                    "slug"=>$this->generateSlug($country_str),
                    "name"=>$country_str,
                ]);
            }
            catch(QueryException $e){
                print($e->getMessage());
            }
        }
        $location->country()->associate($country);
        $location->save();

        $this->checkProximityToWework($listing);
        $this->checkProximityToCoworking($listing);
        return response()->json(['data' => $listing], 200);
    }

    public function updatePrice(Listing $listing, Request $request){

        request()->validate([
            'price_per_night' => 'string',
        ]);

        $listing->update($request->price_per_night);
        return response()->json(['data' => $listing], 200);
    }

    public function update(Listing $listing, Request $request){

        request()->validate([
            'title' => 'string',
            'description' => 'string',
            'location' => 'string',
            'external_url' => 'string',
            'longitude' => 'numeric',
            'latitude' => 'numeric',
            'amenities' => 'array',
            'arrangements' => 'array',
        ]);
        $listing->update($request->all());
        return response()->json(['data' => $listing], 200);
    }

    public function selection(Request $request)
    {
        $listings = Listing::findMany($request->ids);
        return ListingResource::collection($listings);
    }

    public function show(Listing $listing): ListingResource
    {
        return new ListingResource($listing->load(['mainListingImage', 'close_coworkings', "latest_price"]));
    }

    public function showWithUrl(Request $request)
    {
        $listing = Listing::where('external_url', request('url'))->first();
        if ($listing)
            return response()->json([
                'message' => "Listing with this URL is already added",
                "listing" => $listing,
            ], 422);
        else { 
            return response()->json([
                "message" => "No listing for this url",
            ], 200);
        }
    }

    public function visit(Listing $listing, Request $request)
    {
        Visit::create([
            'ip_address' => $request->ip(),
            'url' => $listing->external_url,
            'listing_id' => $listing->id,
        ]);

        return response()->json([
            'external_url' => $listing->external_url,
        ]);

    }

    public function comminityVisit(Request $request)
    {
        Visit::create([
            'ip_address' => $request->ip(),
            'url' => "community",
        ]);

        return response()->json([
            'external_url' => "https://discord.gg/FnArQGq5EN",
        ]);

    }

    private function stripAccents($str) {
        return strtr(utf8_decode($str), utf8_decode('àáâãäçćèéêęëìíîïñńòóôõöùúûüýÿžÅÀÁÂÃÄÇÈÉÊËĠÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), 'aaaaacceeeeeiiiinnooooouuuuyyzAAAAAACEEEEGIIIINOOOOOUUUUY');
    }
    private function generateSlug($string){
        $string = explode(",", $string)[0];
        $string = str_replace([',', "'", '.'], '-', $string);
        $string = str_replace([' '], '--', $string);
        $string = strtolower($string);
        $string = $this->stripAccents($string);

        return $string;
    }


    public function showLocations()
    {   
        $locations = Location::get();

        $countries = $locations->map(function ($location){
            $name = str($location->name)->explode(', ')->last();
            return [
                "slug"=>$this->generateSlug($name),
                "name"=>$name,
            ];
        })->unique()->values();


        return response()->json([
            'cities' => $locations,
            'countries' => $countries,
        ], 200);
    }

    public function showTopThreeListingsForLocation($location){
        
        $listings = Listing::where('location', 'LIKE', '%'.$location.'%')->with(["mainListingImage", "location_slug", "close_coworkings","latest_price"])->latest()->take(3)->get();

        return ListingResource::collection($listings);
    }

    public function listingsPerLocation($location){
        
        $listings = Listing::whereHas('location_slug', function($q) use($location){
            $q->where('slug', 'LIKE', '%'.$location.'%');
        })
        ->with(["mainListingImage", "location_slug", "close_coworkings", "latest_price"])
        ->latest();
        if(request()->get('page')){
            $listings = $listings->paginate();
        }else{
            $listings = $listings->get();
        }

        return ListingResource::collection($listings);
    }

    public function listingsProximityWework(Request $request){
        $results = $request->get('results');
        $city = $request->get('city');

        $listings = Listing::has('close_weworks')->with(["mainListingImage", "location_slug", "close_weworks","latest_price"]);

        if ($city){
            // $listings = $listings->where('location', 'LIKE', '%'.$city.'%');
            $listings = $listings->whereHas('location_slug', function($q) use($city){
                $q->where('slug', $city);
            });
        }

        if(request()->get('results')){
            $listings = $listings->take($results);
        }

        $listings = $listings->get()->values();

        return ListingResource::collection($listings);
    }

    public function listingsProximityWeworkLocations(){
        $locations = Location::whereHas('listings', function($q){
            $q->has('close_weworks');
        })->get();

        return response()->json($locations);
    }

    public function listingsPerCountry($country){
        
        $country = Country::where('slug', $country)->firstOrFail();

        $listings = Listing::whereHas('location_slug', function($q) use($country){
            $q->whereHas('country', function($q) use($country){
                $q->where('slug', 'LIKE', '%'.$country->slug.'%');
            });
        })
        ->with(["mainListingImage", "location_slug", "close_coworkings", "latest_price"])
        ->latest();

        if(request()->get('page')){
            $listings = $listings->paginate();
        }else{
            $listings = $listings->get();
        }

        return response()->json([
            "listings" => ListingResource::collection($listings),
            "country" => $country,
        ]);
    }

    public function CreateUnverifiedListing(Request $request){

        if (Listing::where('external_url', request('airbnb_id'))->exists()) {
            return response()->json(['message' => "Listing with this URL is already added"], 422);
        }

        // $listing = UnverifiedListings::where('airbnb_id', request('airbnb_id'))->get();
        if (UnverifiedListings::where('airbnb_id', request('airbnb_id'))->exists()) {
            return response()->json(['message' => "Listing with this URL is already added"], 422);
        }

        $listing = UnverifiedListings::create([
            'url' => request('url'),
            'airbnb_id' => request('airbnb_id'),
        ]);

        return response()->json([
            'listing' => $listing
        ], 200);
    }

    public function listingPricingHistory(Listing $listing){
        return ListingPrice::where("listing_id", $listing->id)->get();
    }

    public function locationsPerArea($area)
    {
        $asia = ["China", "India", "Indonesia", "Pakistan", "Bangladesh", "Japan", "Philippines", "Vietnam", "Turkey", "Iran", "Thailand", "Myanmar", "South Korea", "Iraq", "Afghanistan", "Saudi Arabia", "Uzbekistan", "Malaysia", "Yemen", "Nepal", "North Korea", "Sri Lanka", "Kazakhstan", "Syria", "Cambodia", "Jordan", "Azerbaijan", "United Arab Emirates", "Tajikistan", "Israel", "Laos", "Lebanon", "Kyrgyzstan", "Turkmenistan", "Singapore", "Oman", "State of Palestine", "Kuwait", "Georgia", "Mongolia", "Armenia", "Qatar", "Bahrain", "Timor-Leste", "Cyprus", "Bhutan", "Maldives", "Brunei"];

        $europe = ["Hungary", "Belarus", "Austria", "Serbia", "Switzerland", "Germany", "Andorra", "Bulgaria", "United", "France", "Montenegro", "Luxembourg", "Italy", "Denmark", "Finland", "Slovakia", "Norway", "Ireland", "Spain", "Malta", "Ukraine", "Croatia", "Moldova", "Monaco", "Liechtenstein", "Poland", "Iceland", "San Marino", "Bosnia", "Albania", "Lithuania", "Slovenia", "Romania", "Latvia", "Netherlands", "Russia", "Estonia", "Belgium", "Czech", "Greece", "Portugal", "Sweden"];

        $south_america = ["Argentina", "Bolivia", "Brazil", "Chile", "Colombia", "Costa Rica", "Ecuador", "El Salvador", "Guatemala", "Honduras", "Mexico", "Nicaragua", "Panama", "Paraguay", "Peru", "Dominican Republic", "Uruguay"];

        if ($area == "europe")
            return $europe;
        if ($area == "asia")
            return $asia;

        return $south_america;
    }

}
