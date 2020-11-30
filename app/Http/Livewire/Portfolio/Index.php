<?php

namespace App\Http\Livewire\Portfolio;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $articles;    
    /**
     * mount
     *
     * @return void
     */
    public function mount()
    {
        //dd(Article::limit(1)->makeHidden(['content','image'])->get());
        $this->articles = Article::limit(3)->published()->get();
    }
    public function render()
    {
        return view('livewire.portfolio.index')->extends('layouts.simple');
    }
}
