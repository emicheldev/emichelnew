<?php

namespace App\Http\Livewire\Subscriptions;

use Livewire\Component;

class Payment extends Component
{
    public $data;
    public function mount()
    {
       $data = ['intent' => auth()->user()->createSetupIntent()];
    }
    public function render()
    {
        $data = ['intent' => auth()->user()->createSetupIntent()];
        return view('livewire.subscriptions.payment')->with($data)->extends('layouts.app');
    }
}
