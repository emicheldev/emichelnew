<?php

namespace App\Http\Livewire\Admin\Course;

use App\Models\Course;
use Livewire\Component;
use App\Models\Category;

class Update extends Component
{
    public $title='';
    public $slug;
    public $description;
    public $introduction;
    public $image;
    public $prerequisites;
    public $online;
    public $author_id;
    public $categories;
    public $category_id;
    public $course_id;
    public $course;


    public function mount($id)
    {


        $this->categories=Category::orderBy('name')
        ->pluck('name','id')
        ->toArray();

        $this->course = course::findOrFail($id);
        $this->course_id = $id;
        $this->title = $this->course->title;
        $this->online= $this->course->online;
        $this->description = $this->course->description;
        $this->introduction = $this->course->introduction;
        $this->prerequisites = $this->course->prerequisites;
        $this->image = $this->course->image;
        $this->category_id = $this->course->category_id;
    }
    public function render()
    {
        return view('livewire.admin.course.update')->extends('layouts.admin');
    }

    public function update()
    {
       $data = $this->validate([
            'title' => 'required',
            'description' => 'required|min:20',
            'introduction' => 'required |min:50',
            'image' => 'required',
        ]);

        if($this->course_id){
            $course= course::find($this->course_id);
             $course->update([
                'title' => $this->title,
                'online' => $this->online,
                'prerequisites' => $this->prerequisites,
                'description' => $this->description,
                'introduction' => $this->introduction,
                'image' => $this->image,
                'category_id' => $this->category_id,
            ]);
        }
        session()->flash('success', 'Course Modified Successfully.');

        return redirect()->route('listcourse');


    }




}
