@extends('layout')

@section('content')
<section class="verify-email py-20 bg-gray-50 min-h-screen flex items-center justify-center">
    <div class="container mx-auto max-w-md bg-white p-10 rounded-3xl shadow-2xl">
        <h2 class="text-2xl font-bold mb-6 text-center text-purple-700">Verify Your Email Address</h2>

        @if (session('resent'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-lg">
            A fresh verification link has been sent to your email address.
        </div>
        @endif

        <p class="mb-4 text-gray-700">
            Before proceeding, please check your email for a verification link.
            If you did not receive the email:
        </p>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 rounded-xl shadow">
                Click here to request another
            </button>
        </form>
    </div>
</section>
@endsection