<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class VotesController extends Controller
{
    public function vote_up(Request $request, int $feedback_id)
    {
        $feedback = Feedback::find($feedback_id);
        $votes = $feedback->votes;
        $feedback->votes = $votes + 1;
        $feedback->save();
        return redirect("/feedback");
    }

    public function vote_down(Request $request, int $feedback_id)
    {
        $feedback = Feedback::find($feedback_id);
        $votes = $feedback->votes;
        $feedback->votes = $votes - 1;
        $feedback->save();
        return redirect("/feedback");
    }
}
