<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wework;

class WeworkController extends Controller
{
    public function show($id){
        $wework = Wework::find($id);
        return response()->json($wework, 200);
    }

    public function index(){
        $weworks = Wework::orderBy('score', 'DESC')->orderBy('country', 'ASC')->paginate(50);
        return response()->json($weworks, 200);
    }

}
