<?php

namespace App\Http\Livewire\Admin\Course;

use App\Models\course;
use Livewire\Component;

use App\Models\Category;
use Illuminate\Support\Str;
use League\CommonMark\CommonMarkConverter;


class Create extends Component
{
    public $title;
    public $slug;
    public $description;
    public $introduction;
    public $image;
    public $online;
    public $author_id;
    public $prerequisites;
    public $level;
    public $youtube_id;
    public $category_id;
    public $categories;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'introduction' => 'required',
        'image' => 'required',
        'online' => 'required',
        'prerequisites' => 'required',
        'level' => 'required',
        'youtube_id' => 'required',
        'category_id' => 'required',

    ];


 
    
    /**
     * mount
     *
     * @return void
     */
    public function mount(){
       
        $this->categories=Category::orderBy('name')
        ->pluck('name','id')
        ->toArray();
    }

    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.admin.course.create')->extends('layouts.admin');
    }
    
    /**
     * savecourse
     *
     * @return void
     */    
   
    public function savecourse()
    {
         $this->validate();
      
        $course=Course::create([
            'title' =>  $this->title,
            'online' => $this->online,
            'description' => $this->description,
            'introduction' => (new CommonMarkConverter())->convertToHtml($this->introduction),
            'prerequisites' => (new CommonMarkConverter())->convertToHtml($this->prerequisites),
            'image' => $this->image,
            'level' => $this->level,
            'youtube_id' => $this->youtube_id,
            'slug' =>  Str::slug($this->title),
            'author_id' => auth()->user()->id,
            'category_id' => $this->category_id,
        ]);

        session()->flash('success', 'Cours crée avec success 👌.');

        return redirect()->route('createcourse');


    }
    
    
}
