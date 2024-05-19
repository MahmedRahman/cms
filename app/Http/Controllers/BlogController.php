<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Resources\BlogResource;
use App\Http\Resources\BlogCollection as BlogResourceCollection;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{


    public function create()
    {
        return view('dashboard.blog.create');
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);
    
        // Create a new blog entry
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->save();
        $blogs = Blog::all();
        // Redirect back to the blog list with a success message
        return view("dashboard.blog.index" ,compact('blogs') )->with('success', 'Blog added successfully');
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.index', compact('blogs'));
    }

    public function dashBoardIndex()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.index' ,  compact('blogs'));
    }
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('web.blog-details', compact('blog'));
    }


    // Update the specified resource in storage.
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            // 'name' => 'required|string|max:255',
            // Add validation rules
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $blog->update($request->all());
        return new BlogResource($blog);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        $blogs = Blog::all();
        return view('dashboard.blog.index' ,  compact('blogs'));
       
    }
}