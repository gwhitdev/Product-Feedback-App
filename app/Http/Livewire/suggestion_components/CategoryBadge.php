<?php

namespace App\Http\Livewire\Suggestion_components;

use Livewire\Component;

class CategoryBadge extends Component
{
    public $category;

    public function mount($category)
    {
        $this->category = $category;
    }
    public function render()
    {
        return view('livewire.suggestion_components.category-badge');
    }
}
