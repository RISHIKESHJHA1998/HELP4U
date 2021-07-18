<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Yoga;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Yoga::where('user_id', Auth::user()->id)->latest()->paginate(20);
        return view('admin.yoga.index', [
            'videos' => $videos,
        ]);
    }

    public function create()
    {
        return view('admin.yoga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'url' => 'required',
        ]);

        Yoga::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'url' => $request->url,
            'status' => 1,         
        ]);

        return back()->with('success', 'Video added successfully');
    }

    public function show($id)
    {
        $video = Yoga::findOrFail($id);
        return view('admin.yoga.show', [
            'video' => $video,
        ]);
    }

    public function approve()
    {
        $videos = Yoga::where('status', 0)->latest()->paginate(20);
        return view('admin.yoga.approve', [
            'videos' => $videos,
        ]);
    }

    public function approved($id)
    {
        //Fetching Model
        $video = Yoga::where('id', $id)->first();

        //Checking Values
        if($video->status == '0')
        {
            $status ='1';
        }
        else
        {
            $status ='0';
        }
        
        //Updating Model
        Yoga::where('id', $id)
            ->update([
                'status' => $status,
            ]);
            
        return back()->with('success', 'Video approved Successfully');
    }

    public function destroy($id)
    {
        $video = Yoga::findOrFail($id);
        $video->delete();
        return back()->with('success', 'Video deleted successfully');
    }
}
