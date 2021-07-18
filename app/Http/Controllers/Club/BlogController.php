<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('user_id', Auth::user()->id)->latest()->paginate(20);
        return view('club.blog.index', [
            'blogs' => $blogs,
        ]);
    }

    public function create()
    {
        return view('club.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs|string|max:255',
            'body' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_name = time().'.'.$image->extension();
            $image->move(public_path('post_images'), $image_name);
        }
    
        Blog::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'slug' => $request->title,         
            'body' => $request->body,
            'image' => $image_name,
        ]);

        return back()->with('success', 'Post Inserted Successfully');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('club.blog.show', [
            'blog' => $blog,
        ]);
    }
    
    public function destroy($id)
    {
        $post = Blog::findOrFail($blog->id);
        $post->delete();

        return back()->with('success', 'Blog Deleted Successfully');
    }

    
}
