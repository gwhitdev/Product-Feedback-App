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
        $temp_categories = Category::all();
        $categories = array();
        foreach($temp_categories as $c)
        {
            if($c->feedback->count() > 0)
            {
                error_log($c->category_name);
                error_log($c->feedback->count());
                array_push($categories, $c);
            };
        };
        $this->categories = $categories;
    }
    public function render()
    {
        return view('livewire.sidebar_components.sidebar-categories');
    }
}
