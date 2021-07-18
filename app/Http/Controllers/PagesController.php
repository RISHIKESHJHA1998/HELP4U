<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Help;
use App\Models\Yoga;

class PagesController extends Controller
{
    //Return all approved blogs
    public function blogs()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(20);
        return view('general.blog.index', [
            'blogs' => $blogs,
        ]);
    }

    public function blogShow($id)
    {
        $blog = Blog::findOrFail($id);
        return view('general.blog.show', [
            'blog' => $blog,
        ]);
    }

    //Return all approved videos
    public function yogaVideos()
    {
        $videos = Yoga::where('status', '1')->latest()->paginate(20);
        return view('general.yoga.index', [
            'videos' => $videos,
        ]);
    }

    //Return all help requests
    public function helpRequests()
    {
        $requests = Help::latest()->paginate(20);
        return view('general.help.index', [
            'requests' => $requests,
        ]);
    }

    public function helpRequestsShow($id)
    {
        $request = Help::findOrFail($id);
        return view('general.help.show', [
            'request' => $request,
        ]);
    }
}
