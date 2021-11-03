<?php

namespace App\Http\Livewire\Admin\episode;

use App\Models\Course;
use App\Models\Episode;
use Livewire\Component;

class Update extends Component
{
    public $title;
    public $slug;
    public $content;
    public $online;
    public $duration;
    public $Video_path;
    public $ressource;
    public $premium;
    public $youtube_id;
    public $episode_id;
    public $course_id;
    public $courses;


    public function mount($id)
    {


        $this->courses=Course::orderBy('title')
        ->pluck('title','id')
        ->toArray();

        $this->episode = episode::findOrFail($id);
        $this->episode_id = $id;
        $this->title = $this->episode->title;
        $this->online= $this->episode->online;
        $this->ressource = $this->episode->ressource;
        $this->content = $this->episode->content;
        $this->course_id = $this->episode->course_id;

    }
    public function render()
    {
        return view('livewire.admin.episode.update')->extends('layouts.admin');
    }

    public function update()
    {
       $data = $this->validate([
            'title' => 'required',
            'ressource' => 'required|min:20',
            'content' => 'required |min:50',
        ]);

        if($this->episode_id){
            $episode= Episode::find($this->episode_id);
             $episode->update([
                'title' => $this->title,
                'online' => $this->online,
                'ressource' => $this->ressource,
                'content' => $this->content,
                'course_id' => $this->course_id,
            ]);
        }
        session()->flash('success', 'episode Modified Successfully.');

        return redirect()->route('listepisode');


    }




}
