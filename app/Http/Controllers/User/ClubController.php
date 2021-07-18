<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Club;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::where('status', '1')->with(['members'])->latest()->paginate(20);
        return view('user.club.index', [
            'clubs' => $clubs,
        ]);
    }

    public function create()
    {
        return view('user.club.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'about' => 'required',
        ]);

        Club::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'about' => $request->about,
        ]);

        return back()->with('success', 'Request submitted Successfully');
    }

    public function join($id)
    {
        $club = Club::findOrFail($id);
        return view('user.club.join', [
            'club' => $club,
        ]);
    }

    public function joined(Request $request, $id)
    {
        $request->validate([
            'aadhar' => 'required|digits:12',
            'phone' => 'required|digits:10',
        ]);

        $club = Club::findOrFail($id);

        Member::create([
            'user_id' => Auth::user()->id,
            'club_id' => $club->id,
            'aadhar' => $request->aadhar,
            'phone' => $request->phone,
        ]);

        return back()->with('success', 'Request Sent Successfully');
    }

    public function view()
    {
        $members = Member::where('user_id', Auth::user()->id)->latest()->paginate(20);
        return view('user.club.joined', [
            'members' => $members,
        ]);
    }
}

