<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheila Muwanga</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/mic.png') }}" type="image/png">
</head>

<body>
    
    <!-- Header -->
    <header>
        <div class="logo">Sheila Muwanga</div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="{{ url('/book') }}">Booking</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="socials">
            <a href="https://wa.me/256773486911" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
            <a href="smn_81@yahoo.com"><i class="fas fa-envelope fa-2x"></i></a>
        </div>
        <p>&copy; {{ date('Y') }} Sheila Muwanga. All Rights Reserved.</p>
    </footer>

</body>
</html>
