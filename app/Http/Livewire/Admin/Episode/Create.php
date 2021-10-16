<?php

namespace App\Http\Livewire\Admin\Episode;

use App\Models\Course;
use App\Models\episode;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Episode as Episod;
use League\CommonMark\CommonMarkConverter;

class Create extends Component
{
    public $title;
    public $slug;
    public $content;
    public $duration;
    public $Video_path;
    public $ressource;
    public $premium;
    public $youtube_id;
    public $course_id;
    public $courses;

    protected $rules = [
        'title' => 'required',
        'content' => 'required',
        'duration' => 'required',
        'ressource' => 'required',
        'premium' => 'required',
        'youtube_id' => 'required',
        'course_id' => 'required',

    ];


 
    
    /**
     * mount
     *
     * @return void
     */
    public function mount(){
       
        $this->courses=Course::orderBy('title')
        ->pluck('title','id')
        ->toArray();

    }

    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.admin.episode.create')->extends('layouts.admin');
    }
    
    /**
     * saveepisode
     *
     * @return void
     */    
   
    public function saveepisode()
    {
         $this->validate();
      
        $episode=episode::create([
            'title' =>  $this->title,
            'content' => (new CommonMarkConverter())->convertToHtml($this->content),
            'ressource' => (new CommonMarkConverter())->convertToHtml($this->ressource),
            'Video_path' => $this->Video_path,
            'duration' => (int)$this->duration,
            'premium' => $this->premium,
            'youtube_id' => $this->youtube_id,
            'slug' =>  Str::slug($this->title),
            'course_id' => $this->course_id,
        ]);

        session()->flash('success', 'Cours crée avec success 👌.');

        return redirect()->route('createepisode');


    }
    
    
}