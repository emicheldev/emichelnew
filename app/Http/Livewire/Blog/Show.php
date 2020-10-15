<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Article;

class Show extends Component
{
    public $slug='';
    public $article;

    public function mount(Article $article)
    {
        $this->article = $article;

    }

    public function render()
    {
        return view('livewire.blog.show')->extends('layouts.app');
    }
}
