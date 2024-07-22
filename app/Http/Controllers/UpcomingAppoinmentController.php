<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpcomingAppoinmentController extends Controller
{
    //
    public function index()
    {
        return view("appoinment");
    }
}
