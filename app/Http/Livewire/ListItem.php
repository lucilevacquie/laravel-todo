<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListItem extends Component
{
    public $todo;
    
    public function render()
    {
        return view('livewire.list-item');
    }
}
