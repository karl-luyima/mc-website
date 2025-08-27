@extends('layout')

@section('content')
<section class="contact py-20 bg-gradient-to-b from-purple-50 to-white relative overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-200 rounded-full blur-3xl opacity-30 -z-10"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-200 rounded-full blur-3xl opacity-30 -z-10"></div>

    <div class="container mx-auto px-6 lg:px-12 flex justify-center">
        <!-- Login Form -->
        <div class="bg-white p-10 md:p-12 shadow-2xl rounded-3xl border border-gray-200 transform transition-all duration-500 hover:scale-[1.02] w-full max-w-md">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-8 text-gray-800 tracking-tight animate-fadeIn text-center">
                MC/Admin Login
            </h2>

            @if(session('error'))
                <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-lg border border-red-200 animate-fadeIn shadow-sm">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">

                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" id="email" placeholder="admin@example.com" required autofocus
                           class="w-full px-6 py-3 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 hover:shadow-lg">
                </div>

                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" id="password" placeholder="********" required
                           class="w-full px-6 py-3 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 hover:shadow-lg">
                </div>

                <button type="submit"
                        class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-3 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl">
                    Login
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Tailwind Animations -->
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn { animation: fadeIn 0.8s ease-out forwards; }
</style>
@endsection
