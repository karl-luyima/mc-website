@extends('layout')

@section('content')
<section class="dashboard py-12 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <!-- Flash Messages -->
        @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
        @endif

        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">
                Welcome Sheila
            </h2>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md shadow transition">
                    Logout
                </button>
            </form>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Bookings Table -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Bookings</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Name</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Email</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Status</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($bookings as $b)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-4 py-2 text-sm text-gray-600">{{ $b->name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-600">{{ $b->email }}</td>
                                <td class="px-4 py-2 text-sm font-semibold 
                                    @if($b->status=='Approved') text-green-600 
                                    @elseif($b->status=='Rejected') text-red-600 
                                    @else text-yellow-600 @endif">
                                    {{ $b->status }}
                                </td>
                                <td class="px-4 py-2">
                                    <form method="POST" action="{{ route('admin.bookings.status', $b->bookingID) }}" class="flex gap-2">
                                        @csrf
                                        <select name="status" class="border border-gray-300 rounded-md px-2 py-1 text-sm focus:ring-1 focus:ring-indigo-500 focus:outline-none">
                                            <option value="Pending" {{ $b->status=='Pending'?'selected':'' }}>Pending</option>
                                            <option value="Approved" {{ $b->status=='Approved'?'selected':'' }}>Approved</option>
                                            <option value="Rejected" {{ $b->status=='Rejected'?'selected':'' }}>Rejected</option>
                                        </select>
                                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-2 py-1 rounded-md shadow transition">
                                            Update
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $bookings->links() }}
                </div>
            </div>

            <!-- Messages Table -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-2xl font-semibold mb-4">Messages</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Name</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Email</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Message</th>
                                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Reply</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($messages as $m)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-4 py-2 text-sm text-gray-600">{{ $m->name }}</td>
                                <td class="px-4 py-2 text-sm text-gray-600">{{ $m->email }}</td>
                                <td class="px-4 py-2 text-sm text-gray-600">{{ $m->content }}</td>
                                <td class="px-4 py-2">
                                    <form method="POST" action="{{ route('admin.messages.reply', $m->id) }}" class="flex flex-col gap-1">
                                        @csrf
                                        <input type="text" name="reply" placeholder="Reply" class="border border-gray-300 rounded-md px-2 py-1 text-sm focus:ring-1 focus:ring-green-500 focus:outline-none">
                                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-2 py-1 rounded-md shadow transition">
                                            Send
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $messages->links() }}
                </div>
            </div>

        </div>
    </div>
</section>
@endsection