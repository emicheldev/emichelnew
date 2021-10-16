<?php

namespace App\Http\Livewire\Admin\Tag;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.tag.index')->extends('layouts.admin');
    }
}
