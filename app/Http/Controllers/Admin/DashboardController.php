<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Club;
use App\Models\User;
use App\Models\Yoga;
use App\Models\Blog;

class DashboardController extends Controller
{
    //Listing clubs
    public function clubs()
    {
        $clubs = Club::latest()->paginate(20);
        return view('admin.club.index', [
            'clubs' => $clubs,
        ]);
    }

    //Approving clubs
    public function addClub($id)
    {
        //Fetching Model
        $club = Club::where('id', $id)->first();

        //Checking Values
        if($club->status == '0')
        {
            $status ='1';
        }
        else
        {
            $status ='0';
        }
        
        //Updating Model
        Club::where('id', $id)
            ->update([
                'status' => $status,
            ]);
            
        return back()->with('success', 'Member Approved Successfully');
    }

    public function usersList()
    {
        $users = User::with('roles')->latest()->paginate(20);
        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    public function userDetails($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.details', [
            'user' => $user,
        ]);
    }

    public function userDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'User deleted successfully');
    }
    
    public function clubDetails($id)
    {
        $club = User::findOrFail($id);
        return view('admin.club.details', [
            'club' => $club,
        ]);
    }
    
    public function allComments()
    {
        $comments = Comment::latest()->paginate(20);
        return view('admin.comments.all', [
            'comments' => $comments,
        ]);
    }

    public function allVideos()
    {
        $videos = Yoga::where('status', 1)->latest()->paginate(20);
        return view('admin.yoga.all', [
            'videos' => $videos,
        ]);
    }

    public function allBlogs()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(20);
        return view('admin.blog.all', [
            'blogs' => $blogs,
        ]);
    }
}
