<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::where('user_id', Auth::user()->id)->latest()->paginate(20);
        return view('user.comment.index', [
            'comments' => $comments,
        ]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        Comment::create([
            'help_id' => $id,
            'user_id' => Auth::user()->id,
            'comment' => $request->comment,
        ]);
        
        return back()->with('success', 'Comment Inserted Successfully');
    }

    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        $help = $comment->help;

        return redirect()->route('help-request.show', $help->id);
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully');
    }
}
