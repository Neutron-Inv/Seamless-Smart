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
    <style>
        .cascade-mask {
        display: inline-block;
        overflow: hidden; /* Hide anything outside the container */
        line-height: 1.2; /* Adjust spacing */
        }

        .cascade-mask span {
        display: inline-block;
        transform: translateY(100%); /* Start below */
        opacity: 0; /* Start invisible */
        transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }

        .cascade-mask p,
        .cascade-mask h3,
        .cascade-mask img{
        /* display: inline-block; */
        transform: translateY(100%); /* Start below */
        opacity: 0; /* Start invisible */
        transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        }

    </style>
</head>
<body>
    <div id="app" class="flex min-h-screen">
        @include('partials.navbar')
        <div class="w-[100vw]">
            @yield('content') {{-- Page-specific content --}}
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        console.log("AOS Loaded!");
        AOS.init();

    });
    </script>
</body>
</html>
