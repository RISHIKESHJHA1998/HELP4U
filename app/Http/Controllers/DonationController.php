<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function create()
    {
        return view('pages.donation');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:10',
            'title' => 'required|string|max:255',
            'message' => 'nullable',
        ]);

        Donation::create($data);

        return back()->with('success', 'Donation request sent successfully. Our team will contact you soon.');
    }
}
