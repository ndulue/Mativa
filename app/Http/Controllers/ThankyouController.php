<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThankyouController extends Controller
{
    public function thankyou(){
        return view('layout\thank-you');
    }
}
