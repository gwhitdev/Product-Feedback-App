<?php

namespace App\Http\Livewire\Suggestion_components;

use Livewire\Component;
use App\Models\Feedback;

class VoteButton extends Component
{
    public $votes;
    public $feedback_id;

    public function getNewVotes()
    {
        $feedback = Feedback::find($this->feedback_id);
        $newVotes = $feedback->votes;
        $this->votes = $newVotes;
    }
    public function vote()
    {
        $feedback = Feedback::find($this->feedback_id);
        $feedback->votes = $feedback->votes + 1;
        $feedback->save();
        $this->getNewVotes();
        return view('livewire.suggestion_components.vote-button');
    }
    
    public function mount($votes,$feedback)
    {
        $this->feedback_id = $feedback;
        $this->votes = $votes;
    }
    public function render()
    {
        return view('livewire.suggestion_components.vote-button');
    }
}
