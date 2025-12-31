@extends('layout')

@section('content')
<div class="container py-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-4">
                            <label class="block mb-1">Email Address</label>
                            <input
                                type="email"
                                name="email"
                                value="{{ $email ?? old('email') }}"
                                required
                                class="w-full p-3 border rounded">

                            @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block mb-1">Password</label>
                            <input
                                type="password"
                                name="password"
                                required
                                class="w-full p-3 border rounded">

                            @error('password')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-1">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                required
                                class="w-full p-3 border rounded">
                        </div>

                        <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">
                            Reset Password
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection