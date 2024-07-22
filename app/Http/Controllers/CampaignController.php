<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    //
    public function index()
    {
        return view('campaign_lists');
    }
    public function campaign()
    {
        return view('campaign');
    }
}
