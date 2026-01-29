@extends('layout')
@section('title', 'Gallery | Sheila Muwanga MC')
@section('content')

<section class="gallery py-16 md:py-20 bg-gray-100">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-12">

        <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-800">
            Gallery
        </h2>

        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            Highlights from corporate engagements, conferences, and professional events.
        </p>

        <div class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-xl shadow-lg">

            @php
            $images = ['image1.jpg','image6.jpg','image2.jpg','image3.jpg','image4.jpg','image7.jpg'];
            @endphp

            <!-- Slides container -->
            <div class="slides-wrapper flex transition-transform duration-500 ease-in-out">
                <!-- Clone last slide for seamless looping -->
                <div class="slide flex-shrink-0 w-full flex justify-center items-center">
                    <img src="{{ asset('images/' . end($images)) }}"
                        loading="lazy"
                        alt="Gallery Image"
                        class="object-contain rounded-xl max-h-[80vh]">
                </div>

                @foreach($images as $image)
                <div class="slide flex-shrink-0 w-full flex justify-center items-center">
                    <img src="{{ asset('images/' . $image) }}"
                        loading="lazy"
                        alt="Gallery Image"
                        class="object-contain rounded-xl max-h-[80vh]">
                </div>
                @endforeach

                <!-- Clone first slide for seamless looping -->
                <div class="slide flex-shrink-0 w-full flex justify-center items-center">
                    <img src="{{ asset('images/' . $images[0]) }}"
                        loading="lazy"
                        alt="Gallery Image"
                        class="object-contain rounded-xl max-h-[80vh]">
                </div>
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
    .dot.active {
        opacity: 1;
    }
</style>

<script>
    const slidesWrapper = document.querySelector('.slides-wrapper');
    const slides = document.querySelectorAll('.slide'); // includes clones
    const dots = document.getElementsByClassName('dot');
    let slideIndex = 1; // Start from first real slide
    const totalSlides = slides.length - 2; // exclude cloned slides

    // Adjust container height to current image
    function adjustHeight(index) {
        const img = slides[index].querySelector('img');
        slidesWrapper.parentElement.style.height = img.clientHeight + 'px';
    }

    // Show slide at index with smooth transition
    function showSlide(index) {
        slidesWrapper.style.transition = 'transform 0.5s ease-in-out';
        slidesWrapper.style.transform = `translateX(-${index * 100}%)`;
        // Update dots (real slides only)
        Array.from(dots).forEach(dot => dot.classList.remove('active'));
        let dotIndex = (index - 1 + totalSlides) % totalSlides;
        dots[dotIndex].classList.add('active');
        slideIndex = index;
        adjustHeight(index);
    }

    // Handle infinite loop on transition end
    slidesWrapper.addEventListener('transitionend', () => {
        if (slideIndex === 0) { // jumped to cloned last slide
            slidesWrapper.style.transition = 'none';
            slideIndex = totalSlides;
            slidesWrapper.style.transform = `translateX(-${slideIndex * 100}%)`;
        } else if (slideIndex === totalSlides + 1) { // jumped to cloned first slide
            slidesWrapper.style.transition = 'none';
            slideIndex = 1;
            slidesWrapper.style.transform = `translateX(-${slideIndex * 100}%)`;
        }
    });

    // Autoplay
    function autoSlides() {
        slideIndex++;
        showSlide(slideIndex);
        setTimeout(autoSlides, 4000);
    }

    // Dot navigation
    Array.from(dots).forEach((dot, i) => {
        dot.addEventListener('click', () => {
            slideIndex = i + 1; // +1 for cloned first slide offset
            showSlide(slideIndex);
        });
    });

    // Swipe gestures
    let startX = 0;
    let endX = 0;
    const container = slidesWrapper.parentElement;

    container.addEventListener('touchstart', e => startX = e.touches[0].clientX);
    container.addEventListener('touchmove', e => endX = e.touches[0].clientX);
    container.addEventListener('touchend', () => {
        const threshold = 50;
        if (startX - endX > threshold) { // swipe left
            slideIndex++;
            showSlide(slideIndex);
        } else if (endX - startX > threshold) { // swipe right
            slideIndex--;
            showSlide(slideIndex);
        }
        startX = 0;
        endX = 0;
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
            slideIndex++;
            showSlide(slideIndex);
        } else if (e.key === 'ArrowLeft') {
            slideIndex--;
            showSlide(slideIndex);
        }
    });

    // Initialize
    showSlide(slideIndex);
    autoSlides();
    window.addEventListener('resize', () => adjustHeight(slideIndex));
</script>

@endsection