<?php

namespace App\Http\Livewire\Learning;

use App\Models\Course;
use Livewire\Component;

class Show extends Component
{
    public $course;

    public function mount(Course $course)
    {

        $this->course = $course;
    }
    public function render()
    {   
        return view('livewire.learning.show')->extends('layouts.app');
    }
}
