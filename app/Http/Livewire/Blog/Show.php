<?php

namespace App\Http\Livewire\Blog;


use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\Tag;
use App\Models\Post;
use App\Http\Requests;
use App\Models\Category;


use App\Models\Article as ModelArticle;
use App\Repositories\ArticleRepositoryInterface;

class Show extends Component
{
    public $article;
    public $populars;

    public function mount(ModelArticle $article)
    {
        $article->increment('view_count');
        $this->article= $article;
        $this->populars= $article::with(['category','author'])->where('id','!=',$article->id)->limit(4)->Popular()->get();

    }

    public function render()
    {
        return view('livewire.blog.show')->extends('layouts.app');
    }
}
