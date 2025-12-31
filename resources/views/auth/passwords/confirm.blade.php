@extends('layout')

@section('content')
<div class="container py-10">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Confirm Password</h2>

        <form method="POST" action="#">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Password</label>
                <input type="password" name="password" required class="w-full p-3 border rounded">
            </div>

            <button class="bg-purple-600 text-white px-4 py-2 rounded">
                Confirm Password
            </button>
        </form>
    </div>
</div>
@endsection