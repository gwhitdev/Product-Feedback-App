<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SuggestionCard extends Component
{
    public $title;
    public $detail;
    public $votes;
    public $category;
    public $comments_count;
    public $status;
    public $feedback_id;
    public $comments;

    public function mount($feedback)
    {
        $this->title = $feedback->title;
        $this->detail = $feedback->detail;
        $this->votes = $feedback->votes;
        $this->category = $feedback->category->category_name;
        $this->status = $feedback->status->status;
        $this->comments_count = $feedback->comment()->get()->count();
        $this->feedback_id = $feedback->id;
        $this->comments = $feedback->comment;
    }
    public function render()
    {
        return view('livewire.suggestion-card');
    }
}
