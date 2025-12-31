@extends('layout')

@section('content')
<div class="container py-10">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">Reset Password</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block mb-1">Email Address</label>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full p-3 border rounded"
                            >

                            @error('email')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700">
                            Send Password Reset Link
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
