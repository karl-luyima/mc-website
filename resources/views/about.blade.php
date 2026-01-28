@extends('layout')
@section('title', 'About | Sheila Muwanga MC')
@section('content')
<section class="about-section py-16 md:py-20 bg-gray-50">
    <div class="container mx-auto max-w-5xl px-4 md:px-6 lg:px-8 text-center">
        <!-- Section Header -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 mb-8 md:mb-12">
            About Sheila
        </h2>

        <!-- Info Card -->
        <div class="bg-white shadow-xl rounded-3xl p-6 sm:p-8 md:p-10 space-y-6 sm:space-y-8">
            <p class="text-base sm:text-lg md:text-xl leading-relaxed text-gray-700">
                Sheila Muwanga is a highly skilled and passionate Mistress of Ceremony (MC),
                committed to making every event memorable. With a unique combination of
                charm, professionalism, and wit, she creates experiences that leave lasting impressions on every audience.
            </p>

            <p class="text-base sm:text-lg md:text-xl leading-relaxed text-gray-700">
                From weddings and corporate events to graduations and special celebrations,
                Sheila ensures a seamless flow of activities while engaging and entertaining guests.
                Her goal is to transform your vision into an extraordinary experience.
            </p>

            <!-- Call to Action -->
            <div class="mt-6 sm:mt-8 md:mt-10">
                <a href="{{ route('contact') }}"
                    class="inline-block px-6 sm:px-8 py-3 sm:py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                    Book Sheila Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection