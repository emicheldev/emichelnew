<?php

namespace App\Http\Livewire\Learning;

use Livewire\Component;

class Course extends Component
{
    public function render()
    {
        return view('livewire.learning.Course' )->extends('layouts.app');
    }
}
