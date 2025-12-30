@extends('layout')

@section('content')
<section class="services py-20 bg-gradient-to-b from-purple-50 to-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-12 text-gray-800 tracking-tight">
            Our Services
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <!-- Service Card: Weddings -->
            <div class="service-card opacity-0 p-8 bg-white rounded-2xl shadow-lg transform transition duration-700 hover:scale-105 hover:shadow-2xl">
                <div class="mb-4 text-purple-600 text-5xl">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-semibold text-gray-800">Weddings</h3>
            </div>

            <!-- Service Card: Corporate Events -->
            <div class="service-card opacity-0 p-8 bg-white rounded-2xl shadow-lg transform transition duration-700 hover:scale-105 hover:shadow-2xl">
                <div class="mb-4 text-purple-600 text-5xl">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-semibold text-gray-800">Corporate Events</h3>
            </div>

            <!-- Service Card: Parties -->
            <div class="service-card opacity-0 p-8 bg-white rounded-2xl shadow-lg transform transition duration-700 hover:scale-105 hover:shadow-2xl">
                <div class="mb-4 text-purple-600 text-5xl">
                    <i class="fas fa-glass-cheers"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-semibold text-gray-800">Parties</h3>
            </div>

            <!-- Service Card: Conferences -->
            <div class="service-card opacity-0 p-8 bg-white rounded-2xl shadow-lg transform transition duration-700 hover:scale-105 hover:shadow-2xl">
                <div class="mb-4 text-purple-600 text-5xl">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="text-xl md:text-2xl font-semibold text-gray-800">Conferences</h3>
            </div>
        </div>
    </div>
</section>

<!-- Scroll Fade-In Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.service-card');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.style.transition = 'all 0.7s ease-out';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        cards.forEach(card => {
            card.classList.add('translate-y-8'); // initial offset
            observer.observe(card);
        });
    });
</script>
@endsection