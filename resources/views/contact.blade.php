@extends('layout')

@section('content')
<section class="contact py-20 bg-gradient-to-b from-purple-50 to-white relative overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-200 rounded-full blur-3xl opacity-30 -z-10"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-200 rounded-full blur-3xl opacity-30 -z-10"></div>

    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Contact Form -->
            <article class="bg-white p-10 md:p-12 shadow-2xl rounded-3xl border border-gray-200 transform transition-all duration-500 hover:scale-[1.02]">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-8 text-gray-800 tracking-tight animate-fadeIn text-center lg:text-left">
                    Contact Sheila
                </h2>

                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 text-green-800 rounded-lg border border-green-200 animate-fadeIn shadow-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                               aria-label="Full Name"
                               class="w-full px-6 py-3 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 hover:shadow-lg transition duration-300">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Your Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required
                               aria-label="Email Address"
                               class="w-full px-6 py-3 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 hover:shadow-lg transition duration-300">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Your Message</label>
                        <textarea name="message" id="message" required
                                  class="w-full px-6 py-4 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 resize-none h-40 hover:shadow-lg">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-3 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl">
                        Send Message
                    </button>
                </form>
            </article>

            <!-- Contact Info Card -->
            <aside class="bg-gradient-to-br from-purple-600 to-indigo-700 p-10 rounded-3xl shadow-2xl text-white flex flex-col justify-center space-y-8">
                <h3 class="text-2xl font-bold">Get in Touch</h3>
                <p class="text-purple-100">Prefer direct contact? Reach out to Sheila anytime through WhatsApp or Email.</p>

                <div class="flex flex-col gap-4">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/256773486911" target="_blank" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 transition px-5 py-3 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16.08 3H7.92C4.86 3 2.25 5.61 2.25 8.67v6.66C2.25 18.39 4.86 21 7.92 21h8.16c3.06 0 5.67-2.61 5.67-5.67V8.67C21.75 5.61 19.14 3 16.08 3z"/>
                        </svg>
                        <span class="text-lg">+256 773 486 911</span>
                    </a>

                    <!-- Email -->
                    <a href="mailto:sheilamuwanga75@gmail.com" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 transition px-5 py-3 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 1.99 2H20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <span class="text-lg">sheilamuwanga75@gmail.com</span>
                    </a>
                </div>
            </aside>

        </div>
    </div>
</section>

<style>
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
.animate-fadeIn { animation: fadeIn 0.8s ease-out forwards; }
</style>
@endsection
