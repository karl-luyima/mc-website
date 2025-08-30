@extends('layout')

@section('content')
<section class="about-section py-16 bg-gray-50">
    <div class="container mx-auto max-w-4xl text-center">
        <h2 class="auth-title mb-6">About Sheila</h2>

        <div class="bg-white shadow-md rounded-2xl p-8 space-y-6">
            <p class="text-lg leading-relaxed">
                Sheila Muwanga is a passionate and professional Master of Ceremony (MC) 
                dedicated to making your event unforgettable. With her unique blend of 
                charm, wit, and experience, she creates memorable moments that connect 
                with every audience.
            </p>

            <p class="text-lg leading-relaxed">
                Whether it’s weddings, corporate events, graduations, or special celebrations, 
                Sheila ensures a smooth flow of activities while keeping guests engaged 
                and entertained. Her mission is to turn your vision into a remarkable experience.
            </p>

            <div class="mt-8">
                <a href="{{ route('contact') }}" class="btn">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
