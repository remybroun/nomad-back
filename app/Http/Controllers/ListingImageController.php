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

        $listing_image = ListingImage::where('url', request('url'))->get();
        if (!$listing_image->isEmpty()){
            return response()->json(['message' => "Listing Image with this URL is already added"], 422);
        }
        $listing = ListingImage::create([
            'url' => request('url'),
            'listing_id' => request('listing_id'),
            'is_main' => false,
        ]);

        return response()->json(['data' => $listing], 200);
    }

    public function storeMultiple(Request $request){
        
        request()->validate([
            'urls' => 'required|array',
            'listing_id' => 'required',
        ]);

        foreach (request('urls') as $url) {

            $listing_image = ListingImage::where('url', $url)->get();

            if (!$listing_image->isEmpty()){
                continue;
            }

            $image = ListingImage::create([
                'url' => $url,
                'listing_id' => request('listing_id'),
                'is_main' => false,
            ]);
        }
        $images = ListingImage::where('listing_id', request('listing_id'))->get();
        return ListingImageResource::collection($images);
    }

    public static function storeMultipleImageObjects($image_urls, $listing_id){
        
        foreach ($image_urls as $url) {

            $listing_image = ListingImage::where('url', $url)->get();

            if (!$listing_image->isEmpty()){
                continue;
            }

            $image = ListingImage::create([
                'url' => $url,
                'listing_id' => $listing_id,
                'is_main' => false,
            ]);
        }
        $images = ListingImage::where('listing_id', $listing_id)->get();
        return ListingImageResource::collection($images);
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
