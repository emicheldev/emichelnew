<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;
use App\Models\Category;

class Index extends Component
{
    use WithPagination;


    public $searchArticle;
    public $searchCategory;

    public function updatingSearchArticle()
    {
        $this->resetPage();
    }

    public function updatingSearchCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchArticle = '%'.$this->searchArticle.'%';
        $searchCategory = '%'.$this->searchCategory.'%';

        $this->articles = Article::with('author','category')
            ->where('title', 'like', $searchArticle)
            ->leftJoin('categories', 'articles.category_id', '=', 'categories.id')
            ->where('categories.name', 'like', $searchCategory)
            ->select('articles.slug','articles.created_at',
                    'articles.image',
                    'title',
                    'view_count',
                    'articles.description',
                    'author_id',
                    'name','icon','color')
            ->orderByDesc('created_at')->paginate(12);
            $categories=Category::select('id','name','icon','color')->get();

        return view('livewire.blog.index', ['articles' => $this->articles, 'categories'=> $categories])->extends('layouts.app');
    }
}
