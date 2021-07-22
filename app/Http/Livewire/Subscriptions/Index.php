<?php

namespace App\Http\Livewire\Subscriptions;

use Livewire\Component;
use App\Models\Plans;

class Index extends Component
{
    public $plans;

    public function mount()
    {
        $this->plans = Plans::get();
    }
    
    public function render()
    {
        return view('livewire.subscriptions.index')->extends('layouts.app');
    }
}
