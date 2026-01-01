@extends('layout')

@section('content')
<section class="login-form py-20 bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="container mx-auto max-w-md bg-white p-10 rounded-3xl shadow-2xl relative">

        {{-- Show Welcome if logged in --}}
        @if(session('admin_logged_in'))
        <h2 class="text-2xl font-semibold mb-6 text-center text-purple-700">
            Welcome Sheila
        </h2>
        @else
        <h2 class="text-3xl font-bold mb-6 text-center text-purple-700">
            MC Login
        </h2>
        @endif

        {{-- Error message --}}
        @if(session('error'))
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg border border-red-200">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
            @csrf

            {{-- Email --}}
            <div>
                <label class="block mb-1 text-gray-700 font-medium">Email</label>
                <input type="email" name="email"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500"
                    required>
            </div>

            {{-- Password --}}
            <div>
                <label class="block mb-1 text-gray-700 font-medium">Password</label>
                <input type="password" name="password"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500"
                    required>
            </div>

            {{-- Submit --}}
            <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white w-full py-3 rounded-xl shadow transition">
                Login
            </button>
        </form>

        {{-- Password reset --}}
        <p class="mt-4 text-center text-gray-500">
            Forgot your password?
            <a href="{{ route('admin.password.request') }}" class="text-purple-600 font-medium hover:underline">
                Reset here
            </a>
        </p>

        {{-- Registration --}}
        <p class="mt-4 text-center text-gray-600">
            Don’t have an account?
            <a href="{{ route('admin.register') }}" class="text-purple-600 font-semibold hover:underline">
                Register as MC
            </a>
        </p>
    </div>
</section>
@endsection