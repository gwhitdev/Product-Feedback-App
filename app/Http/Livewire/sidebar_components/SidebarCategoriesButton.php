<?php

namespace App\Http\Livewire\Sidebar_components;

use Livewire\Component;

class SidebarCategoriesButton extends Component
{
    public $text;
    public $category_id;

    public function go()
    {
        return redirect("/feedback/categories/$this->category_id");
    }
    public function mount($category)
    {
        $this->text = $category->category_name;
        $this->category_id = $category->id;
    }
    public function render()
    {
        return view('livewire.sidebar_components.sidebar-categories-button');
    }
}
