<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Sheila Muwanga') }}</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/mic.png') }}" type="image/png">
</head>
<body class="font-poppins bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo / Brand -->
            <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800 hover:text-indigo-600 transition">
                Sheila Muwanga
            </a>

            <!-- Menu Items (Desktop) -->
            <ul class="hidden md:flex space-x-8 text-lg font-medium">
                <li>
                    <a href="{{ route('home') }}" 
                       class="{{ request()->routeIs('home') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">
                       Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" 
                       class="{{ request()->routeIs('about') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">
                       About
                    </a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}" 
                       class="{{ request()->routeIs('gallery') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">
                       Gallery
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" 
                       class="{{ request()->routeIs('contact') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">
                       Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('booking.form') }}" 
                       class="{{ request()->routeIs('booking.form') ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' }}">
                       Booking
                    </a>
                </li>
            </ul>

            <!-- Auth Buttons (Desktop) -->
            <div class="hidden md:flex space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Login</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg hover:bg-indigo-50 transition">Register</a>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">Logout</button>
                    </form>
                @endguest
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden focus:outline-none text-gray-600 hover:text-indigo-600" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white shadow-md">
            <ul class="flex flex-col space-y-2 p-4">
                <li><a href="{{ route('home') }}" class="block px-4 py-2 {{ request()->routeIs('home') ? 'text-indigo-600 font-semibold' : 'text-gray-700' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="block px-4 py-2 {{ request()->routeIs('about') ? 'text-indigo-600 font-semibold' : 'text-gray-700' }}">About</a></li>
                <li><a href="{{ route('gallery') }}" class="block px-4 py-2 {{ request()->routeIs('gallery') ? 'text-indigo-600 font-semibold' : 'text-gray-700' }}">Gallery</a></li>
                <li><a href="{{ route('contact') }}" class="block px-4 py-2 {{ request()->routeIs('contact') ? 'text-indigo-600 font-semibold' : 'text-gray-700' }}">Contact</a></li>
                <li><a href="{{ route('booking.form') }}" class="block px-4 py-2 {{ request()->routeIs('booking.form') ? 'text-indigo-600 font-semibold' : 'text-gray-700' }}">Booking</a></li>

                @guest
                    <li><a href="{{ route('login') }}" class="block px-4 py-2 bg-indigo-600 text-white rounded-lg text-center">Login</a></li>
                    <li><a href="{{ route('register') }}" class="block px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg text-center">Register</a></li>
                @else
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full px-4 py-2 bg-red-600 text-white rounded-lg text-center">Logout</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="content">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <div class="flex justify-center space-x-4 mb-2">
                <a href="https://wa.me/256773486911" target="_blank" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a href="mailto:sheilamuwanga75@gmail.com" aria-label="Email">
                    <i class="fas fa-envelope fa-2x"></i>
                </a>
            </div>
            <p>&copy; {{ date('Y') }} Sheila Muwanga. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
