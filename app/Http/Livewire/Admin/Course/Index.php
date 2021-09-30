<?php

namespace App\Http\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $courses = Course::orderByDesc('updated_at')->get();

        return view('livewire.admin.course.index', ['courses'=> $courses])->extends('layouts.admin');
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        session()->flash('success', 'Post Deleted Successfully.');
    }
}
