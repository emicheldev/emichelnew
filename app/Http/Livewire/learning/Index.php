<?php

namespace App\Http\Livewire\learning;

use App\Models\Course;

use Livewire\Component;

class Index extends Component
{   
    /**
     *
     * @return void
     */
    public function render()
    {
        $courses = Course::orderByDesc('updated_at')->get();

        return view('livewire.learning.index', ['courses'=> $courses])->extends('layouts.app');
    }
}
