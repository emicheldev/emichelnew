<?php

namespace App\Http\Livewire\Admin\Episode;

use App\Models\Episode;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $episodes = Episode::orderByDesc('updated_at')->get();

        return view('livewire.admin.episode.index', ['episodes'=> $episodes])->extends('layouts.admin');
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        Episode::find($id)->delete();
        session()->flash('success', 'Episode Deleted Successfully.');
    }
}
