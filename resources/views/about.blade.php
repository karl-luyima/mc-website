@extends('layout')

@section('content')
<section class="about-section py-20 bg-gray-50">
    <div class="container mx-auto max-w-5xl px-4 text-center">
        <!-- Section Header -->
        <h2 class="text-5xl font-extrabold text-gray-900 mb-12">
            About Sheila
        </h2>

        <!-- Info Card -->
        <div class="bg-white shadow-xl rounded-3xl p-10 space-y-8">
            <p class="text-lg md:text-xl leading-relaxed text-gray-700">
                Sheila Muwanga is a highly skilled and passionate Master of Ceremony (MC), 
                committed to making every event memorable. With a unique combination of 
                charm, professionalism, and wit, she creates experiences that leave lasting impressions on every audience.
            </p>

            <p class="text-lg md:text-xl leading-relaxed text-gray-700">
                From weddings and corporate events to graduations and special celebrations, 
                Sheila ensures a seamless flow of activities while engaging and entertaining guests. 
                Her goal is to transform your vision into an extraordinary experience.
            </p>

            <!-- Call to Action -->
            <div class="mt-10">
                <a href="{{ route('contact') }}" 
                   class="inline-block px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:from-blue-700 hover:to-indigo-700 transition-all duration-300">
                    Book Sheila Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
