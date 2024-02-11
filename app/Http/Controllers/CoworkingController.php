<?php

namespace App\Http\Controllers;
use App\Models\Coworking;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\CoworkingListingProximity;

class CoworkingController extends Controller
{
    public function show(){
        $coworkings = Coworking::paginate(10);
        return view('coworkings.index', [
            'coworkings' => $coworkings,
//            'listings' => $coworking->listings()->paginate(10)
        ]);
    }

    public function showLocationsView(Request $request){
//        $locations = Coworking::select('city')->distinct()->get();
        $locations = Coworking::select('location_id')
                                ->whereNotNull("location_id")
                                ->with('location_slug')
                                ->distinct('location_id')
                                ->get();
//        dd($locations->toArray());

        return view('coworkings.locations.index', [
            'locations' => $locations
        ]);
    }

    public function showCoworkingsbyCityView($city)
    {
        $location = Location::where('name', 'LIKE', $city)->first();
        $coworkings = Coworking::with('location_slug')->where('location_id', $location->id)->get();
        return view('coworkings.locations.cities.show', [
            'coworkings' => $coworkings,
            'location' => $location
        ]);
    }

}
