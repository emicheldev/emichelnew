<?php

namespace App\Http\Livewire\Blog;

use App\Models\Category as cat;
use Livewire\Component;

class Category extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = cat::all();
        dd($this->categories);
    }
    public function render()
    {
        return view('livewire.blog.category')->extends('layouts.app');
    }
}
