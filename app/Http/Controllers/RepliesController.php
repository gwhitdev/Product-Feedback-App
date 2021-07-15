<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function index(Request $request) 
    {
        return 'replies index';
    }

    public function create(Request $request, $feedback_id)
    {
        return 'replies create';
    }

    public function detail(Request $request, $feedback_id)
    {
        return 'replies detail';
    }

    public function edit(Request $request, $feedback_id)
    {
        return 'replies edit';
    }

    public function update(Request $request, $feedback_id)
    {
        return 'replies update';
    }

    public function delete(Request $request, $feedback_id)
    {
        return 'replies delete';
    }
}
