<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN (optional) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/mic.png') }}" type="image/png">

    <title>Sheila Muwanga MC</title>
</head>

<body class="font-poppins text-gray-800">

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6 lg:px-12">
            <div class="logo text-2xl font-bold text-purple-700">Sheila Muwanga</div>
            <nav>
                <ul class="flex gap-6 text-gray-700 font-medium">
                    <li><a href="{{ url('/') }}" class="hover:text-purple-600 transition">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-purple-600 transition">About</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:text-purple-600 transition">Services</a></li>
                    <li><a href="{{ url('/gallery') }}" class="hover:text-purple-600 transition">Gallery</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-purple-600 transition">Contact</a></li>
                    <li><a href="{{ url('/book') }}" class="hover:text-purple-600 transition">Booking</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-purple-700 text-white py-8 mt-12">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-6 lg:px-12">
            <p class="text-center md:text-left">&copy; {{ date('Y') }} Sheila Muwanga. All Rights Reserved.</p>
            <div class="flex gap-6 mt-4 md:mt-0">
                <a href="https://wa.me/256773486911" target="_blank" aria-label="WhatsApp" class="hover:text-green-400 transition">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a href="mailto:sheilamuwanga75@gmail.com" aria-label="Email" class="hover:text-yellow-300 transition">
                    <i class="fas fa-envelope fa-2x"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Optional: Smooth scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>