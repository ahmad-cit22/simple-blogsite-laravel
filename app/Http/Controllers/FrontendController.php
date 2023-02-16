<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $blogs = Post::all();
        return view('frontend.index', [
            'blogs' => $blogs,
        ]);
    }

    function blog_view_all()
    {
        $blogs = Post::all();

        return view('frontend.all_blogs', [
            'blogs' => $blogs,
        ]);
    }
}
