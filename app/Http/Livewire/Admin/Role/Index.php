<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public  $name;
    public  $roles;
    public  $permissions;
    public  $description;
    public  $selected_id;
    public $updateMode = false;
    public $updateModePermission = false;


    protected $rules = [
        'name' => 'required',
    ];

    public function render()
    {
        $this->roles = Role::get();
        $this->permissions = Permission::get();
        return view('livewire.admin.role.index')->extends('layouts.admin');
    }

    public function store()
    {
        $this->validate();


        Role::updateOrCreate(['id'=> $this->selected_id],
            [
             'name' => $this->name,
             'description' => $this->description
            ]
        );
        $this->resetInput();
        $this->updateMode= false;
        session()->flash('success', $this->selected_id ? 'La mis à jour a été faite' : 'Le rôle a été ajouté avec succes' );;

    }

    public function storePermission()
    {
        $this->validate();


        Permission::updateOrCreate(['id'=> $this->selected_id],
            [
             'name' => $this->name,
            ]
        );
        $this->resetInput();
        $this->updateMode= false;
        session()->flash('success', $this->selected_id ? 'La mis à jour a été faite' : 'Le rôle a été ajouté avec succes' );;

    }

    public function destroy($id)
    {
       Role::find($id)->delete();
       session()->flash('success', 'Le rôle a été bien supprimé');
    }


    public function edit($id)
    {
       $role = Role::findOrFail($id);
       $this-> selected_id = $id;
       $this-> name = $role->name;
       $this-> description = $role->description;

       $this->updateMode = true;

    }

    private function resetInput()
    {
        $this->name = '';
        $this->description = '';

    }

    public function edit_permission($id)
    {
       $permission = Permission::findOrFail($id);
       $this-> selected_id = $id;
       $this-> name = $permission->name;

       $this->updateModePermission = true;

    }

    public function destroy_permission($id)
    {
       Permission::find($id)->delete();
       session()->flash('success', 'Le rôle a été bien supprimé');
    }



}
