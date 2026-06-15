<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project()
    {
        return view('frontend.services.project');
    }

    public function moreDetails()
    {
        $path = public_path('pdf/ZMT--br.pdf');
        return response()->file($path);
    }
}
