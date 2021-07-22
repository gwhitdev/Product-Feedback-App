<?php

namespace App\Http\Livewire\Navs;

use Livewire\Component;

class MenuBar extends Component
{
    public $count;
    public $feedback;

    public function mount($count,$feedback)
    {
        $this->count = $count;
        $this->feedback = $feedback[0];
    }
    
    public function render()
    {
        return view('livewire.navs.menu-bar');
    }
}
