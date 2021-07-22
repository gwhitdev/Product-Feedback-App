<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Comment;
use App\Models\Status;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\DB;
class FeedbackController extends Controller
{
    public function sort(Request $request, $sort_by, $category)
    {
        
        $sorting = array(
            'mostUpvotes' => 'votes',
            'leastUpvotes' => 'votes',
            'mostComments' => 'comments',
            'leastComments' => 'comments',
        );
        $sorting_values = array(
            'mostUpvotes' => 'desc',
            'leastUpvotes' => 'asc',
            'mostComments' => 'desc',
            'leastComments' => 'asc'
        );
        
        if($sorting[$sort_by] == 'comments')
        {
            if($sorting_values[$sort_by] == 'asc')
            {
                $feedback = Feedback::reorder('comments_count','asc')->get();
                $count = $feedback->count();
                return view('feedback/index', ['feedback' => $feedback, "count" => $count]);
            }
            if($sorting_values[$sort_by] == 'desc')
            {
                $feedback = Feedback::reorder('comments_count','desc')->get();
                $count = $feedback->count();
                return view('feedback/index', ['feedback' => $feedback,  "count" => $count]);
            }
        }
        if($sorting[$sort_by] == 'votes')
        {
            if($sorting_values[$sort_by] == 'asc')
            {
                $feedback = Feedback::reorder('votes', 'asc')->get();
                $count = $feedback->count();
                return view('/feedback/index',['feedback'=>$feedback, 'count'=>$count]);
            }
            if($sorting_values[$sort_by] == 'desc')
            {
                $feedback = Feedback::reorder('votes','desc')->get();
                $count = $feedback->count();
                return view('/feedback/index',['feedback'=>$feedback,'count'=>$count]);
            }
        }
        $feedback = Feedback::where('removed',false)->get();
        $count = $feedback->count();
        $categories = Category::where('removed',false);
        return view('feedback/index', ['feedback' => $feedback, "categories"=>$categories, "count" => $count]);
        
    }
    public function category(Request $request, $category_id)
    {
        $category = Category::find($category_id);
        $count_feedback_in_category = $category->feedback()->count();
        
        
        $feedback = Feedback::where('removed',false)->where('category_id',$category_id)->get();
        $count = Feedback::where('removed',false)->where('category_id',$category_id)->count();
        $categories = Category::all();
        
        return view('feedback/index', ['feedback'=>$feedback, "categories"=>$categories,"count" => $count]);
    }
    public function index(Request $request) 
    {
        
        $feedback = Feedback::reorder('id','desc')->where('removed',false)->get();
        
        $count = Feedback::where('removed',false)->count();
        
        return view('feedback/index', ['feedback'=>$feedback,  "count"=>$count]);
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
            $request->session()->flash('flash.banner','Your feedback has been created.');
            $request->session()->flash('flash.bannerStyle','success');
            return redirect('/feedback');
        }
        catch (Exception $e)
        {
            $request->session()->flash('flash.banner','Your feedback could not be submitted.');
            $request->session()->flash('flash.bannerStyle','danger');
            return redirect('/feedback');
        }
        return redirect('/feedback');
    }

    public function new(Request $request)
    {
        $categories = Category::all();

        return view('feedback/new',['categories'=>$categories]);
    }

    public function detail(Request $request, $feedback_id)
    {
        $feedback = Feedback::find($feedback_id);
        $category = $feedback->category()->get("category_name")[0];
        return view('feedback/detail', ['feedback' => $feedback,"category"=>$category]);
    }

    public function edit(Request $request, $feedback_id)
    {
        try
        {
            $feedback = Feedback::find($feedback_id);
        }
        catch(Exception $e)
        {
            return redirect('/feedback');
        }
        
        $categories = Category::all();
        $category = $feedback->category_id;
        return view('feedback/edit',["feedback"=>$feedback,"categories"=>$categories]);
    }

    public function update(Request $request, $feedback_id)
    {
        $feedback = Feedback::find($feedback_id);
        $feedback->detail = $request->input('detail');
        $feedback->title = $request->input('title');
        $feedback->category_id = $request->input('category');
        
        try
        {
            $feedback->save();
            $request->session()->flash('flash.bannerStyle','success');
            $request->session()->flash('flash.banner','Feedback updated!');
            return redirect("feedback/$feedback_id");
        }
        catch (Exception $e)
        {
            error_log($e->getMessage());
            $request->session()->flash('flash.bannerStyle','danger');
            $request->session()->flash('flash.banner', 'Error: feedback not updated!');
            return redirect("/feedback/$feedback_id",["error"=>$e]);
        }
        $request->session()->flash('message','Your feedback has been updated.');
        return redirect("/feedback/$feedback_id");
    }

    public function delete(Request $request, $feedback_id)
    {
        $feedback = Feedback::find($feedback_id);
        $feedback->removed = true;
        try
        {
            $feedback->save();
        }
        catch (Exception $e)
        {
            $request->session()->flash('flash.banner','Error: could not delete feedback.');
            $request->session()->flash('flash.bannerStyle','danger');
            return redirect("/feedback/$feedback_id");
        }
        $request->session()->flash('flash.banner','Feedback deleted.');
        $request->session()->flash('flash.bannerStyle','success');
        return redirect('/feedback');
    }

}
