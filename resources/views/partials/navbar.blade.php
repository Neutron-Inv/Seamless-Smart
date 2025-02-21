<header id="navbar" class="fixed top-0 max-w-[100vw] left-0 w-full z-50 transition-all duration-300 text-white bg-transparent">
    <div class="w-full max-w-[100vw] mx-auto flex items-center justify-between py-4 px-4 md:px-6">
        <!-- Logo -->
        <a href="{{route('home')}}">
            <img id="logo" src="{{ asset('/storage/images/logo-light.png') }}" alt="Logo" class="h-16 md:h-20">
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex space-x-6 w-full justify-end">
            <a href="{{route('home')}}" class="font-medium hover:text-[#93bc32] transition">Home</a>
            <a href="#about" class="font-medium hover:text-[#93bc32] transition">About</a>
            <a href="#services" class="font-medium hover:text-[#93bc32] transition">Services</a>
            <a href="#faq" class="font-medium hover:text-[#93bc32] transition">FAQ</a>
            <a href="#contact" class="font-medium hover:text-[#93bc32] transition">Contact</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden focus:outline-none">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Mobile Nav Menu -->
    <nav id="mobile-menu" class="absolute top-full left-0 w-full bg-white shadow-md text-black hidden flex-col items-center space-y-4 py-4 transition-all duration-300">
        <a href="#home" class="block font-medium hover:text-[#93bc32] transition">Home</a>
        <a href="#services" class="block font-medium hover:text-[#93bc32] transition">Services</a>
        <a href="#about" class="block font-medium hover:text-[#93bc32] transition">About</a>
        <a href="#contact" class="block font-medium hover:text-[#93bc32] transition">Contact</a>
    </nav>
</header>

<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const logo = document.getElementById("logo");

    window.addEventListener("scroll", function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 50) {
            navbar.classList.add("bg-white", "shadow-md", "text-black");
            navbar.classList.remove("bg-transparent", "text-white");
            logo.src = "{{ asset('/storage/images/logo.png') }}"; // Dark mode logo
        } else {
            navbar.classList.add("bg-transparent", "text-white");
            navbar.classList.remove("bg-white", "shadow-md", "text-black");
            logo.src = "{{ asset('/storage/images/logo-light.png') }}"; // Light mode logo
        }

        if (scrollTop < lastScrollTop) {
            navbar.style.transform = "translateY(0)";
        } else {
            navbar.style.transform = "translateY(-100%)";
        }

        lastScrollTop = scrollTop;
    });

    // Mobile Menu Toggle
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        mobileMenu.classList.toggle("flex");
    });
</script>

<style>
    #navbar {
        transform: translateY(0);
        transition: transform 0.3s ease-in-out;
    }
</style>
