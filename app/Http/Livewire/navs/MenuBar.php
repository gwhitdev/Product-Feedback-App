<?php

namespace App\Http\Livewire\Navs;

use Livewire\Component;

class MenuBar extends Component
{
    public $count;
    
    public function mount($count)
    {
        $this->count = $count;
    }
    
    public function render()
    {
        return view('livewire.navs.menu-bar');
    }
}
