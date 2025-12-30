@extends('layout')

@section('content')
<section class="login-form py-20 bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="container mx-auto max-w-md bg-white p-10 rounded-3xl shadow-2xl relative">
        <h2 class="text-3xl font-bold mb-6 text-center text-purple-700">MC Login</h2>

        @if(session('error'))
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg border border-red-200">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block mb-1 text-gray-700 font-medium">Email</label>
                <input type="email" name="email" id="email" placeholder="Email"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
            </div>

            <div>
                <label for="password" class="block mb-1 text-gray-700 font-medium">Password</label>
                <input type="password" name="password" id="password" placeholder="Password"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>
            </div>

            <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white w-full py-3 rounded-xl shadow transition">
                Login
            </button>
        </form>

        <p class="mt-6 text-center text-gray-500">
            Forgot your password? 
            <a href="{{ route('admin.password.request') }}" class="text-purple-600 hover:underline">Reset here</a>
        </p>
    </div>
</section>
@endsection
