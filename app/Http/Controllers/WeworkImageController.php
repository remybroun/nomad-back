<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeworkImage;

class WeworkImageController extends Controller
{

    public function store(Request $request){
        request()->validate([
            'url' => 'required',
            'wework_id' => 'required',
        ]);

        $wework_image = WeworkImage::where('url', request('url'))->get();

        if (!$wework_image->isEmpty()){
            return response()->json(['message' => "Wework Image with this URL is already added"], 422);
        }
        $wework = WeworkImage::create([
            'url' => request('url'),
            'wework_id' => request('wework_id'),
            'is_main' => false,
        ]);

        return response()->json(['data' => $wework], 200);
    }

    // public function show(WeworkImage $listing_image): ListingImageResource
    // {
    //     return new ListingImageResource($listing_image);
    // }

    public function wework_images_for_id($id)
    {
        $wework = Wework::find($id);
        return $wework->images;
    }

}
