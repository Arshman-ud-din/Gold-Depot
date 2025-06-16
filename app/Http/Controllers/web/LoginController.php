<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForgotPasswordRequest;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreResetPasswordRequest;
use App\Mail\SendForgotPasswordMail;
use App\Events\ForgotPassword;
use App\Models\PasswordResetToken;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Http\Request;
use Str;

class LoginController extends Controller
{
    public function loginview()
    {

        return view('screens.web.signup.login');
    }
    public function login(StoreLoginRequest $request)
    {

        $user = $request->all('email', 'password');

        if (Auth::attempt($user)) {

            return redirect()->route('web.index')->with('userlogin', 'You are Successful Login');
        } else {
            return view('screens.web.signup.login')->with('loginerror', 'you credentials is not match');
        }
    }

    public function forgot()
    {
        return view('screens.web.forgot-password.index');
    }



    public function forgotpassword(StoreForgotPasswordRequest $request)
    {
        $token = Str::random(70);

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => $token,
                'created_at' => Carbon::now(),
            ]
        );

        event(new ForgotPassword($request->email, $token));

        return redirect()->route('web.index')->with('successforgot', 'Email Sent Successfully');
    }

    public function reset($token){

        $resetpassword = PasswordResetToken::where('token', $token)->first();

        if (!$resetpassword) {
            return view('erorrs.404');
        }

        return view('screens.web.forgot-password.reset-password',[
            'email' => $resetpassword->email,
            'token' => $token
        ]);
    }

    public function resetpassword(StoreResetPasswordRequest $request){

        // dd($request->all());
        $resetpassword =  DB::table('password_reset_tokens')->where([

            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if(!$resetpassword){

            return back();
        }

        User::where('email',$request->email)->update([
            'password' => Hash::make($request->password),
        ]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();


        return redirect()->route('login')->with('resetpassword','Your Password Is Change');
    }


}
