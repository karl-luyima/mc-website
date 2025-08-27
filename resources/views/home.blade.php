@extends('layout')

@section('content')
<section class="hero bg-gradient-to-r from-purple-600 to-pink-500 text-white text-center py-20">
    <div class="container mx-auto">
        <h1 class="text-5xl font-bold mb-4">Sheila Muwanga</h1>
        <p class="text-xl mb-6">Your Event, Her Voice, The Perfect Experience</p>

        <div class="flex justify-center gap-8">
            <!-- Book Now button -->
            <a href="{{ route('contact') }}" 
               class="btn bg-white text-purple-700 px-6 py-3 rounded-full shadow-md hover:bg-gray-100 transition w-48 text-center">
                Book Now
            </a>

            <!-- Login as MC button -->
            <a href="{{ route('admin.login') }}" 
               class="btn bg-white text-purple-700 px-6 py-3 rounded-full shadow-md hover:bg-gray-100 transition w-48 text-center">
                Login as MC
            </a>
        </div>
    </div>
</section>
@endsection
