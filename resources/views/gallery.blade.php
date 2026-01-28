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
            $images = ['image6.jpg','image2.jpg','image3.jpg','image4.jpg'];
            @endphp

            <!-- Slides container -->
            <div class="slides-wrapper flex transition-transform duration-500 ease-in-out cursor-pointer">
                @foreach($images as $index => $image)
                <div class="slide flex-shrink-0 w-full">
                    <img src="{{ asset('images/' . $image) }}"
                        loading="lazy"
                        alt="Gallery Image {{ $index + 1 }}"
                        class="w-full object-contain bg-gray-100 rounded-xl slide-img"
                        data-index="{{ $index }}">
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

<!-- Lightbox -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 hidden items-center justify-center z-50">
    <button id="lightbox-close" class="absolute top-5 right-5 text-white text-3xl font-bold">&times;</button>
    <button id="lightbox-prev" class="absolute left-5 text-white text-3xl font-bold">&larr;</button>
    <img id="lightbox-img" src="" class="max-h-[90vh] max-w-[90vw] rounded-xl">
    <button id="lightbox-next" class="absolute right-5 text-white text-3xl font-bold">&rarr;</button>
</div>

<style>
    .dot.active {
        opacity: 1;
    }

    .fade {
        animation: fadeEffect 1.5s ease-in-out;
    }

    #lightbox {
        display: flex;
        flex-direction: row;
    }

    #lightbox button {
        background: none;
        border: none;
        cursor: pointer;
    }
</style>

<script>
    const slidesWrapper = document.querySelector('.slides-wrapper');
    const slides = document.querySelectorAll('.slide');
    const dots = document.getElementsByClassName('dot');
    const slideImages = document.querySelectorAll('.slide-img');
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

    // Dot click navigation
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

    // Lightbox
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxClose = document.getElementById('lightbox-close');
    const lightboxNext = document.getElementById('lightbox-next');
    const lightboxPrev = document.getElementById('lightbox-prev');

    slideImages.forEach(img => {
        img.addEventListener('click', e => {
            lightboxImg.src = e.target.src;
            lightbox.dataset.index = e.target.dataset.index;
            lightbox.classList.remove('hidden');
        });
    });

    lightboxClose.addEventListener('click', () => lightbox.classList.add('hidden'));

    lightboxNext.addEventListener('click', () => {
        let idx = parseInt(lightbox.dataset.index);
        idx = (idx + 1) % totalSlides;
        lightboxImg.src = slideImages[idx].src;
        lightbox.dataset.index = idx;
    });

    lightboxPrev.addEventListener('click', () => {
        let idx = parseInt(lightbox.dataset.index);
        idx = (idx - 1 + totalSlides) % totalSlides;
        lightboxImg.src = slideImages[idx].src;
        lightbox.dataset.index = idx;
    });

    // Close lightbox on background click
    lightbox.addEventListener('click', e => {
        if (e.target === lightbox) lightbox.classList.add('hidden');
    });

    // Keyboard navigation
    document.addEventListener('keydown', e => {
        if (!lightbox.classList.contains('hidden')) {
            if (e.key === 'ArrowRight') {
                lightboxNext.click();
            } else if (e.key === 'ArrowLeft') {
                lightboxPrev.click();
            } else if (e.key === 'Escape') {
                lightboxClose.click();
            }
        }
    });

    // Initialize
    showSlide(slideIndex);
    autoSlides();
</script>

@endsection