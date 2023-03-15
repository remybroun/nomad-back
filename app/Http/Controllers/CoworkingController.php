<?php

namespace App\Http\Controllers;
use App\Models\Coworking;
use Illuminate\Http\Request;
use App\Models\CoworkingListingProximity;

class CoworkingController extends Controller
{
    public function show(Coworking $coworking){
        return new Coworking($coworking);
    }

    public function proximityListings(Request $request){
        
    }

}
