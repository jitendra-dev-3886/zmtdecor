<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function ourBlog()
    {
        return view('frontend.blog.index');
    }

    public function blogDetails()
    {
        return view('frontend.blog.details');
    }
}
