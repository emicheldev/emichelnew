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
 
    
    /**
     * register new user
     *
     * @return void
     */
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

        
        $user->assignRole('user');

        $user->sendEmailVerificationNotification();
        event(new Registered($user));
       
        session()->flash('successs', 'User successfully.');


        redirect()->to("register");
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
