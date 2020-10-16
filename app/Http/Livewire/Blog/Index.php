<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;

class Index extends Component
{
    use WithPagination;


    public $searchArticle;
    public $searchCategory;

    public function render()
    {
        $searchArticle = '%'.$this->searchArticle.'%';
        $searchCategory = '%'.$this->searchCategory.'%';

        $this->articles = Article::with('author','category')
            ->where('title', 'like', $searchArticle)
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->where('categories.name', 'like', $searchCategory)
            ->published()->get();

        return view('livewire.blog.index', ['articles' => $this->articles])->extends('layouts.app');
    }
}
