<?php

namespace App\Http\Livewire\Navs;

use Livewire\Component;

class AddFeedbackButton extends Component
{
    public function add()
    {
        redirect('/feedback/new');
    }
    public function render()
    {
        return view('livewire.navs.add-feedback-button');
    }
}
