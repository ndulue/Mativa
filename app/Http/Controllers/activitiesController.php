<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activitiesController extends Controller
{
    public function getactivities(){
        return view('layout.activities');
    }
}
