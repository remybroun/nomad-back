<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Country;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function showLocations()
    {
        $locations = Location::with("country")->get();
        $countries = $locations->map(function ($location) {
            info($location->id);
            return [
                "slug" => $location->country->slug,
                "name" => $location->country->name,
            ];
        });

        return response()->json([
            'cities' => $locations,
            'countries' => $countries,
        ], 200);
    }

    public function showCountries()
    {
        $countries = Country::get();
        return response()->json($countries, 200);
    }


    public function locationsPerArea($area)
    {
        $asia = ["Argentina", "Bolivia", "Brazil", "Chile", "Colombia", "Costa Rica", "Ecuador", "El Salvador", "Guatemala", "Honduras", "Mexico", "Nicaragua", "Panama", "Paraguay", "Peru", "Dominican Republic", "Uruguay"];

        $europe = ["Hungary", "Belarus", "Austria", "Serbia", "Switzerland", "Germany", "Holy", "Andorra", "Bulgaria", "United", "France", "Montenegro", "Luxembourg", "Italy", "Denmark", "Finland", "Slovakia", "Norway", "Ireland", "Spain", "Malta", "Ukraine", "Croatia", "Moldova", "Monaco", "Liechtenstein", "Poland", "Iceland", "San Marino", "Bosnia", "Albania", "Lithuania", "North", "Slovenia", "Romania", "Latvia", "Netherlands", "Russia", "Estonia", "Belgium", "Czech", "Greece", "Portugal", "Sweden"];

        $south_america = ["Argentina", "Bolivia", "Brazil", "Chile", "Colombia", "Costa Rica", "Ecuador", "El Salvador", "Guatemala", "Honduras", "Mexico", "Nicaragua", "Panama", "Paraguay", "Peru", "Dominican Republic", "Uruguay"];

        if ($area == "europe")
            return $europe;
        if ($area == "asia")
            return $asia;

        return $south_america;
    }

    public function liveSearch(Request $request)
    {
        $query = $request->input('query');
        if (!$query) return response()->json([], 200);

        $locations = Location::where('name', 'like', "%$query%")->limit(5)->get();
        return response()->json($locations, 200);
    }


}
