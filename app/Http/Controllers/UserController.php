<?php

namespace App\Http\Controllers;

use App\Models\Blogger;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function users(Request $request)
    {

        if ($request->ajax()) {
            $data = User::select('id', 'name', 'email')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">Edit/Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.users.users');

    }

    function bloggers(Request $request)
    {

        if ($request->ajax()) {
            $data = Blogger::select('id', 'name', 'email')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">Edit/Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.users.bloggers');
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

    function posts(Request $request)
    {
        if ($request->ajax()) {
            $data = Post::select('id', 'blogger_id', 'blog_title', 'blog_body')->get();
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">Edit/Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.posts');
    }
}
