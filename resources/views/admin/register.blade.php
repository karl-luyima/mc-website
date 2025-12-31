@extends('layout')

@section('content')
<section class="login-form py-20 bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="container mx-auto max-w-md bg-white p-10 rounded-3xl shadow-2xl relative">

        <h2 class="text-3xl font-bold mb-2 text-center text-purple-700">Register as MC</h2>
        <p class="text-center text-gray-600 mb-6">Register Sheila as the Master of Ceremonies for this site</p>

        {{-- Success Message --}}
        @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg border border-green-200">
            {{ session('success') }}
        </div>
        @endif

        {{-- General Error Message --}}
        @if(session('error'))
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg border border-red-200">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.register.submit') }}" class="space-y-4">
            @csrf

            {{-- Email --}}
            <div>
                <label class="block mb-1 text-gray-700 font-medium">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500"
                    required>
                @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Password --}}
            <div>
                <label class="block mb-1 text-gray-700 font-medium">Password</label>
                <input type="password" name="password"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500"
                    required>
                @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div>
                <label class="block mb-1 text-gray-700 font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500"
                    required>
                @error('password_confirmation')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            {{-- Register Button --}}
            <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white w-full py-3 rounded-xl shadow transition">
                Register
            </button>
        </form>

        {{-- Login Link --}}
        <p class="mt-6 text-center text-gray-500">
            Already registered?
            <a href="{{ route('admin.login') }}" class="text-purple-600 hover:underline">
                Login here
            </a>
        </p>
    </div>
</section>
@endsection