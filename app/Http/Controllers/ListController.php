<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    function showListForm()
    {
        return view('list.index');
    }
}
