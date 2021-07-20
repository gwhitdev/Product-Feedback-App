<?php

namespace App\Http\Livewire\Sidebar_components;

use Livewire\Component;
use App\Models\Category;

class SidebarCategories extends Component
{
    public $categories;
    public function all()
    {
        return redirect('/feedback');
    }
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.sidebar_components.sidebar-categories');
    }
}
