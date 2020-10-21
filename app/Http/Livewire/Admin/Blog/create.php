<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.admin.blog.create')->extends('layouts.admin');
    }
}
