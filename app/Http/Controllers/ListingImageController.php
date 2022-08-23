<?php

namespace App\Http\Controllers;

use App\Http\Resources\ListingImageResource;
use App\Models\ListingImage;
use Illuminate\Http\Request;

class ListingImageController extends Controller
{

    public function store(Request $request){
        request()->validate([
            'url' => 'required',
            'listing_id' => 'required',
        ]);

        $listing = ListingImage::create([
            'url' => request('url'),
            'listing_id' => request('listing_id'),
        ]);

        return response()->json(['data' => $listing], 200);
    }
    public function show(ListingImage $listing_image): ListingImageResource
    {
        return new ListingImageResource($listing_image);
    }
}
