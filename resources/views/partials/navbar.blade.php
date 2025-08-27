<header>
    <div class="logo">Sheila Muwanga</div>

    <nav>
        <ul>
            <!-- Public links -->
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('gallery') }}">Gallery</a></li>
            <li><a href="{{ route('booking.form') }}">Booking</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>

            <!-- MC/Admin links -->
            @auth
                <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.bookings') }}">Bookings</a></li>
                <li><a href="{{ route('admin.messages') }}">Messages</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" style="background:none;border:none;color:#fff;cursor:pointer;">
                            Logout
                        </button>
                    </form>
                </li>
            @endauth
        </ul>
    </nav>
</header>
