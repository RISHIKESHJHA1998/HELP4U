<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', '1')->latest()->paginate(20);
        return view('admin.blog.index', [
            'blogs' => $blogs,
        ]);
    }

    public function create()
    {
        return view('admin.blog.create');
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
            'status' => 1,
        ]);

        return back()->with('success', 'Post Inserted Successfully');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.show', [
            'blog' => $blog,
        ]);
    }

    public function approve()
    {
        $blogs = Blog::where('status', 0)->latest()->paginate(20);
        return view('admin.blog.approve', [
            'blogs' => $blogs,
        ]);
    }

    public function approved($id)
    {
        //Fetching Model
        $blog = Blog::where('id', $id)->first();

        //Checking Values
        if($blog->status == '0')
        {
            $status ='1';
        }
        else
        {
            $status ='0';
        }
        
        //Updating Model
        Blog::where('id', $id)
            ->update([
                'status' => $status,
            ]);
            
        return back()->with('success', 'Blog approved Successfully');
    }
}
