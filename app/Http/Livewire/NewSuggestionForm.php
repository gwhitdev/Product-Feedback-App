<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Feedback;

class NewSuggestionForm extends Component
{
    public $title;
    public $detail;
    public $category_id;
    public $feedback_id;
    public $status = 1;
    public $user_id;

    public $categories;

    protected $rules = [
        'title'=>'required',
        'detail'=>'required',
        'category_id'=>'required',
        'status'=>'required',
        'user_id'=>'required',
    ];

    
    public function submit()
    {
        $this->validate();
        $new_feedback = new Feedback;
        $new_feedback->title = $this->title;
        $new_feedback->detail = $this->detail;
        $new_feedback->category_id = $this->category_id;
        $new_feedback->user_id = $this->user_id;
        $new_feedback->status_id = $this->status;
        $new_feedback->save();
        return redirect("/feedback/$this->feedback_id");
    }
    public function mount($categories)
    {
        $this->categories = $categories;
        $this->user_id = auth()->user()->id;
    }
    public function render()
    {
        return view('livewire.new-suggestion-form');
    }
    
}