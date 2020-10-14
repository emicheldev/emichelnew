<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use App\Article;

class Index extends Component
{
    public function render()
    {
        $articles = Article::orderByDesc('updated_at')->get();
        return view('livewire.admin.blog.index',['articles' => $articles]);
    }
}
