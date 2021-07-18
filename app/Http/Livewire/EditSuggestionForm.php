<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feedback;
use Error;

class EditSuggestionForm extends Component
{
    public Feedback $new_feedback;
    protected $rules = [
        'new_feedback.title' => 'required',
        'new_feedback.detail' => 'required',
        'new_feedback.category' => 'required'
    ];
    public $category;
    public $detail;
    public $title;
    public $suggestion_id;
    public $suggestion_category;
    public $categories;
    
    public function save() 
    {
        $this->validate();
        $this->feedback->save();
    }
    
    

    public function delete()
    {
        return;
    }
    public function old_save()
    {
        $feedback = Feedback::find($this->suggestion_id);
        $feedback->detail = $this->new_detail;
        $feedback->title = $this->new_title;
        $feedback->category_id = $this->new_category;
        
        try
        {
            $feedback->save();
            session()->flash('flash.bannerStyle','success');
            session()->flash('flash.banner','Feedback updated!');
            return view('livewire.edit-suggestion-form');
        }
        catch (Error $e)
        {
            session()->flash('flash.bannerStyle','danger');
            session()->flash('flash.banner', 'Error: feedback not updated!');
            return redirect("/feedback/$this->suggestion_id",["error"=>$e]);
        }
        session()->flash('message','Your feedback has been updated.');
        return view('livewire.edit-suggestion-form');
    }
    public function cancel()
    {
        return;
    }
    public function updateData()
    {
        return;
    }
    public function mount($feedback,$categories)
    {
        $this->category = $feedback->category()->get();
        $this->detail = $feedback->detail;
        $this->title = $feedback->title;
        $this->suggestion_id = $feedback->id;
        $this->suggestion_category = $feedback->category_id;
        $this->categories = $categories;
    }
    public function render()
    {
        return view('livewire.edit-suggestion-form');
    }
}
