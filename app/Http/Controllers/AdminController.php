<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Booking; // ensure you have Booking model

class AdminController extends Controller
{
    // Dashboard with bookings + messages
    public function dashboard()
    {
        $bookings = Booking::latest()->paginate(10);
        $messages = Message::latest()->paginate(10);

        return view('admin.dashboard', compact('bookings', 'messages'));
    }

    // Mark a message as read
    public function markRead($id)
    {
        $message = Message::findOrFail($id);
        $message->status = 'Read';
        $message->save();

        return back()->with('success', 'Message marked as read.');
    }

    
}
