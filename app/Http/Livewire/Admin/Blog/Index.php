<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public function render()
    {
        $articles = Article::orderByDesc('updated_at')->get();
        return view('livewire.admin.blog.index',['articles' => $articles])->extends('layouts.admin');
    }
}
