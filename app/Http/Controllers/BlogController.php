<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Role;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index', compact('blogs'));
    }


    public function create()
    {
//        $roles = Role::all();
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request["title"];
        $blog->content = $request["content"];
        $blog->user_id = $request->user_id;
        $blog->save();
        return redirect()->route('backend.blog.index');

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
