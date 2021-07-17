<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InsideNav extends Component
{
    public $feedback_id;

    public function mount($feedback)
    {
        $this->feedback_id = $feedback->id;
    }
    public function render()
    {
        return view('livewire.inside-nav');
    }
}
