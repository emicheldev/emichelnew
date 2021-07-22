<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Livewire\Component;
use App\Mail\VerifyMail;
use App\Models\VerifyUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';
 

    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        $user->sendEmailVerificationNotification();
        event(new Registered($user));
        //event(new Registered($user));

        // $verifyUser = VerifyUser::create([
        //     'user_id' => $user->id,
        //     'token' => sha1(time())
        // ]);
        
        // \Mail::to($user->email)->send(new VerifyMail($user));

        // //Auth::login($user, true);

        // dd($verifyUser);

        // redirect()->intended(route('home'));
        
        // Auth::login($user, true);
        session()->flash('message', 'Post successfully updated.');


        redirect()->to("register");
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
