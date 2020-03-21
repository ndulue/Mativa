<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function getabout(){
        return view('layout.about');
    }
}
