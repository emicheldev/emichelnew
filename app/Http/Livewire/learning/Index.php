<?php

namespace App\Http\Livewire\learning;

use App\Models\Course;

use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    public $courses;
    /**
     *
     * @return void
     */
    public function render()
    {

        $this->courses = Course::with('episodes')
        ->whereOnline(true)
        ->orderByDesc('updated_at')->get();


        return view('livewire.learning.index', ['courses'=> $this->courses])->extends('layouts.app');
    }
}
