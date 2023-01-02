<?php

namespace App\Http\Controllers;

use App\Models\HostFormAnswer;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Notifications\SendEmail;
use Illuminate\Support\Facades\Notification;

class FormController extends Controller
{
    public function index(Request $request){
        dd($request->all());
    }
    public function store(Request $request){

        request()->validate([
            'email' => 'required',
            'form' => 'optional',
        ]);
        
        Contact::firstOrCreate([
            'email' => request('email'),
            'form' => request('form'),
        ]);

        Notification::route('mail', [
            'remy@broun.fr' => 'Remy Broun',
        ])->notify(new SendEmail($request->all()));
        return response()->json([], 200);
    }


    public function storeSettleForm(Request $request){
        request()->validate([
            'full_name' => 'optional',
            'email' => 'optional',
            'additional_link' => 'required',
        ]);

         $answer = Contact::firstOrCreate([
             'full_name' => request('full_name'),
             'email' => request('email'),
             'additional_link' => request('additional_link'),
             'form' => 'settle',
         ]);
        return response()->json(['data' => $answer], 200);
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
