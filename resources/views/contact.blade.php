@extends('layout')
@section('title', 'Contact | Sheila Muwanga MC')
@section('content')
<section class="contact py-16 md:py-20 bg-gradient-to-b from-purple-50 to-white relative overflow-hidden">
    <!-- Background Accents -->
    <div class="absolute top-0 left-0 w-48 sm:w-64 h-48 sm:h-64 bg-purple-200 rounded-full blur-3xl opacity-30 -z-10"></div>
    <div class="absolute bottom-0 right-0 w-56 sm:w-72 h-56 sm:h-72 bg-indigo-200 rounded-full blur-3xl opacity-30 -z-10"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-start">

            <!-- Contact Info Card -->
            <aside class="bg-gradient-to-br from-purple-600 to-indigo-700 p-6 sm:p-8 md:p-10 rounded-3xl shadow-2xl text-white flex flex-col justify-center space-y-6 sm:space-y-8">
                <h3 class="text-2xl sm:text-3xl font-bold">Get in Touch</h3>
                <p class="text-purple-100 text-base sm:text-lg">Prefer direct contact? Reach out to Sheila anytime through WhatsApp or Email.</p>

                <div class="flex flex-col gap-4">

                    <!-- WhatsApp -->
                    <a href="https://wa.me/256773486911" target="_blank"
                        class="flex items-center gap-3 px-4 sm:px-5 py-3 rounded-xl transition bg-white/10 hover:bg-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16.08 3H7.92C4.86 3 2.25 5.61 2.25 8.67v6.66C2.25 18.39 4.86 21 7.92 21h8.16c3.06 0 5.67-2.61 5.67-5.67V8.67C21.75 5.61 19.14 3 16.08 3z" />
                        </svg>
                        <span class="text-white text-base sm:text-lg break-words">+256 773 486 911</span>
                    </a>

                    <!-- Email -->
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=sheilamuwanga75@gmail.com&su=Inquiry%20from%20Website"
                        target="_blank"
                        class="flex items-center gap-3 px-4 sm:px-5 py-3 rounded-xl transition bg-white/10 hover:bg-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 1.99 2H20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <span class="text-white text-sm sm:text-base whitespace-nowrap">sheilamuwanga75@gmail.com</span>
                    </a>

                </div>
            </aside>

        </div>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 0.8s ease-out forwards;
    }
</style>
@endsection