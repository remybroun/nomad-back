<?php

namespace App\Http\Controllers\Owners;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;


class OwnerController extends Controller
{
    public function joinForm(Request $request)
    {
        $new_owner = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'company' => '',
            'city' => 'required',
        ]);

        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            Auth::login($existingUser, true);
//            update user details
            $existingUser->update([
                'first_name' => $request->first_name,
                'phone' => $request->phone ?? null,
                'city' => $request->city ?? null,
                'company' => $request->company ?? null,
                'instagram' => $request->instagram ?? null,
                'linkedin' => $request->linkedin ?? null,
            ]);
        } else {
            $user = User::create([
                'email' => $request->email,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name ?? null,
                'city' => $request->city ?? null,
                'company' => $request->company ?? null,
                'password' => Hash::make('password'),
                'instagram' => $request->instagram ?? null,
                'linkedin' => $request->linkedin ?? null,
                'superuser' => false,
                'is_owner' => true,
            ]);
            Events::create([
                'route' => $request->path(),
                'ip' => $request->ip(),
                'user_id' => Auth::id(),
                'tag' => 'signup',
            ]);
            Auth::login($user, true);
            $user->notify(new WelcomeUser());
        }

        return redirect(route('owner-dashboard'));
    }

    public function join()
    {
        return view('owners.join');
    }
//
//    public function showDashboard()
//    {
//        $properties = auth()->user()->properties;
////        Total reservations:
//        $totalReservations = $properties->map(function ($property) {
//            return $property->reservations->count();
//        })->sum();
//
//        // Total revenue:
//        $totalRevenue = $properties->map(function ($property) {
//            return $property->reservations->map(function ($reservation) {
//                if ($reservation->status == 'confirmed') {
//                    return $reservation->total_price;
//                }
//            })->sum();
//        })->sum();
//
//        $totalViews = $properties->map(function ($property) {
////            Return total views per property
//            return $property->views->count();
//        })->sum();
//
//        return view('owners.dashboard', compact('properties', 'totalReservations', 'totalRevenue', 'totalViews'));
//    }
//
//    public function showProperty(Property $property)
//    {
//
//        $property = $property->load('location', 'allImages', 'livingSpaceImages', 'workspaceImages', 'featuredImages');
//
//        $property->livingSpaceImages = $property->livingSpaceImages->map(function ($image) {
//            return $image->url;
//        });
//        $property->workspace_images = $property->workspaceImages->map(function ($image) {
//            return $image->url;
//        });
//        $property->featured_images = $property->featuredImages->map(function ($image) {
//            return $image->url;
//        });
//
//
//        return view('owners.property', compact('property'));
//    }
//
//    public function createProperty(Request $request)
//    {
//        $input = $request->except(['_token', '_method']);
//
//        $property = Property::create([
//            'title' => "",
//            'description' => "",
//            'amenities' => "[]",
//            'arrangements' => "[]",
//            'airbnb_link' => "",
//            'price_per_month' => "",
//            'is_opened' => false,
//            'internal_url' => "",
//            'slug' => uuid_create(),
//            'main_image' => "",
//            'address' => "",
//            'lng' => 0,
//            'lat' => 0,
//            'location_id' => null,
//        ]);
////        Associate user to property
//        $property->users()->attach(auth()->id());
//
//        return redirect(route('owner-property-edit', $property));
//    }
//
//    public function editProperty(Property $property)
//    {
//        $property = $property->load('location', 'allImages', 'livingSpaceImages', 'workspaceImages', 'featuredImages');
//
//        $property->livingSpaceImages = $property->livingSpaceImages->map(function ($image) {
//            return $image->url;
//        });
//        $property->workspace_images = $property->workspaceImages->map(function ($image) {
//            return $image->url;
//        });
//        $property->featured_images = $property->featuredImages->map(function ($image) {
//            return $image->url;
//        });
//
//        return view('owners.properties.edit', compact('property'));
//    }
//
//    public function showReservations(Request $request)
//    {
//        $properties = auth()->user()->properties;
//        $reservations = $properties->map(function ($property) {
//            return $property->reservations;
//        })->flatten();
//
//        return view('owners.reservations.index', compact('reservations'));
//    }
}
