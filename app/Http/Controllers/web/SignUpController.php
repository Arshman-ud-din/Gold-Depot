<?php

namespace App\Http\Controllers\web;

use App\Events\SignUp;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSignUpRequest;
use App\Mail\SignUpUser;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function create(){

        return view('screens.web.signup.signup');
    }

    public function store(StoreSignUpRequest $request){

        $user = User::create([
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'role'=> 'null',
            'email'=> $request->email,
            'password'=> $request->password,
            'phone_number' => $request->phone_number,
        ]);

        event(new SignUp($user));

        Auth::login($user);

        if (Auth::check()) {

            return redirect()->route('web.index')->with('successregister','You are Register and Login Successful');
        }else{
            return view('screens.web.signup.signup');
        }
    }

    public function logout(){

        Auth::logout();

        return redirect()->route('login')->with('logoutsuccess','You Are Logout');
    }
}
