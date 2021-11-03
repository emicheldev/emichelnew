<?php

namespace App\Http\Livewire\Tutorial;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Tutorial extends Component
{

    // We will get search result here
    protected function _videoLists()
    {

        $apiKey = config('services.youtube.api_key');
        $chanel_id = config('services.youtube.channel_id');

        $url = "https://www.googleapis.com/youtube/v3/search?key=".$apiKey."&channelId=".$chanel_id."&part=snippet,id&order=date&maxResults=20";

        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        return $results;
    }

    public function render()
    {
        $videos = $this->_videoLists()->items;
        return view('livewire.tutorial.tutorial', compact('videos'))->extends('layouts.app');
    }
}
