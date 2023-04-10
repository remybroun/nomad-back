<?php

namespace App\Http\Controllers;

use App\Models\ListingPrice;
use Illuminate\Http\Request;

class ListingPriceController extends Controller
{
    public function store(Request $request){
        request()->validate([
            'price_per_night' => 'required',
            'listing_id' => 'required',
        ]);

        $price = ListingPrice::create([
            'price_per_night' => request('price_per_night'),
            'listing_id' => request('listing_id'),
        ]);

        return response()->json(['data' => $price], 200);
    }
}
