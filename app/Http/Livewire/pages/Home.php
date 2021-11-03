<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use App\Models\Course;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $categories = Category::with('courses')->get();
        $courses = Course::with('episodes')->limit(4)->get();
        return view('livewire.pages.home', compact('categories','courses'))->extends('layouts.app');
    }
}
