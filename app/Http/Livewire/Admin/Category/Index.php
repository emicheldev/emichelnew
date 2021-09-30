<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

use App\Models\Category;

class Index extends Component
{
    public $slug;
    public $name;
    public $description;
    public $icon;
    public $color;
    public $selected_id;
    public $categories;

    public $updateMode = false;

    protected $rules = [
        'slug' => 'required',
        'name' => 'required',
        'icon' => 'required',
        'color' => 'required',
        'description' => 'required|min:10'
    ];
    
    private function resetInput()
    {
        $this->slug = '';
        $this->name = '';
        $this->icon = '';
        $this->color = '';
        $this->description = '';
    }

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.admin.category.index')->extends('layouts.admin');
    }

    public function edit($id)
    {
       $category = Category::findOrFail($id);
       $this-> selected_id = $id;
       $this-> name = $category->name;
       $this-> icon = $category->icon;
       $this-> slug = $category->slug;
       $this-> description = $category->description;

       $this->updateMode = true;
    }

    public function store()
    {
        $this->validate();

        $data = Category::updateOrCreate(['id' => $this->selected_id],
            [
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'icon' => $this->icon,
            'color' => $this->color,
        ]);

        session()->flash('message', $this->selected_id ? 'La mise à jour a été faite' : 'Categorie ajouter');


        $this->resetInput();

    }
    public function update()
    {
        session()->flash('message', 'Ok cool');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'La categorie a été supprimer avec success !');
    }
}
