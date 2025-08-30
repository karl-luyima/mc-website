<nav class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo / Brand -->
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-800 hover:text-indigo-600 transition">
            Sheila Muwanga
        </a>

        <!-- Menu Items -->
        <ul class="hidden md:flex space-x-8 text-lg font-medium">
            <li>
                <a href="{{ route('home') }}" 
                   class="nav-link {{ request()->routeIs('home') ? 'text-indigo-600 border-b-2 border-indigo-600' : '' }}">
                   Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" 
                   class="nav-link {{ request()->routeIs('about') ? 'text-indigo-600 border-b-2 border-indigo-600' : '' }}">
                   About
                </a>
            </li>
            <li>
                <a href="{{ route('gallery') }}" 
                   class="nav-link {{ request()->routeIs('gallery') ? 'text-indigo-600 border-b-2 border-indigo-600' : '' }}">
                   Gallery
                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" 
                   class="nav-link {{ request()->routeIs('contact') ? 'text-indigo-600 border-b-2 border-indigo-600' : '' }}">
                   Contact
                </a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <button class="md:hidden focus:outline-none text-gray-600 hover:text-indigo-600">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </div>
</nav>
