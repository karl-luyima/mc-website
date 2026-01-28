@extends('layout')
@section('title', 'Gallery | Sheila Muwanga MC')
@section('content')

<section class="gallery py-16 md:py-20 bg-gray-100">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-12">

        <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-800">
            Gallery
        </h2>

        <!-- Corporate subtitle -->
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            Highlights from corporate engagements, conferences, and professional events.
        </p>

        <div class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-xl shadow-lg">

            @php
                $images = ['image1.jpg','image6.jpg','image2.jpg','image3.jpg','image4.jpg','image7.jpg'];
            @endphp

            <!-- Slides container for smooth sliding -->
            <div class="slides-wrapper flex transition-transform duration-500 ease-in-out">
                @foreach($images as $image)
                    <div class="slide flex-shrink-0 w-full">
                        <img src="{{ asset('images/' . $image) }}"
                             loading="lazy"
                             alt="Gallery Image"
                             class="w-full object-contain bg-gray-100 rounded-xl">
                    </div>
                @endforeach
            </div>

            <!-- Navigation Dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                @foreach($images as $index => $image)
                    <span class="dot w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer {{ $index == 0 ? 'active' : '' }}"></span>
                @endforeach
            </div>

        </div>
    </div>
</section>

<style>
    .dot.active { opacity: 1; }
    .fade { animation: fadeEffect 1.5s ease-in-out; }

    @keyframes fadeEffect {
        from { opacity: 0.4; }
        to { opacity: 1; }
    }
</style>

<script>
    const slidesWrapper = document.querySelector('.slides-wrapper');
    const slides = document.querySelectorAll('.slide');
    const dots = document.getElementsByClassName('dot');
    let slideIndex = 0;
    const totalSlides = slides.length;

    // Show slide at index
    function showSlide(index) {
        slidesWrapper.style.transform = `translateX(-${index * 100}%)`;
        Array.from(dots).forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
        slideIndex = index;
    }

    // Autoplay
    function autoSlides() {
        slideIndex = (slideIndex + 1) % totalSlides;
        showSlide(slideIndex);
        setTimeout(autoSlides, 4000);
    }

    // Dot navigation
    Array.from(dots).forEach((dot, i) => {
        dot.addEventListener('click', () => showSlide(i));
    });

    // Swipe gestures
    let startX = 0;
    let endX = 0;
    const container = document.querySelector('.relative');

    container.addEventListener('touchstart', e => startX = e.touches[0].clientX);
    container.addEventListener('touchmove', e => endX = e.touches[0].clientX);
    container.addEventListener('touchend', () => {
        const threshold = 50;
        if (startX - endX > threshold) { // swipe left
            slideIndex = (slideIndex + 1) % totalSlides;
            showSlide(slideIndex);
        } else if (endX - startX > threshold) { // swipe right
            slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
            showSlide(slideIndex);
        }
        startX = 0;
        endX = 0;
    });

    // Initialize
    showSlide(slideIndex);
    autoSlides();
</script>

@endsection
