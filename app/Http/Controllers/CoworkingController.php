<?php

namespace App\Http\Controllers;
use App\Models\Coworking;
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
        $locations = Coworking::select('city')->distinct()->get();
        return view('coworkings.locations.index', [
            'locations' => $locations
        ]);
    }


}
