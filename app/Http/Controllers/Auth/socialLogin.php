<?php

namespace App\Http\Controllers\auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class socialLogin extends Controller
{
    public function Login ($social)
    {

       return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social)
    {
        $userSocial = Socialite::driver($social)->user();
        dd($userSocial);
        $user = User::where(['email' => $userSocial->getEmail()])->first();
        if ($user) {
            Auth::login($user);
            return redirect()->action('HomeController@index');
        } else {
            return view('auth.register', ['name' => $userSocial->getName(), 'email' => $userSocial->getEmail()]);
        }
    }
}
