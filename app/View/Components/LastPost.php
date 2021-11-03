<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class LastPost extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $lastposts;
    public function __construct()
    {
        $this->lastposts = Article::select(['id','slug','title'])->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.last-post');
    }
}
