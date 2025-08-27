@extends('layout')

@section('content')
<section class="dashboard py-10">
    <h2 class="text-3xl font-bold mb-6">MC Dashboard</h2>

    <div class="mb-8 flex gap-4">
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn bg-red-600 text-white px-4 py-2 rounded">Logout</button>
        </form>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <!-- Bookings Table -->
        <div>
            <h3 class="text-2xl font-semibold mb-4">Bookings</h3>
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">Name</th>
                        <th class="p-2 border">Email</th>
                        <th class="p-2 border">Status</th>
                        <th class="p-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $b)
                    <tr>
                        <td class="p-2 border">{{ $b->name }}</td>
                        <td class="p-2 border">{{ $b->email }}</td>
                        <td class="p-2 border">{{ $b->status }}</td>
                        <td class="p-2 border">
                            <form method="POST" action="{{ route('admin.bookings.status', $b->id) }}">
                                @csrf
                                <select name="status" class="border p-1">
                                    <option value="Pending" {{ $b->status=='Pending'?'selected':'' }}>Pending</option>
                                    <option value="Approved" {{ $b->status=='Approved'?'selected':'' }}>Approved</option>
                                    <option value="Rejected" {{ $b->status=='Rejected'?'selected':'' }}>Rejected</option>
                                </select>
                                <button type="submit" class="btn bg-blue-600 text-white px-2 py-1 rounded">Update</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $bookings->links() }}
        </div>

        <!-- Messages Table -->
        <div>
            <h3 class="text-2xl font-semibold mb-4">Messages</h3>
            <table class="w-full border">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">Name</th>
                        <th class="p-2 border">Email</th>
                        <th class="p-2 border">Message</th>
                        <th class="p-2 border">Reply</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $m)
                    <tr>
                        <td class="p-2 border">{{ $m->name }}</td>
                        <td class="p-2 border">{{ $m->email }}</td>
                        <td class="p-2 border">{{ $m->content }}</td>
                        <td class="p-2 border">
                            <form method="POST" action="{{ route('admin.messages.reply', $m->id) }}">
                                @csrf
                                <input type="text" name="reply" placeholder="Reply" class="border p-1 w-full mb-1">
                                <button type="submit" class="btn bg-green-600 text-white px-2 py-1 rounded">Send</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $messages->links() }}
        </div>
    </div>
</section>
@endsection
