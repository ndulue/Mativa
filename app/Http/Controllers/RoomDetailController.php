<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room; 

class RoomDetailController extends Controller
{
    public function getRoomDetail($id){
        $RoomDetails = Room::find($id);
        return view('layout.roomdetails', ['RoomDetails' => $RoomDetails]);
    }

    public function getBooking(Request $request){

        $request->validate([
            'email' => 'required|max:50',
            'arrival' => 'required|date|after_or_equal:today',
            'departure' => 'required|date|after:arrival',
            'guest' => 'required',
            'room' => 'required'
        ]);

        return redirect()->route('checkout.index')->with([
            'email' => $request->input('email'),
            'guest' => $request->input('guest'),
            'arrival' => $request->input('arrival'),
            'departure' => $request->input('departure'),
            'room' => $request->input('room'),
            'time' => abs(strtotime($request->input('arrival')) - strtotime($request->input('departure')))
        ]);

        return [
            'email.required' => 'enter your email address',
            'arrival.required' => 'enter your arrival date',
            'departure.required' => 'enter your departure date',
            'guest.required' => 'enter the number of guest',
            'room.required' => 'enter the room of your choice',
            'departure.after:arrival' => 'enter a valid date after your arrival',
            'email.max:50' => 'only 50 characters are allowed for this field'

        ];
    }
}
