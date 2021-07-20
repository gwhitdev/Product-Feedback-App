<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;
use App\Models\Feedback;

class SuggestionsCount extends Component
{
    public $count;
    public function mount()
    {
        $this->count = Feedback::where('removed',false)->count();
    }
    public function render()
    {
        return view('livewire.generic.suggestions-count');
    }
}
