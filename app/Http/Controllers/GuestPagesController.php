<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestPagesController extends Controller
{
    public function home()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function team()
    {
        return view('pages.team');
    }
}
