<?php

namespace App\Http\Controllers;

use App\Models\ListingImage;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Resources\ListingImageResource;
use App\Http\Resources\ListingResource;

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
            'is_main' => false,
        ]);

        return response()->json(['data' => $listing], 200);
    }
    public function show(ListingImage $listing_image): ListingImageResource
    {
        return new ListingImageResource($listing_image);
    }

    public function listing_images_for_id($id)
    {
        $listing = new ListingResource(Listing::find($id));
        return $listing->listingImages;
    }

}
