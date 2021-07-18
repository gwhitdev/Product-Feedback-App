<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StandardNav extends Component
{
    public $previousUrl;

    public function previousPage()
    {
        return redirect("$this->previousUrl");
    }
    public function mount()
    {
        $this->previousUrl = url()->previous();
    }
    public function render()
    {
        
        return view('livewire.standard-nav');
    }
}
