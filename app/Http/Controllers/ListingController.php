<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\ListingResource;
use App\Models\Listing;


class ListingController extends Controller
{
    public function index(Request $request){
    
        $listings = Listing::all();
        return ListingResource::collection($listings);
    }
    // public function create(Request $request){
    public function store(Request $request){
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'external_url' => 'required',
        ]);

        $listing = Listing::create([
            'title' => request('title'),
            'description' => request('description'),
            'external_url' => request('external_url'),
        ]);

        return response()->json(['data' => $listing], 200);
    }
    public function show(Listing $listing, $id): ListingResource
    {
        return new ListingResource(Listing::find($id));
    }

}
