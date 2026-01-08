@extends('layout')

@section('content')
<section class="hero relative bg-gradient-to-r from-purple-600 to-pink-500 text-white text-center py-24 overflow-hidden">
    <!-- Background accents -->
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-300 rounded-full opacity-20 -z-10 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-pink-400 rounded-full opacity-20 -z-10 animate-pulse"></div>

    <div class="container mx-auto px-6">
        <h1 class="text-5xl md:text-6xl font-extrabold mb-4 drop-shadow-lg animate-fadeIn">
            Sheila Muwanga
        </h1>
        <p class="text-xl md:text-2xl mb-8 animate-fadeIn delay-150">
            Your Event, Her Voice, The Perfect Experience
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-6 animate-fadeIn delay-300">
            <!-- Book Now button -->
            <a href="{{ route('contact') }}"
                class="px-8 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-800 font-semibold rounded-full shadow-lg hover:from-yellow-500 hover:to-yellow-600 transition transform hover:-translate-y-1">
                Book Now
            </a>


            <!-- Tailwind Fade-in Animation -->
            <style>
                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(10px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .animate-fadeIn {
                    animation: fadeIn 1s ease-out forwards;
                }

                .animate-fadeIn.delay-150 {
                    animation-delay: 0.15s;
                }

                .animate-fadeIn.delay-300 {
                    animation-delay: 0.3s;
                }
            </style>
            @endsection