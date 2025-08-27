@extends('layouts.app')

@section('content')
<section class="dashboard">
    <h2>Messages</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>From</th>
                <th>Email</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->status }}</td>
                <td>
                    <a href="{{ route('admin.messages.read', $message->id) }}">Mark as Read</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $messages->links() }}
</section>
@endsection
