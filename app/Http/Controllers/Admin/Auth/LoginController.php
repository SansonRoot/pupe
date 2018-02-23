<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    protected $redirectTo = '/admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

        if(Auth::guard('admin')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login');
    }

    public function showLogin(){
        return view('admin.auth.login');
    }

}
