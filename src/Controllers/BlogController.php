<?php

namespace Smartttech\Blog\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Smarttech\Blog\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
        return response()->json(Blog::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'slug'    => 'required|string|unique:blog,slug',
            'content' => 'required',
        ]);

        $blog = Blog::create($request->all());
        return response()->json($blog, 201);
    }

    public function show($id)
    {
        return response()->json(Blog::findOrFail($id));
    }

    public function update(Request $request, $id)
    {

        $blog = Blog::findOrFail($id);
        // dd($request->all());
        $blog->update($request->all());

        return response()->json($blog);
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return response()->json(['message' => 'Blog deleted successfully']);
    }
}
