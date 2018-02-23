<?php

namespace App\Http\Controllers\Hotel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth:hotel');
    }
    public function index(){
        return view('hotel.dashboard');
    }


    public function getRooms(){
        return view('hotel.rooms');
    }

    public function getFacilities(){
        return view('hotel.facilities');
    }

    public function getBookings(){
        return view('hotel.bookings');

    }

    public function getSettings(){
        return view('hotel.settings');
    }

    public function updateHotel($field,$data){
        $update = Auth::guard('hotel')->user()->update([$field=>$data]);

        if($update){
            return response()->json(['field'=>$field,'status'=>1]);
        }
        return response()->json(['field'=>$field,'status'=>0]);

    }
}
