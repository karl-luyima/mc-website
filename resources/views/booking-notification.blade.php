<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Booking Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
        }
        h2 {
            color: #1a202c;
            border-bottom: 2px solid #1a202c;
            padding-bottom: 8px;
        }
        .booking-info p {
            margin: 10px 0;
        }
        .booking-info strong {
            color: #1a202c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Booking Request</h2>

        <div class="booking-info">
            <p><strong>Name:</strong> {{ $booking->name }}</p>
            <p><strong>Email:</strong> {{ $booking->email }}</p>
            <p><strong>Phone:</strong> {{ $booking->phone }}</p>
            <p><strong>Event Type:</strong> {{ $booking->event_type }}</p>
            <p><strong>Event Date:</strong> {{ \Carbon\Carbon::parse($booking->event_date)->format('F j, Y') }}</p>
            <p><strong>Message:</strong> {{ $booking->message ?? 'N/A' }}</p>
        </div>
    </div>
</body>
</html>
