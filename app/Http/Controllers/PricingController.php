<?php

namespace App\Http\Controllers;

class PricingController extends Controller
{
    public function index()
    {
        $tiers = [
            [
                'name' => 'Nomad Post',
                'href' => 'https://buy.stripe.com/dR69Bl6OLcrEdzOeUX',
                'priceMonthly' => 10,
                'description' => 'Advertise your listing forever to a community of remote workers.',
                'features' => [
                    'Post your airbnb on Nomad Living',
                    'Posted Forever',
                    'Additional amenity information',
                    'Posted on Nomad Living community',
                ],
            ],
            [
                'name' => 'Stay on top',
                'href' => 'https://buy.stripe.com/aEU14P8WTdvI8fu28c',
                'priceMonthly' => 100,
                'description' => 'Promote your listing for a whole week! Stay on top of all other listings.',
                'features' => [
                    'Post your airbnb on Nomad Living',
                    'Posted Forever',
                    'Additional amenity information',
                    'Featured listing for 1 week',
                    'Posted on Nomad Living community',
                    'Posted on Official Instagram page',
                ],
            ],
        ];

        return view('pricing', compact('tiers'));
    }
}
