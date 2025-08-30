<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form fields
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Save to DB
        Message::create([
    'name'    => $validated['name'],
    'email'   => $validated['email'],
    'message' => $validated['message'], // 👈 make sure this line exists
    'status'  => 'Unread',
]);

        

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
