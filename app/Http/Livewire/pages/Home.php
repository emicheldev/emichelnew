<?php

namespace App\Http\Livewire\Pages;

use App\Models\Category;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $categories = Category::with('courses')->get();
        return view('livewire.pages.home', compact('categories'))->extends('layouts.app');
    }
}
