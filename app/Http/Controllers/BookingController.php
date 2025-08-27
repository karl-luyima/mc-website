<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Mail\BookingNotification;
use App\Mail\BookingStatusUpdate;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    // Show the public booking form
    public function showBookingForm()
    {
        return view('booking_form'); // Public form view
    }

    // Store a new booking from client
    public function store(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:255',
            'email'      => 'required|email',
            'phone'      => 'required|string|max:15',
            'event_type' => 'required|string|max:255',
            'event_date' => 'required|date',
            'message'    => 'nullable|string'
        ]);

        $booking = Booking::create($request->all());

        // Notify MC/Admin via email
        Mail::to("shielaofficial@gmail.com")->send(new BookingNotification($booking));

        return redirect()->back()->with('success', 'Your booking request has been submitted!');
    }

    // Show all bookings to MC/Admin (dashboard)
    public function adminIndex()
    {
        $bookings = Booking::latest()->paginate(10);
        return view('admin.bookings', compact('bookings'));
    }

    // Update booking status from MC/Admin dashboard
    public function updateStatus(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        // Notify client via email
        Mail::to($booking->email)->send(new BookingStatusUpdate($booking));

        return redirect()->back()->with('success', "Booking status updated to {$booking->status}");
    }
}
