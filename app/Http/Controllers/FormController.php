<?php

namespace App\Http\Controllers;

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
}
