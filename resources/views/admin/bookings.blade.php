@extends('layout')

@section('content')
<section class="dashboard py-10">
    <h2 class="text-3xl font-bold mb-6 text-gray-800">All Bookings</h2>

    <div class="overflow-x-auto bg-white shadow rounded-xl">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Client</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Email</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Phone</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Event</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Date</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Status</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($bookings as $booking)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $booking->bookingID }}</td>
                    <td class="px-4 py-2">{{ $booking->name }}</td>
                    <td class="px-4 py-2">{{ $booking->email }}</td>
                    <td class="px-4 py-2">{{ $booking->phone }}</td>
                    <td class="px-4 py-2">{{ $booking->event_type }}</td>
                    <td class="px-4 py-2">{{ $booking->event_date }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.bookings.status', $booking->bookingID) }}" method="POST">
                            @csrf
                            <select name="status" onchange="this.form.submit()" class="border rounded px-2 py-1 text-sm">
                                <option value="Pending" {{ $booking->status=='Pending' ? 'selected':'' }}>Pending</option>
                                <option value="Approved" {{ $booking->status=='Approved' ? 'selected':'' }}>Approved</option>
                                <option value="Rejected" {{ $booking->status=='Rejected' ? 'selected':'' }}>Rejected</option>
                            </select>
                        </form>
                    </td>
                    <td class="px-4 py-2">
                        <form action="{{ route('admin.bookings.delete', $booking->bookingID) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $bookings->links() }}
    </div>
</section>
@endsection