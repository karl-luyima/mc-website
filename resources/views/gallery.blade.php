@extends('layout')
@section('title', 'Gallery | Sheila Muwanga MC')
@section('content')
<section class="gallery py-16 md:py-20 bg-gray-100">
    <div class="container mx-auto text-center px-4 sm:px-6 lg:px-12">
        <h2 class="text-3xl sm:text-4xl font-bold mb-12 text-gray-800">Gallery</h2>

        <div class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-xl shadow-lg">
            @php
            $images = ['image6.jpg','image2.jpg','image3.jpg','image4.jpg'];
            @endphp

            @foreach($images as $index => $image)
            <div class="mySlides fade" style="display: {{ $index == 0 ? 'block' : 'none' }};">
                <img src="{{ asset('images/' . $image) }}"
                    loading="lazy"
                    alt="Gallery Image {{ $index + 1 }}"
                    class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-xl">
            </div>
            @endforeach

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
    .fade {
        animation: fadeEffect 1.5s ease-in-out;
    }

    @keyframes fadeEffect {
        from {
            opacity: 0.4;
        }

        to {
            opacity: 1;
        }
    }

    .dot.active {
        opacity: 1;
    }
</style>

<script>
    let slideIndex = 0;
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    function showSlides(n = null) {
        if (n !== null) slideIndex = n;
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            dots[i].classList.remove("active");
        }
        slideIndex++;
        if (slideIndex > slides.length) slideIndex = 1;
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].classList.add("active");
        setTimeout(showSlides, 4000);
    }

    // Initial display
    showSlides();

    // Dot navigation
    Array.from(dots).forEach((dot, i) => {
        dot.addEventListener("click", () => showSlides(i));
    });
</script>
@endsection