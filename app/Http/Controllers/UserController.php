<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
use App\Models\Post;
use App\Models\User;

class UserController extends Controller
{
    function users()
    {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }

    function bloggers()
    {
        $bloggers = Blogger::all();
        return view('admin.users.bloggers', compact('bloggers'));
    }

    function user_delete($user_id)
    {
        User::find($user_id)->delete();
        return back()->with('delSuccess', 'User Deleted Successfully!');
    }

    function blogger_delete($blogger_id)
    {
        Blogger::find($blogger_id)->delete();
        return back()->with('delSuccess', 'User Deleted Successfully!');
    }

    function posts()
    {
        $posts = Post::all();
        return view('admin.posts', compact('posts'));
    }
}
