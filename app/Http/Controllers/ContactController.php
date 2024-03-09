<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
//    joinNewsletter
    public function joinNewsletter(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        Contact::create($request->all());
        return back()->with('message', 'Thank you for joining our newsletter!');
    }
    public function contact(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Contact::create($request->all());
        return response()->json(['message' => 'Thank you for contacting us!']);
    }
//    public function contactForm(){
//        return view('contact');
//    }
//    public function joinNewsletterForm(){
//        return view('join-newsletter');
//    }
}
