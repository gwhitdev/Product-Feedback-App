<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Comment;
use App\Models\Status;
use App\Models\Category;
use Exception;

class FeedbackController extends Controller
{
    public function index(Request $request) 
    {
        $feedback = Feedback::reorder('id','desc')->get();
        $categories = Category::all();
        return view('feedback/index', ['feedback'=>$feedback, "categories"=>$categories]);
    }

    public function create(Request $request)
    {
        $user_id = $request->user()->id;
        $feedback = new Feedback;
        $feedback->detail = $request->input('detail');
        $feedback->title = $request->input('title');
        $feedback->category_id = $request->input('category');
        $feedback->status_id = 1;
        $feedback->user_id = $user_id;
        try
        {
            $feedback->save();
            //$fId = $feedback->id();
            return view('feedback/index');
        }
        catch (Exception $e)
        {
            return redirect('/feedback');
        }
        return redirect('/feedback');
    }

    public function detail(Request $request, $feedback_id)
    {
        $feedback = Feedback::find($feedback_id);
        return view('feedback/detail', ['feedback' => $feedback]);
    }

    public function edit(Request $request, $feedback_id)
    {
        return 'feedback edit';
    }

    public function update(Request $request, $feedback_id)
    {
        return 'feedback update';
    }

    public function delete(Request $request, $feedback_id)
    {
        return 'feedback delete';
    }

}
