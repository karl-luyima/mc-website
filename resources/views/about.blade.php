@extends('layout')

@section('content')
<section class="about-section py-16 bg-gray-50">
    <div class="container mx-auto max-w-4xl px-4 text-center">
        <!-- Section Header -->
        <h2 class="text-4xl font-bold text-gray-800 mb-8">
            About Sheila
        </h2>

        <!-- Card Wrapper -->
        <div class="bg-white shadow-lg rounded-2xl p-8 space-y-6">
            <p class="text-lg leading-relaxed text-gray-700">
                Sheila Muwanga is a passionate and professional Master of Ceremony (MC) 
                dedicated to making your event unforgettable. With her unique blend of 
                charm, wit, and experience, she creates memorable moments that connect 
                with every audience.
            </p>

            <p class="text-lg leading-relaxed text-gray-700">
                Whether it’s weddings, corporate events, graduations, or special celebrations, 
                Sheila ensures a smooth flow of activities while keeping guests engaged 
                and entertained. Her mission is to turn your vision into a remarkable experience.
            </p>

            <!-- Call to Action -->
            <div class="mt-8">
                <a href="{{ route('contact') }}" 
                   class="inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-300">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
