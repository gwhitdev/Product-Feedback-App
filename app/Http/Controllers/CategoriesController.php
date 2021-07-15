<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function update_category(Request $request, int $feedback_id, int $category_id)
    {
        return 'changed category';
    }
}
