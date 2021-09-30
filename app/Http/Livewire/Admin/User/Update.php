<?php

namespace App\Http\Livewire\Admin\User;

use App\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $user;
    public $name;
    public $email;
    public $password;
    public $avatar;
    public $user_id;

   
    
    public function mount($id)
    {  
        $this->user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->avatar = $this->user->avatar;
    }

    public function render()
    {
        return view('livewire.admin.user.update')->extends('layouts.admin');
    }

    public function update()
    { 

       $data = $this->validate([
            'name' => 'required',
            'password' => 'required',
            'avatar' => 'image|max:1024 ',
        ]);

        if($this->User_id){
            $User= User::find($this->User_id);
             $User->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'avatar' => $this->avatar,
            ]);
        }
        session()->flash('message', 'User Created Successfully.');

        return redirect()->route('createuser');


    }

 
    
   
}
