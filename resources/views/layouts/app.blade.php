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
<body>
    <div id="app" class="flex min-h-screen max-w-screen">
        @include('partials.navbar')
        <div class="w-[100vw]">
            @yield('content') {{-- Page-specific content --}}
        </div>
    </div>


<!-- Contact Us Modal (Place this at the end of <body>) -->
    <div x-data="{ open: false }">
        <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" x-cloak>
            <div class="bg-white rounded-lg p-6 w-11/12 sm:w-1/2 lg:w-1/3 shadow-lg relative">
                <!-- Close Button -->
                <button @click="open = false" class="absolute top-2 right-3 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                
                <!-- Modal Content -->
                <h2 class="text-lg font-bold mb-4">Get in Touch</h2>
                <p class="text-sm text-gray-600 mb-4">Fill in the form below, and we’ll get back to you shortly.</p>
                
                <!-- Contact Form -->
                <form>
                    <input type="text" placeholder="Your Name" class="w-full border p-2 rounded mb-3">
                    <input type="email" placeholder="Your Email" class="w-full border p-2 rounded mb-3">
                    <textarea placeholder="Your Message" class="w-full border p-2 rounded mb-3"></textarea>
                    <button type="submit" class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        console.log("AOS Loaded!");
        AOS.init();

    });
    </script>
</body>
</html>
