<?php

namespace App\Http\Controllers\Hotel\Auth;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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
        $this->middleware('guest');
    }

    public function showRegister($id)
    {
        $hotel = Hotel::where('token', $id)->first();

        if ($hotel != null && $hotel->verified) {
            return view('hotel.auth.register', ['hotel' => $hotel]);
        } else {
            return view('hotel.auth.token');
        }
    }

    public function showToken()
    {
        return view('hotel.auth.token');
    }

    public function register(Request $request)
    {

        if (!isset($request['token'])) {
            return redirect('hotel/token');
        }

        $hotel = Hotel::where('token', $request['token'])->first();

        if (!$hotel) {
            return redirect('hotel/token');
        }

        $email_rule = 'required|unique:hotels';
        $phone_rule = 'required|unique:hotels';

        if ($hotel->email == $request['email']) {
            $email_rule = 'required';
        }
        if ($hotel->phone == $request['phone']) {
            $phone_rule = 'required';
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required|confirmed|min:6',
            'email' => $email_rule,
            'token' => 'required',
            'region' => 'required',
            'phone' => $phone_rule
        ]);

        if ($validator->fails()) {
            return view('hotel.auth.register', ['hotel' => $hotel,'errors'=>$validator->getMessageBag()]);
        }

        $image = 'avatar.jpg';

        if ($request->hasFile('image')) {
            $ext = $request->file('image')->extension();

            $image = uniqid() . '.' . $ext;

            $request->file('image')->move('img/uploads/', $image);

        }

        $update = $hotel->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'region' => $request['region'],
            'phone' => $request['phone'],
            'password' => bcrypt($request['password']),
            'image' => $image
        ]);

        if ($update) {

            if (Auth::guard('hotel')->attempt(['email' => $request['email'], 'password' => $request['password']])) {

                return redirect()->intended('/hotel/dashboard');

            }
            return redirect('/hotel/login');

        }

        //return view('hotel.auth.register',['status'=>'failed','hotel'=>$hotel]);

    }

    public function verify(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'token' => 'required'
        ]);

        if (!$validation->fails()) {

            $hotel = Hotel::where('token', $request['token'])->first();

            if ($hotel) {
                $hotel->update(['verified' => 1]);

                return redirect('/hotel/register/' . $request['token']);
            }

            return redirect('/hotel/token');

        }
        return view('hotel.auth.token', ['errors' => $validation->getMessageBag()]);
    }
}
