<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sheila Muwanga MC')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
</head>

<body class="font-poppins text-gray-800">

    <!-- Navbar -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6 sm:px-8 lg:px-12">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-purple-700">Sheila Muwanga</a>

            <!-- Desktop Menu -->
            <nav>
                <ul class="hidden md:flex gap-6 font-medium">
                    <li><a href="{{ url('/') }}" class="text-purple-700 font-semibold hover:text-purple-900 transition">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="text-purple-700 font-semibold hover:text-purple-900 transition">About</a></li>
                    <li><a href="{{ url('/services') }}" class="text-purple-700 font-semibold hover:text-purple-900 transition">Services</a></li>
                    <li><a href="{{ url('/gallery') }}" class="text-purple-700 font-semibold hover:text-purple-900 transition">Gallery</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-purple-700 font-semibold hover:text-purple-900 transition">Contact</a></li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden focus:outline-none text-purple-700">
                    <i class="fas fa-bars fa-2x"></i>
                </button>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
            <ul class="flex flex-col gap-4 p-6 font-medium">
                <li><a href="{{ url('/') }}" class="text-purple-700 font-semibold py-3 px-4 rounded-lg hover:bg-purple-100 transition">Home</a></li>
                <li><a href="{{ url('/about') }}" class="text-purple-700 font-semibold py-3 px-4 rounded-lg hover:bg-purple-100 transition">About</a></li>
                <li><a href="{{ url('/services') }}" class="text-purple-700 font-semibold py-3 px-4 rounded-lg hover:bg-purple-100 transition">Services</a></li>
                <li><a href="{{ url('/gallery') }}" class="text-purple-700 font-semibold py-3 px-4 rounded-lg hover:bg-purple-100 transition">Gallery</a></li>
                <li><a href="{{ url('/contact') }}" class="text-purple-700 font-semibold py-3 px-4 rounded-lg hover:bg-purple-100 transition">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- Page Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-purple-700 text-white py-8 mt-12">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4 md:gap-0 px-6 sm:px-8 lg:px-12">
            <p class="text-center md:text-left">&copy; {{ date('Y') }} Sheila Muwanga. All Rights Reserved.</p>

            <div class="flex gap-6">
                <!-- WhatsApp -->
                <a href="https://wa.me/256773486911"
                    target="_blank"
                    aria-label="WhatsApp"
                    class="hover:text-green-400 transition text-2xl">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <!-- Email (works with ANY mail app) -->
                <a href="mailto:sheilamuwanga75@gmail.com?subject=MC%20Inquiry%20from%20Website"
                    aria-label="Email"
                    title="Email Sheila"
                    class="hover:text-yellow-300 transition text-2xl">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>