@extends('layouts.app')

@section('content')
<section class="dashboard">
    <h2>All Bookings</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Event</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->bookingID }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->event_type }}</td>
                <td>{{ $booking->event_date }}</td>
                <td>{{ $booking->status }}</td>
                <td>
                    <form action="{{ route('admin.bookings.status', $booking->bookingID) }}" method="POST">
                        @csrf
                        <select name="status" onchange="this.form.submit()">
                            <option value="Pending" {{ $booking->status=='Pending' ? 'selected':'' }}>Pending</option>
                            <option value="Approved" {{ $booking->status=='Approved' ? 'selected':'' }}>Approve</option>
                            <option value="Rejected" {{ $booking->status=='Rejected' ? 'selected':'' }}>Reject</option>
                        </select>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $bookings->links() }}
</section>
@endsection
