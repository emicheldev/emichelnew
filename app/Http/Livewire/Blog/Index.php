<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Article;

class Index extends Component
{
    use WithPagination;

    public $searchArticle;

    public function render()
    {
        $searchArticle = '%'.$this->searchArticle.'%';
        $articles = Article::orderByDesc('updated_at')->where('title','like', $searchArticle)->get();

        return view('livewire.blog.index', ['articles' => $articles])->extends('layouts.app');
    }
}
