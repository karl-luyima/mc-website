<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Update</title>
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
        p {
            margin: 12px 0;
        }
        .status-approved {
            color: green;
            font-weight: bold;
        }
        .status-declined {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Booking Update</h2>

        <p>Hi {{ $booking->name }},</p>

        <p>Your booking for <strong>{{ $booking->event_type }}</strong> on 
        <strong>{{ \Carbon\Carbon::parse($booking->event_date)->format('F j, Y') }}</strong> has been updated.</p>

        <p><strong>Status:</strong> 
            <span class="{{ $booking->status == 'Approved' ? 'status-approved' : 'status-declined' }}">
                {{ $booking->status }}
            </span>
        </p>

        @if($booking->status == 'Approved')
            <p>✅ Congratulations! Sheila will contact you soon to finalize the details.</p>
        @else
            <p>❌ Unfortunately, your booking has been declined. You may try requesting another date.</p>
        @endif

        <p>Thank you,<br>
        <strong>Sheila Muwanga MC</strong></p>
    </div>
</body>
</html>
