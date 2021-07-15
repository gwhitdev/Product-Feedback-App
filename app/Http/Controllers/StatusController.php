<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function update_status(Request $request, int $feedback_id,int $status_id)
    {
        return 'changed status';
    }
}
