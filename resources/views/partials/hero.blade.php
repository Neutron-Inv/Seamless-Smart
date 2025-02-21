<section id="home" class="hero relative min-h-screen md:h-[160vh] w-full flex flex-col justify-center items-center text-center px-6 py-20 overflow-hidden">

    <!-- Video Background -->
    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-[-1]">
        <source src="{{ asset('/storage/images/hero-video.mp4') }}" type="video/mp4">
        <!-- Fallback Image -->
        <img src="{{ asset('/storage/images/bg.webp') }}" class="absolute inset-0 w-full h-full object-cover" alt="Fallback Background">
    </video>

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-60 z-[-1]"></div>

    <h1 class="text-3xl md:text-[45px] font-raleway font-bold text-white leading-tight">
        Precision. Innovation. Excellence in <br/>
        <span class="bg-gradient-to-r from-[#bdff13] via-90% to-[#e4d814] to-90% bg-clip-text text-transparent">
            Land Surveying.
        </span>
    </h1>

    <p class="text-white text-sm md:text-lg mt-4">
        Delivering cutting-edge solutions in surveying services.
    </p>

    <!-- Image Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 p-6 w-full max-w-5xl">
        <div class="hidden md:block"></div>    
        <div class="flex justify-center">
            <img src="{{ asset('/storage/images/hero1.webp') }}" class="w-2/3 md:w-full max-w-[250px]">
        </div>    
        <div class="hidden md:flex justify-center">
            <img src="{{ asset('/storage/images/hero2.webp') }}" class="w-2/3 md:w-full max-w-[250px]">
        </div>    
        <div class="hidden md:block"></div>    
    </div>

    <!-- CTA Section -->
    <div class="text-center flex flex-col items-center space-y-2">
        <p class="text-white font-raleway text-sm md:text-base">Get a Free Consultation</p>
        <button @click="open = true" class="bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
            Contact Us
        </button>
    </div>

</section>
