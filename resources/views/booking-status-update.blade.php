<h2>Booking Update</h2>
<p>Hi {{ $booking->name }},</p>

<p>Your booking for <strong>{{ $booking->event_type }}</strong> on 
<strong>{{ $booking->event_date }}</strong> has been updated.</p>

<p><strong>Status:</strong> {{ $booking->status }}</p>

@if($booking->status == 'Approved')
<p>✅ Congratulations! Sheila will contact you soon to finalize details.</p>
@else
<p>❌ Unfortunately, your booking has been declined. You may try requesting another date.</p>
@endif

<p>Thank you,<br>Sheila Muwanga MC</p>
