<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\User;

class Index extends Component
{

    public function render()
    {
        $users=User::get();
        return view('livewire.admin.user.index', compact('users'))->extends('layouts.admin');
    }

    public function destroy($id)
    {
        try {
            User::find($id)->delete();
            session()->flash('success',"Utilisateur suppimer avec succes !");
        } catch (\Throwable $th) {
            session()->flash('error',"Il y a eu une erreur ");
        }
    }
}
