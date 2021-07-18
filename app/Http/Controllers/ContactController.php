<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255', 
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'nullable',
        ]);

        Contact::create($data);

        return back()->with('success', 'Thank you for contacting. We will get in touch with you as soon as possible.');
    }
}
