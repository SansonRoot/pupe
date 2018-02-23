<?php

namespace App\Http\Controllers\Admin;

use App\Hotel;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function getHotels(){
        return view('admin.hotels.show',['hotels'=>Hotel::all()->sortByDesc('updated_at')]);
    }
    public function getUsers(){
        return view('admin.users.show',['users'=>User::all()->sortByDesc('updated_at')]);
    }

    public function newHotelView(){
        return view('admin.hotels.new');
    }

    public function addHotel(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|unique:hotels',
            'phone'=>'required|unique:hotels'
        ]);

        $token  = substr(md5($request['name']),0,10);

        if(!$validator->fails()){
            $hotel = Hotel::create([
                'name'=>$request['name'],
                'email'=>$request['email'],
                'phone'=>$request['phone'],
                'token'=>$token
            ]);

            if($hotel){
                return view('admin.hotels.new',['status'=>'success','hotel'=>$hotel]);
            }
            return view('admin.hotels.new',['status'=>'failed']);
        }
        return view('admin.hotels.new',['status'=>'failed','errors'=>$validator->getMessageBag()]);
    }

    public function removeHotel($id){

    }

    public function activateHotel($id,$state){


            $hotel = Hotel::find($id);
            if($hotel->update(['active'=>$state])){
                return response()->json(['status'=>1,'name'=>$hotel->name]);
            }

            return response()->json(2);



    }
}
