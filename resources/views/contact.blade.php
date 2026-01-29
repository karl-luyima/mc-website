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
                <p class="text-purple-100 text-base sm:text-lg">
                    Prefer direct contact? Reach out to Sheila anytime through WhatsApp or Email.
                </p>

                <div class="flex flex-col gap-4">

                    <!-- WhatsApp -->
                    <a href="https://wa.me/256773486911" target="_blank"
                        class="flex items-center gap-3 px-4 sm:px-5 py-3 rounded-xl transition bg-white/10 hover:bg-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="h-6 w-6 text-green-400 flex-shrink-0">
                            <path d="M20.52 3.48A11.91 11.91 0 0012.01 0C5.39 0 .01 5.38.01 12c0 2.12.55 4.19 1.6 6.01L0 24l6.17-1.62A11.94 11.94 0 0012.01 24C18.63 24 24 18.62 24 12c0-3.19-1.24-6.19-3.48-8.52zM12.01 21.82c-1.82 0-3.61-.49-5.18-1.41l-.37-.22-3.66.96.98-3.56-.24-.37a9.8 9.8 0 01-1.5-5.22c0-5.41 4.4-9.81 9.82-9.81 2.62 0 5.08 1.02 6.93 2.87a9.75 9.75 0 012.88 6.94c0 5.41-4.41 9.82-9.82 9.82zm5.39-7.36c-.29-.15-1.72-.85-1.99-.95-.27-.1-.47-.15-.66.15-.19.29-.76.95-.93 1.15-.17.19-.34.22-.63.07-.29-.15-1.22-.45-2.33-1.44-.86-.77-1.44-1.72-1.61-2.01-.17-.29-.02-.45.13-.6.13-.13.29-.34.44-.51.15-.17.19-.29.29-.48.1-.19.05-.36-.02-.51-.07-.15-.66-1.59-.9-2.18-.24-.58-.48-.5-.66-.51h-.56c-.19 0-.51.07-.78.36-.27.29-1.02 1-1.02 2.44 0 1.44 1.05 2.83 1.2 3.02.15.19 2.07 3.16 5.02 4.43.7.3 1.24.48 1.66.61.7.22 1.34.19 1.84.12.56-.08 1.72-.7 1.96-1.37.24-.66.24-1.22.17-1.37-.07-.15-.27-.24-.56-.39z" />
                        </svg>
                        <span class="text-white text-base sm:text-lg break-words">
                            +256 773 486 911
                        </span>
                    </a>

                    <!-- Email (Universal) -->
                    <a href="mailto:sheilamuwanga75@gmail.com?subject=Inquiry%20from%20Website"
                        onclick="event.preventDefault();
                                window.open('https://mail.google.com/mail/?view=cm&fs=1&to=sheilamuwanga75@gmail.com&su=Inquiry%20from%20Website','_blank');"
                        class="flex items-center gap-3 px-4 sm:px-5 py-3 rounded-xl transition bg-white/10 hover:bg-white/20">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 text-yellow-300 flex-shrink-0"
                            fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 1.99 2H20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        <span class="text-white text-sm sm:text-base break-all">
                            sheilamuwanga75@gmail.com
                        </span>
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