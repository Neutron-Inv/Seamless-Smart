<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="max-w-[100vw]" x-data="{ open: false }">
    <div id="app" class="flex min-h-screen max-w-[100vw]">
        @include('partials.navbar')
        <div class="max-w-[100vw]">
            @if(session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" 
                    x-show="show" 
                    class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg transition-opacity duration-500"
                    x-transition:enter="opacity-0 transform translate-y-2"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    x-transition:leave="opacity-100"
                    x-transition:leave-end="opacity-0">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content') {{-- Page-specific content --}}
        </div>
    </div>


<!-- Contact Us Modal -->
<div x-show="open" 
         x-transition:enter="transition-opacity duration-300" 
         x-transition:enter-start="opacity-0" 
         x-transition:leave="transition-opacity duration-300" 
         x-transition:leave-end="opacity-0" 
         class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" 
         x-cloak>
        
        <!-- Modal Box -->
        <div x-show="open" 
             x-transition:enter="transition-transform duration-300 ease-out" 
             x-transition:enter-start="scale-75 opacity-0" 
             x-transition:leave="transition-transform duration-300 ease-in" 
             x-transition:leave-end="scale-75 opacity-0"
             class="bg-white rounded-lg p-6 w-11/12 sm:w-1/2 lg:w-1/3 shadow-lg relative">
            
            <!-- Close Button -->
            <button @click="open = false" class="absolute top-2 right-3 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            
            <!-- Modal Content -->
            <h2 class="text-lg font-bold mb-4">Get in Touch</h2>
            <p class="text-sm text-gray-600 mb-4">Fill in the form below, and we’ll get back to you shortly.</p>
            
            <!-- Contact Form -->
            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name" class="w-full border p-2 rounded mb-3" required>
                <input type="email" name="email" placeholder="Your Email" class="w-full border p-2 rounded mb-3" required>
                <textarea name="message" placeholder="Your Message" class="w-full border p-2 rounded mb-3" required></textarea>
                <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Send Message</button>
            </form>
        </div>
    </div>
    
    <!-- Alpine.js Cloak Fix -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        console.log("AOS Loaded!");
        AOS.init();

    });
    </script>
</body>
</html>
