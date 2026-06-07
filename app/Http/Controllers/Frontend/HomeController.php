<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function ourTeam()
    {
        return view('frontend.home.our_team');
    }
    public function pricing()
    {
        return view('frontend.home.pricing');
    }
}
