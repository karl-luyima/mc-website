@extends('layout')

@section('content')
<section class="gallery py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-12 text-gray-800">Gallery</h2>

        <div class="relative w-full max-w-4xl mx-auto overflow-hidden rounded-xl shadow-lg">
            <!-- Slides -->
            <div class="mySlides fade">
                <img src="/images/image5.jpg" class="w-full h-80 md:h-96 object-cover">
            </div>
            <div class="mySlides fade">
                <img src="/images/image6.jpg" class="w-full h-80 md:h-96 object-cover">
            </div>
            <div class="mySlides fade">
                <img src="/images/image2.jpg" class="w-full h-80 md:h-96 object-cover">
            </div>
            <div class="mySlides fade">
                <img src="/images/image3.jpg" class="w-full h-80 md:h-96 object-cover">
            </div>
            <div class="mySlides fade">
                <img src="/images/image4.jpg" class="w-full h-80 md:h-96 object-cover">
            </div>

            <!-- Navigation Dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <span class="dot w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white rounded-full opacity-50 cursor-pointer"></span>
            </div>
        </div>
    </div>
</section>

<style>
    .mySlides { display: none; }
    .fade { animation: fadeEffect 1.5s ease-in-out; }

    @keyframes fadeEffect {
        from {opacity: 0.4}
        to {opacity: 1}
    }

    .dot.active { opacity: 1; }
</style>

<script>
    let slideIndex = 0;
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    function showSlides() {
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            dots[i].classList.remove("active");
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].classList.add("active");
        setTimeout(showSlides, 4000);
    }

    showSlides();

    // Optional: click dots to navigate manually
    Array.from(dots).forEach((dot, i) => {
        dot.addEventListener("click", () => {
            slideIndex = i;
            showSlides();
        });
    });
</script>
@endsection
