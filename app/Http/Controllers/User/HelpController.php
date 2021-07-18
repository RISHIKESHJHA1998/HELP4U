<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Help;

class HelpController extends Controller
{
    public function index()
    {
        $requests = Help::where('user_id', Auth::user()->id)->latest()->paginate(20);
        return view('user.help.index', [
            'requests' => $requests,
        ]);
    }
    
    public function create()
    {
        return view('user.help.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
        ]);
    
        Help::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,         
            'body' => $request->body,
        ]);

        return back()->with('success', 'Request added Successfully');
    }

    public function view()
    {
        $helpRequests = Help::latest()->paginate(50);
        return view('general.help-request.index', [
            'helpRequests' => $helpRequests,
        ]);
    }
    
    public function show($id)
    {
        $request = Help::findOrFail($id);
        return view('general.help.show', [
            'request' => $request,
        ]);
    }

    public function destroy($id)
    {
        $helpRequest = Help::findOrFail($id);
        $helpRequest->delete();

        return back()->with('success', 'Request deleted successfully');
    }
}
