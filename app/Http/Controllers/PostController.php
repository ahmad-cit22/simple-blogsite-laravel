<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function blog_store(Request $request)
    {
        if (Auth::guard('bloggerAuth')->check()) {
            $request->validate([
                'blog_title' => 'required|min:3',
                'blog_body' => 'required|min:200',
            ], [
                'blog_title.required' => 'You must create a title for your blog post!',
                'blog_body.required' => "Your blog post can't be empty!",
            ]);

            Post::insert([
                'blogger_id' => Auth::guard('bloggerAuth')->id(),
                'blog_title' => $request->blog_title,
                'blog_body' => $request->blog_body,
                'created_at' => Carbon::now(),
            ]);
            return back()->with('postSuccess', 'Post uploaded successfully!');
        } else {
            return redirect()->route('blogger.reg')->with('blogger_reg', 'You have to login first in order to post.');
        }
    }

    function blog_view($post_id)
    {
        $post = Post::find($post_id);

        return view('frontend.blog', [
            'blog' => $post,
        ]);
    }



    function blog_del($post_id)
    {
        Post::find($post_id)->delete();

        if (Auth::guard('bloggerAuth')->check()) {
            return redirect('/')->with('delSuccess', 'Post Deleted Successfully!');
        } else {
            return redirect('/posts')->with('delSuccess', 'Post Deleted Successfully!');
        }
        
    }

    function blog_edit($post_id)
    {
        $post = Post::find($post_id);

        return view('frontend.edit', [
            'blog' => $post,
        ]);
    }

    function blog_update(Request $request, $post_id)
    {
        $request->validate([
            'blog_title' => 'required|min:3',
            'blog_body' => 'required|min:200',
        ], [
            'blog_title.required' => 'You must create a title for your blog post!',
            'blog_body.required' => "Your blog post can't be empty!",
        ]);

        Post::find($post_id)->update([
            'blog_title' => $request->blog_title,
            'blog_body' => $request->blog_body,
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->route('blog.view', $post_id)->with('updateSuccess', 'Post updated successfully!');
    }
}
