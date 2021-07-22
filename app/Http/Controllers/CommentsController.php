<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Feedback;

class CommentsController extends Controller
{
    public function index(Request $request, int $feedback_id) 
    {
        $feedback = Feedback::find($feedback_id);
        $comments = $feedback->comment()->get();
        return view('comments/index', ['feedback'=>$feedback, "comments"=>$comments]);
    }

    public function create(Request $request, $feedback_id)
    {
        $user_id = $request->user()->id;
        $fId = $feedback_id;
        $comment = new Comment;
        $comment->comment_detail = $request->input('comment_detail');
        $comment->feedback_id = $fId;
        $comment->user_id = $user_id;
        $comment->save();
        $feedback = Feedback::find($fId);
        $feedback->comments_count = $feedback->comments_count + 1;
        $feedback->save();
        return redirect("/feedback/$fId/comments");
    }

    public function detail(Request $request, $feedback_id)
    {
        return 'comment detail';
    }

    public function edit(Request $request, $feedback_id)
    {
        return 'comment edit';
    }

    public function update(Request $request, $feedback_id)
    {
        return 'comment update';
    }

    public function delete(Request $request, $feedback_id)
    {
        return 'comment delete';
    }
}
