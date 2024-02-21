<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
        public function join(Request $request)
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


//            $user->notify(new WelcomeUser());
        }

        return redirect(route('owner-dashboard'));
    }
}
