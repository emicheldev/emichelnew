<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class UpdateRole extends Component
{
    public int $selected_id= 0;
    public function render()
    {
        return view('livewire.admin.components.update-role');
    }
}
