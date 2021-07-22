<?php

namespace App\Http\Livewire\Learning;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.learning.show')->extends('layouts.app');
    }
}
