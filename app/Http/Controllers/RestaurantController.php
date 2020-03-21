<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function getMenu(){
        //$breakfast = Restaurant::where('period','Breakfast');
        $breakfast = Restaurant::where('period','Breakfast')->get();
        $lunch = Restaurant::where('period','Lunch')->get();
        $dinner = Restaurant::where('period','Dinner')->get();
        return view('layout.restaurant',['breakfast' => $breakfast, 'lunch' => $lunch, 'dinner' => $dinner]);
    }
}
