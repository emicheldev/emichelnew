<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{
 
    public function render()
    {
        return view('livewire.admin.index')->extends('layouts.admin'); 
    }
}
