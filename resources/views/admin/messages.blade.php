@extends('layouts.app')

@section('content')
<section class="dashboard py-10">
    <h2 class="text-3xl font-bold mb-6">Messages</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left border-b">ID</th>
                    <th class="p-3 text-left border-b">From</th>
                    <th class="p-3 text-left border-b">Email</th>
                    <th class="p-3 text-left border-b">Message</th>
                    <th class="p-3 text-left border-b">Status</th>
                    <th class="p-3 text-left border-b">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border-b">{{ $message->id }}</td>
                    <td class="p-3 border-b">{{ $message->name }}</td>
                    <td class="p-3 border-b">{{ $message->email }}</td>
                    <td class="p-3 border-b">{{ Str::limit($message->message, 50) }}</td>
                    <td class="p-3 border-b">
                        <span class="{{ $message->status == 'Read' ? 'text-green-600 font-semibold' : 'text-red-600 font-semibold' }}">
                            {{ $message->status }}
                        </span>
                    </td>
                    <td class="p-3 border-b">
                        <form action="{{ route('admin.messages.read', $message->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 transition">
                                Mark as Read
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
</section>
@endsection