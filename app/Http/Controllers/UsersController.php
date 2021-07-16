<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class UsersController extends Controller
{
    public function index(Request $resquest)
    {
        $feedback = Feedback::all();
        
        return view('dashboard',["feedback"=>$feedback]);
    }
}
