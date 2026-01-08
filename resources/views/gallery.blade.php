@extends('layout')

@section('content')
<section class="gallery py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-12 text-gray-800">Gallery</h2>

        <div class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-xl shadow-lg">
            @php
            $images = ['image5.jpg','image6.jpg','image2.jpg','image3.jpg','image4.jpg'];
            @endphp

            @foreach($images as $index => $image)
            <div class="mySlides fade" style="display: {{ $index == 0 ? 'block' : 'none' }};">
                <img src="{{ asset('images/' . $image) }}" loading="lazy" alt="Gallery Image {{ $index + 1 }}" class="w-full h-auto md:h-96 object-cover rounded-xl">
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
            opacity: 0.4
        }

        to {
            opacity: 1
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

    showSlides();

    Array.from(dots).forEach((dot, i) => {
        dot.addEventListener("click", () => showSlides(i));
    });
</script>
@endsection