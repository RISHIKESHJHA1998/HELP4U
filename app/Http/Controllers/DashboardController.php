<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Lising different dashboard for different users
    public function index()
    {
        if(Auth::user())
        {
            if(Auth::user()->hasRole('admin'))
            {
                return view('admin.dashboard');
            }
            
            else if(Auth::user()->hasRole('club'))
            {
                return view('club.dashboard');
            }

            else if(Auth::user()->hasRole('member'))
            {
                return view('member.dashboard');
            }

            else if(Auth::user()->hasRole('user'))
            {
                return view('user.dashboard');
            }
            
        }
        else
        {
            return redirect()->route('home');
        }
    }
}
