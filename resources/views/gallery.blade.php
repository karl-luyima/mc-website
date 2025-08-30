@extends('layout')

@section('content')
<section class="gallery py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Gallery</h2>

        <div class="slideshow-container relative w-full max-w-3xl mx-auto">
            <!-- Slides -->
            <div class="mySlides fade">
                <img src="/images/image5.jpg" class="w-full h-96 object-cover rounded-lg shadow-md">
            </div>

            <div class="mySlides fade">
                <img src="/images/image6.jpg" class="w-full h-96 object-cover rounded-lg shadow-md">
            </div>

            <div class="mySlides fade">
                <img src="/images/image2.jpg" class="w-full h-96 object-cover rounded-lg shadow-md">
            </div>

            <div class="mySlides fade">
                <img src="/images/image3.jpg" class="w-full h-96 object-cover rounded-lg shadow-md">
            </div>

            <div class="mySlides fade">
                <img src="/images/image4.jpg" class="w-full h-96 object-cover rounded-lg shadow-md">
            </div>
        </div>
    </div>
</section>

<style>
    /* Hide all slides by default */
    .mySlides {display: none;}

    /* Fading animation */
    .fade {
        animation: fadeEffect 2s;
    }

    @keyframes fadeEffect {
        from {opacity: .4}
        to {opacity: 1}
    }
</style>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex-1].style.display = "block";  
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }
</script>
@endsection
