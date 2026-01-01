@extends('layout')

@section('content')
<section class="py-20 min-h-screen flex items-center justify-center bg-white">
    <div class="container mx-auto max-w-md bg-white p-10 rounded-3xl shadow-2xl relative">
        <h2 class="text-3xl font-bold mb-6 text-center text-purple-700">Reset Password</h2>

        @if(session('status'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg border border-green-200">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('admin.password.update') }}" class="space-y-4">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label class="block mb-1 text-gray-700 font-medium">Email Address</label>
                <input type="email" name="email" value="{{ $email ?? old('email') }}" required
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500">
                @error('email') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 text-gray-700 font-medium">Password</label>
                <input type="password" name="password" required
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500">
                @error('password') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 text-gray-700 font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" required
                    class="w-full p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-purple-500">
            </div>

            <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white w-full py-3 rounded-xl shadow transition">
                Reset Password
            </button>
        </form>

        <p class="mt-6 text-center text-gray-500">
            Remembered your password? 
            <a href="{{ route('admin.login') }}" class="text-purple-600 hover:underline">Login here</a>
        </p>
    </div>
</section>
@endsection
