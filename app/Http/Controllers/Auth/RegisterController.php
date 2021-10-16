<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Routing\Controller;

class RegisterController extends Controller
{

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
            $verifyUser->user->verified = 1;
            $verifyUser->user->save();
            $online= "Your e-mail is verified. You can now login.";
            } else {
            $online= "Your e-mail is already verified. You can now login.";
            }
        } else {
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }
    return redirect('/login')->with('status', $status);
    }
}