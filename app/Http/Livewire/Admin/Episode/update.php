<?php

namespace App\Http\Livewire\Admin\episode;

use App\Models\Course;
use App\Models\Episode;
use Livewire\Component;
use App\Models\Category;

class Update extends Component
{
    public $title='';
    public $slug;
    public $description;
    public $content;
    public $image;
    public $online;
    public $author_id;
    public $categories;
    public $category_id;
    public $tags_id=[];
    public $tags=[];
    public $article_id;
    public $article;
    public $availableTags=[];

    
    public function mount($id)
    {
        $this->availableTags =Tag::orderBy('title')
        ->pluck('title','id')
        ->toArray();

        $this->categories=Category::orderBy('name')
        ->pluck('name','id')
        ->toArray();
        
        $this->article = Article::findOrFail($id);
        $this->article_id = $id;
        $this->title = $this->article->title;
        $this->online= $this->article->status;
        $this->description = $this->article->description;
        $this->content = $this->article->content;
        $this->image = $this->article->image;
        $this->category_id = $this->article->category_id;
        // $this->tags= $this->article->tags->pluck('id')->toArray();
    }
    public function render()
    {
        return view('livewire.admin.episode.update')->extends('layouts.admin');
    }

    public function update()
    { 
       $data = $this->validate([
            'title' => 'required',
            'description' => 'required|min:20',
            'content' => 'required |min:50',
            'image' => 'required',
        ]);

        if($this->article_id){
            $article= Article::find($this->article_id);
             $article->update([
                'title' => $this->title,
                'status' => $this->status,
                'description' => $this->description,
                'content' => $this->content,
                'image' => $this->image,
                'category_id' => $this->category_id,
            ]);
        }
        $article->tags()->attach($this->tags_id);
        session()->flash('message', 'Post Created Successfully.');

        return redirect()->route('createpost');


    }

 
    
   
}
