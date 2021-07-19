<?php

namespace App\Http\Livewire\Generic;

use Livewire\Component;

class GobackButton extends Component
{
    public $previousUrl;
    public $currentUrl;

    
    public function checkPreviousUrl()
    {
        $path = explode('/',$this->currentUrl);
        
        if(isset($path[5]))
        {
            return redirect("$this->previousUrl");
        }
        return redirect("/feedback");
    }
    public function goBack()
    {
        $new_url = $this->checkPreviousUrl();
        return $new_url;
    }
    public function mount()
    {
        $this->previousUrl = url()->previous();
        $this->currentUrl = url()->current();
    }
    public function render()
    {
        return view('livewire.generic.goback-button');
    }
}
