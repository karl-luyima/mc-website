@extends('layout')

@section('content')
<section class="contact py-20 bg-gradient-to-b from-purple-50 to-white relative overflow-hidden">
    <!-- Background Accent -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-200 rounded-full blur-3xl opacity-30 -z-10"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-indigo-200 rounded-full blur-3xl opacity-30 -z-10"></div>

    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <!-- Contact Form -->
            <div class="bg-white p-10 md:p-12 shadow-2xl rounded-3xl border border-gray-200 transform transition-all duration-500 hover:scale-[1.02]">
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

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                        <input type="text" name="name" id="name" placeholder="John Doe" required
                               class="w-full px-6 py-3 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 hover:shadow-lg">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Your Email</label>
                        <input type="email" name="email" id="email" placeholder="john@example.com" required
                               class="w-full px-6 py-3 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 hover:shadow-lg">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Your Message</label>
                        <textarea name="message" id="message" placeholder="Write your message here..." required
                                  class="w-full px-6 py-4 border border-gray-300 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-purple-500 transition duration-300 resize-none h-40 hover:shadow-lg"></textarea>
                    </div>

                    <!-- Button -->
                    <button type="submit"
                            class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold py-3 rounded-xl shadow-lg transition transform hover:-translate-y-1 hover:shadow-2xl">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info Card -->
            <div class="bg-gradient-to-br from-purple-600 to-indigo-700 p-10 rounded-3xl shadow-2xl text-white flex flex-col justify-center space-y-8">
                <h3 class="text-2xl font-bold">Get in Touch</h3>
                <p class="text-purple-100">Prefer direct contact? Reach out to Sheila anytime through WhatsApp or Email.</p>

                <div class="space-y-4">
                    <a href="https://wa.me/256773486911" target="_blank" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 transition px-5 py-3 rounded-xl">
                        <i class="fab fa-whatsapp text-2xl text-green-400"></i>
                        <span class="text-lg">+256 773 486 911</span>
                    </a>

                    <a href="mailto:smn_81@yahoo.com" class="flex items-center gap-3 bg-white/10 hover:bg-white/20 transition px-5 py-3 rounded-xl">
                        <i class="fas fa-envelope text-2xl text-yellow-300"></i>
                        <span class="text-lg">smn_81@yahoo.com</span>
                    </a>
                </div>
            </div>
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
