<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:255'
        ]);

        Subscriber::create($data);

        return back()->with('success', 'Thank you for subscribing');
    }
}
