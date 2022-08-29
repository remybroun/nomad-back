<?php

namespace App\Http\Controllers;

use App\Models\HostFormAnswer;
use Illuminate\Http\Request;
use App\Notifications\SendEmail;
use Illuminate\Support\Facades\Notification;

class FormController extends Controller
{
    public function index(Request $request){
        dd($request->all());
    }
    public function store(Request $request){
        Notification::route('mail', [
            'remy@broun.fr' => 'Remy Broun',
        ])->notify(new SendEmail($request->all()));



        // dd($request->all());
        return response()->json([], 200);
    }

    public function storeHostAnswers(Request $request){
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'listing_url' => 'required',
        ]);

         $answer = HostFormAnswer::create([
             'first_name' => request('first_name'),
             'last_name' => request('last_name'),
             'email' => request('email'),
             'listing_url' => request('listing_url'),
         ]);
        return response()->json(['data' => $answer], 200);
    }
}
