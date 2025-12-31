<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Message;
use App\Mail\BookingStatusUpdate;
use App\Mail\MessageReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MCController extends Controller
{
    private $adminEmail = 'sheilamuwanga75@gmail.com';
    private $adminPassword = 'luyimakarl1K';

    // Public pages
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function contact()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->message,
            'status' => 'Unread',
        ]);

        return back()->with('success', 'Message sent successfully!');
    }

    // Show login form
    public function showLogin()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($request->email === $this->adminEmail && $request->password === $this->adminPassword) {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials.');
    }

    // Logout
    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

    // Admin dashboard
    public function adminDashboard()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login first');
        }

        $bookings = Booking::latest()->paginate(5);
        $messages = Message::latest()->paginate(5);

        return view('admin.dashboard', compact('bookings', 'messages'));
    }

    // Admin messages view
    public function adminMessages()
    {
        if (!Session::get('admin_logged_in')) {
            return redirect()->route('admin.login')->with('error', 'Please login first');
        }

        $messages = Message::latest()->paginate(5);
        return view('admin.messages', compact('messages'));
    }

    // Reply to a message
    public function replyMessage(Request $request, $id)
    {
        $request->validate(['reply' => 'required|string']);

        $message = Message::findOrFail($id);
        $message->reply = $request->reply;
        $message->status = 'Read';
        $message->save();

        Mail::to($message->email)->send(new MessageReply($message));

        return back()->with('success', 'Reply sent successfully!');
    }

    // -----------------------------
    // Registration Methods
    // -----------------------------

    // Show registration form
    public function showRegister()
    {
        return view('admin.register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        // For simplicity, update controller properties (or save to DB if you want)
        $this->adminEmail = $request->email;
        $this->adminPassword = $request->password;

        return redirect()->route('admin.login')->with('success', 'Registration successful. You can now log in.');
    }
}
