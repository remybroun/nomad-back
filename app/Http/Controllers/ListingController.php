<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ListingResource;
use App\Models\Listing;


class ListingController extends Controller
{
    public function index(Request $request){
        $limit = request()->get('limit');
        $listings = Listing::orderBy('is_featured', 'DESC')->with("mainListingImage")->latest();
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
    public function store(Request $request){
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'external_url' => 'required',
        ]);
        $listing = Listing::where('external_url', request('external_url'))->get();
        if (!$listing->isEmpty()){
            return response()->json(['message' => "Listing with this URL is already added"], 422);
        }
        $listing = Listing::create([
            'title' => request('title'),
            'description' => request('description'),
            'location' => request('location'),
            'external_url' => request('external_url'),
        ]);

        return response()->json(['data' => $listing], 200);
    }
    public function show(Listing $listing, $id): ListingResource
    {
        return new ListingResource(Listing::with("mainListingImage")->find($id));
    }

    public function showLocations()
    {
        return Listing::distinct()->get(['location']);
    }

    public function listingsPerLocation($location)
    {
        $listings = Listing::where('location', 'LIKE', '%'.$location.'%')->with("mainListingImage")->latest();
        if(request()->get('page')){
            $listings = $listings->paginate();
        }else{
            $listings = $listings->get();
        }
        return ListingResource::collection($listings);
    }

}
