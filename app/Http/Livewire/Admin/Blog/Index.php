<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $title='';
    public $slug;
    public $description;
    public $content;
    public $image;
    public $status;
    public $author_id;
    public $categories;
    public $category_id;
    public $tags_id=[];
    public $tags=[];
    public $article_id;
    public $updateMode = false;

    use WithPagination;
    
    public function render()
    {
        $articles = Article::orderByDesc('updated_at')->get();
        return view('livewire.admin.blog.index',['articles' => $articles])->extends('layouts.admin');
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit($id){
        $article = Article::findOrFail($id);
        $this->article_id = $id;
        $this->title = $article->title;
        $this->status = $article->status;
        $this->description = $article->description;
        $this->content = $article->content;
        $this->image = $article->image;
        $this->category_id = $article->category_id;
        
        $this->updateMode = true;
    }
    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
