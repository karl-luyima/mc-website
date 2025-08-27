@extends('layout')

@section('content')
<section class="login-form py-20 bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="container mx-auto max-w-md bg-white p-10 rounded-3xl shadow-2xl relative">
        <h2 class="text-3xl font-bold mb-6 text-center text-purple-700">MC Login</h2>

        @if(session('error'))
            <p class="mb-4 text-red-600">{{ session('error') }}</p>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full p-3 border rounded-xl" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-3 border rounded-xl" required>
            
            <!-- Login button styled like logout button -->
            <button type="submit" class="bg-red-600 text-white w-full py-3 rounded-xl hover:bg-red-700 shadow">
                Login
            </button>
        </form>
    </div>
</section>
@endsection
