<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request){
        $validation = $this->validator($request->all());
        if(!$validation->fails()){

            $admin = Admin::create([
                'name' => $request['name'],
                'username' => $request['username'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'privilege'=>2,
                'password' => bcrypt($request['password'])
            ]);

            if($admin){
                if(Auth::guard('admin')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
                    return redirect('/admin/dashboard');
                }else{
                    return redirect('/admin/login');
                }
            }

            return view('admin.auth.register');


        }
        return view('admin.auth.register');
    }

    public function showRegister(){
        return view('admin.auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:admins|max:255',
            'phone' => 'required|string|unique:admins|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

}
