@extends('layout')
@section('title', 'Home | Sheila Muwanga MC')
@section('content')
<section class="hero relative bg-gradient-to-r from-purple-600 to-pink-500 text-white text-center py-20 sm:py-24 md:py-32 overflow-hidden">
    <!-- Background accents -->
    <div class="absolute top-0 left-0 w-48 sm:w-64 md:w-72 h-48 sm:h-64 md:h-72 bg-purple-300 rounded-full opacity-20 -z-10 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-64 sm:w-80 md:w-80 h-64 sm:h-80 md:h-80 bg-pink-400 rounded-full opacity-20 -z-10 animate-pulse"></div>

    <div class="container mx-auto px-4 sm:px-6 md:px-12">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 drop-shadow-lg animate-fadeIn">
            Sheila Muwanga
        </h1>
        <p class="text-lg sm:text-xl md:text-2xl mb-8 animate-fadeIn delay-150">
            Your Event, Her Voice, The Perfect Experience
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4 sm:gap-6 animate-fadeIn delay-300">
            <!-- Book Now button -->
            <a href="{{ route('contact') }}"
                class="px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-purple-800 font-semibold rounded-full shadow-lg hover:from-yellow-500 hover:to-yellow-600 transition transform hover:-translate-y-1">
                Book Now
            </a>
        </div>
    </div>

    <!-- Fade-in animation -->
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
</section>
@endsection