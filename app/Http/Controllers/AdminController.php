<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class AdminController extends Controller
{
    // Display paginated messages
    public function adminMessages() {
        $messages = Message::latest()->paginate(10);
        return view('admin.messages', compact('messages'));
    }

    // Mark a message as read
    public function markRead($id) {
        $message = Message::findOrFail($id);
        $message->status = 'Read';
        $message->save();
        return back()->with('success', 'Message marked as read.');
    }
}
