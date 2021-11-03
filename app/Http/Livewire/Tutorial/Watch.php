<?php

namespace App\Http\Livewire\Tutorial;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Watch extends Component
{
    public $videoId;
    public $item;

    protected $rules= ['videoId' => 'required'];

    public function mount($videoId)
    {
        $this->validate();
        $this->item =  $this->_singleVideo($videoId);

    }

    protected function _singleVideo($id)
    {
        $apiKey = config('services.youtube.api_key');
        $part = 'snippet';
        $url = "https://www.googleapis.com/youtube/v3/videos?part=$part&id=$id&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);

        // Will create a json file to see our single video details
        return $results;
    }
    public function render()
    {
        return view('livewire.tutorial.watch')->extends('layouts.app');
    }
}
