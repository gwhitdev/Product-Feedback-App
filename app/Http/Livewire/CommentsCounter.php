<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommentsCounter extends Component
{
    public $replies;
    public $comments;
    public $comments_count;
    public $total_comments;

    public function getReplies($comments)
    {
        $numOfReplies = 0;
        foreach($comments as $comment)
        {
            $numOfReplies += $comment->replies->count();
        }
        return $numOfReplies;
    }

    public function totalCommentsPlusReplies()
    {
        return $this->comments_count + $this->replies;
    }
    public function mount($comments)
    {
        $this->comments = $comments;
        $this->comments_count = $comments->count();
        $this->replies = $this->getReplies($comments);
        $this->total_comments = $this->totalCommentsPlusReplies();
    }
    public function render()
    {
        return view('livewire.comments-counter');
    }
}
