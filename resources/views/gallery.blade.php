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

        <div
            id="galleryContainer"
            class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-xl shadow-lg"
        >

            @php
                $images = ['image1.jpg','image6.jpg','image2.jpg','image3.jpg','image4.jpg','image7.jpg'];
            @endphp

            <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                @foreach($images as $image)
                    <div class="w-full flex-shrink-0 flex justify-center items-center">
                        <img
                            src="{{ asset('images/' . $image) }}"
                            loading="lazy"
                            alt="Gallery Image"
                            class="object-contain rounded-xl max-h-[80vh]"
                        >
                    </div>
                @endforeach
            </div>

            <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                @foreach($images as $i => $img)
                    <span class="dot w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer {{ $i === 0 ? 'active' : '' }}"></span>
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
    const slider = document.getElementById('slider');
    const dots = document.querySelectorAll('.dot');
    const container = document.getElementById('galleryContainer');
    const total = dots.length;

    let index = 0;
    let autoplay;

    function updateDots() {
        dots.forEach(d => d.classList.remove('active'));
        dots[index].classList.add('active');
    }

    function jumpTo(i) {
        slider.style.transition = 'none';
        slider.style.transform = `translateX(-${i * 100}%)`;
        index = i;
        updateDots();
        slider.offsetHeight; // force reflow
        slider.style.transition = 'transform 0.5s ease-in-out';
    }

    function goTo(i) {
        if (i < 0) {
            jumpTo(total - 1);
            return;
        }

        if (i >= total) {
            jumpTo(0);
            return;
        }

        index = i;
        slider.style.transform = `translateX(-${index * 100}%)`;
        updateDots();
    }

    function startAutoplay() {
        autoplay = setInterval(() => {
            goTo(index + 1);
        }, 4000);
    }

    function stopAutoplay() {
        clearInterval(autoplay);
    }

    // dots
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => goTo(i));
    });

    // keyboard
    window.addEventListener('keydown', e => {
        if (e.key === 'ArrowRight') goTo(index + 1);
        if (e.key === 'ArrowLeft') goTo(index - 1);
    });

    // swipe
    let startX = 0;
    slider.addEventListener('touchstart', e => startX = e.touches[0].clientX);
    slider.addEventListener('touchend', e => {
        const endX = e.changedTouches[0].clientX;
        if (startX - endX > 50) goTo(index + 1);
        if (endX - startX > 50) goTo(index - 1);
    });

    // pause on hover
    container.addEventListener('mouseenter', stopAutoplay);
    container.addEventListener('mouseleave', startAutoplay);

    // init
    jumpTo(0);
    startAutoplay();
</script>

@endsection
