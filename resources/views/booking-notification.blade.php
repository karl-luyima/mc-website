<h2>New Booking Request</h2>
<p><strong>Name:</strong> {{ $booking->name }}</p>
<p><strong>Email:</strong> {{ $booking->email }}</p>
<p><strong>Phone:</strong> {{ $booking->phone }}</p>
<p><strong>Event Type:</strong> {{ $booking->event_type }}</p>
<p><strong>Event Date:</strong> {{ $booking->event_date }}</p>
<p><strong>Message:</strong> {{ $booking->message ?? 'N/A' }}</p>
