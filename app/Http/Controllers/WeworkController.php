<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wework;

class WeworkController extends Controller
{
    public function show($wework_slug){
        $wework = Wework::with("images")->where('slug', $wework_slug)->first();
        return response()->json($wework, 200);
    }

    public function ranking(){
        $weworks = Wework::orderBy('score', 'DESC')->orderBy('country', 'ASC')->paginate(50);
        return response()->json($weworks, 200);
    }

    public function all(){
        $weworks = Wework::get();
        return response()->json($weworks, 200);
    }
    
    public function upvote(Wework $wework){

        $wework->score = $wework->score + 1.0;
        $wework->save();

        return response()->json($wework, 200);
    }

}
