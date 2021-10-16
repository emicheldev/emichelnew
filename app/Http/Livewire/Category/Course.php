<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class Course extends Component
{
    public $category;
    public $courses;
    public function mount($category)
    {
        $this->category = Category::where('slug',$category)->first(['id','name','description','icon']);
        $this->courses = $this->category->courses;

    }

    public function render()
    {

        return view('livewire.category.course')->extends('layouts.app');
    }
}
