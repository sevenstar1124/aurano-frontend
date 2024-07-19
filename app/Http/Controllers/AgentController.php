<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    public function index()
    {
        // return view('agent');
    }
    public function getAgent($id = "")
    {
        return view("agent");
    }
}
