<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public $title;
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

    public function mount(){
        $this->tags=Tag::orderBy('title')
        ->pluck('title','id')
        ->toArray();

        $this->categories=Category::orderBy('name')
        ->pluck('name','id')
        ->toArray();

        // dd($this->categories[]);
    }


    public function render()
    {
        return view('livewire.admin.blog.create')->extends('layouts.admin');
    }
    
    /**
     * savePost
     *
     * @return void
     */
    public function savePost()
    {
       $data = $this->validate([
            'title' => 'required',
            'description' => 'required|min:20',
            'content' => 'required |min:50',
            'image' => 'required',
        ]);

        $Article=Article::create([
            'title' => $this->title,
            'status' => $this->status,
            'description' => $this->description,
            'content' => $this->content,
            'image' => $this->image,
            'slug' =>  Str::slug($this->title),
            'author_id' => auth()->user()->id,
            'category_id' => $this->category_id,
            ]);

        $Article->tags()->attach($this->tags_id);

    }
}
