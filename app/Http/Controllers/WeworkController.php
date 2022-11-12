<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wework;
use App\Models\WeworkListingProximity;

class WeworkController extends Controller
{
    public function show($wework_slug){
        $wework = Wework::with("images")->where('slug', $wework_slug)->first();
        $closeListings = WeworkListingProximity::where('wework_id', $wework->id)
            ->leftJoin('listings', 'listings.id', '=', 'wework_listing_proximities.listing_id')
            ->get();

        return response()->json([
            'location' => $wework,
            'close_listings' => $closeListings,
        ], 200);
    }

    public function ranking(Request $request){
        $weworks = Wework::orderBy('score', 'DESC')->orderBy('country', 'ASC');
        
        if ($request->query('city')){
            $weworks = $weworks->where('city', $request->query('city'))->get();
        }
        
        else if ($request->query('country')){
            $weworks = $weworks->where('country', $request->query('country'))->get();
        }

        else{
            $weworks = $weworks->paginate(50);
        }
        return response()->json($weworks, 200);
    }

    public function all(){
        $weworks = Wework::get();
        return response()->json($weworks, 200);
    }
    
    public function locations(){
        $cities = Wework::select('city')->distinct()->get()->map(function ($item) {
            return $item['city'];
        });
        $countries = Wework::select('country')->distinct()->get()->map(function ($item) {
            return $item['country'];
        });

        return response()->json([
            'cities' => $cities,
            'countries' => $countries,
        ], 200);
    }
    
    public function upvote(Wework $wework){

        $wework->score = $wework->score + 1.0;
        $wework->save();

        return response()->json($wework, 200);
    }

}
