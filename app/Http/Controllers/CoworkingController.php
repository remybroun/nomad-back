<?php

namespace App\Http\Controllers;
use App\Models\Coworking;
use Illuminate\Http\Request;

class CoworkingController extends Controller
{
    public function show(Coworking $coworking){
        return new Coworking($coworking);
    }
}
