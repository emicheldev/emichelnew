<?php

namespace App\Http\Livewire\Learning;

use Livewire\Component;

class Detail extends Component
{
    public function render()
    {
        return view('livewire.learning.detail')->extends('layouts.app');
    }
}
