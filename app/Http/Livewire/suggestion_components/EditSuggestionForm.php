<?php

namespace App\Http\Livewire\Suggestion_components;

use Livewire\Component;
use App\Models\Feedback;

class EditSuggestionForm extends Component
{
    public $title;
    public $detail;
    public $category_id;
    public $feedback_id;
    
    public $categories;

    protected $rules = [
        'title'=>'required',
        'detail'=>'required',
        'category_id'=>'required'
    ];

    public function submit()
    {
        $this->validate();
        $new_feedback = Feedback::find($this->feedback_id);
        $new_feedback->title = $this->title;
        $new_feedback->detail = $this->detail;
        $new_feedback->category_id = $this->category_id;
        $new_feedback->save();
        return redirect("/feedback/$this->feedback_id");
    }
    public function mount($feedback,$categories)
    {
        $this->feedback_id = $feedback->id;
        $this->title = $feedback->title;
        $this->detail = $feedback->detail;
        $this->category_id = $feedback->category_id;
        
        $this->categories = $categories;
    }
    public function render()
    {
        return view('livewire.suggestion_components.edit-suggestion-form');
    }
    
}
