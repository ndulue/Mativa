<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spaController extends Controller
{
    public function getspa(){
        return view('layout.spa');
    }
}
