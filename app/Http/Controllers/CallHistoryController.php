<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallHistoryController extends Controller
{
    //
    public function index()
    {
        return view("call_history");
    }
}
