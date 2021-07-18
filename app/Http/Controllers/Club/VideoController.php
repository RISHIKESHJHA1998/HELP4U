<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Yoga;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Yoga::where('user_id', Auth::user()->id)->latest()->paginate(20);
        return view('club.yoga.index', [
            'videos' => $videos,
        ]);
    }

    public function create()
    {
        return view('club.yoga.create');
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
        ]);

        return back()->with('success', 'Video added successfully');
    }

    public function show($id)
    {
        $video = Yoga::findOrFail($id);
        return view('club.yoga.show', [
            'video' => $video,
        ]);
    }

    public function destroy($id)
    {
        $video = Yoga::findOrFail($id);
        $video->delete();

        return back()->with('success', 'Video deleted successfully');
    }
    
}
