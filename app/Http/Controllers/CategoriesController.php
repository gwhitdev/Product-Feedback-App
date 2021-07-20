<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Feedback;

class CategoriesController extends Controller
{
    public function index(Request $request, $category_id)
    {
        $feedback = Feedback::where('category_id',$category_id)->get();
        return view('categories/index',['feedback' => $feedback]);
    }
    public function update_category(Request $request, int $feedback_id, int $category_id)
    {
        return 'changed category';
    }
}
