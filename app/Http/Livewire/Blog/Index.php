<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Article;

class Index extends Component
{
    public function render()
    {
        $articles = Article::orderByDesc('updated_at')->where('online', true)->get();
        return view('livewire.blog.index', ['articles' => $articles]);
    }
}
