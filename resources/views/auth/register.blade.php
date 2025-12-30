@extends('layout')

@section('content')
<section class="register-form py-20 bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="container mx-auto max-w-md bg-white p-10 rounded-3xl shadow-2xl">
        <h2 class="text-3xl font-bold mb-6 text-center text-purple-700">Register</h2>

        @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('register.submit') }}" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}"
                class="w-full p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>

            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                class="w-full p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>

            <input type="password" name="password" placeholder="Password"
                class="w-full p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>

            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500" required>

            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-xl shadow">
                Register
            </button>
        </form>

        <!-- Back to Login Link -->
        <p class="mt-4 text-center text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-purple-600 hover:underline">Login here</a>
        </p>
    </div>
</section>
@endsection