@extends('layout')

@section('content')
<section class="gallery py-16 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <img src="/images/image5.jpg" alt="Image 5
            " 
                 class="w-full h-40 object-cover rounded-lg shadow-md hover:scale-105 transition">
            <img src="/images/image6.jpg" alt="Image 6" 
                 class="w-full h-40 object-cover rounded-lg shadow-md hover:scale-105 transition">
            <img src="/images/image2.jpg" alt="Image 2" 
                 class="w-full h-40 object-cover rounded-lg shadow-md hover:scale-105 transition">
            <img src="/images/image3.jpg" alt="Image 3" 
                 class="w-full h-40 object-cover rounded-lg shadow-md hover:scale-105 transition">
            <img src="/images/image4.jpg" alt="Image 4" 
                 class="w-full h-40 object-cover rounded-lg shadow-md hover:scale-105 transition">
        </div>
    </div>
</section>
@endsection
