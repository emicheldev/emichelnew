<?php

namespace App\Http\Livewire\Learning;

use App\Models\Course;
use App\Models\Episode as Episod;

use Livewire\Component;

class Episode extends Component
{
    public $course;
    public $episode;

    public function mount(Course $course, Episod $episode)
    {
        $this->course = $course;
        $this->episode = $episode;
    }

    public function render()
    {
        return view('livewire.learning.episode')->extends('layouts.app');
    }
}
