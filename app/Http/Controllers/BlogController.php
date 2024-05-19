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


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.blog.edit', compact('blog'));
    }
    // Update the specified resource in storage.
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->author = $request->author;
        $blog->save();
        $blogs = Blog::all();
        return view('dashboard.blog.index' ,  compact('blogs'))->with('success', 'Blog updated successfully');
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