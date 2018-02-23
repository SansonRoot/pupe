<?php

namespace App\Http\Controllers\Hotel\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //

    protected $redirectTo = '/hotel/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin(){
        return view('hotel.auth.login');
    }

    public function login(Request $request){

        $validator = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);

        if($validator->fails()){
            return view('hotel.auth.login',['errors'=>$validator->getMessageBag()]);
        }

        if(Auth::guard('hotel')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect('/hotel/dashboard');
        }
        return redirect('/hotel/login');
    }

}
