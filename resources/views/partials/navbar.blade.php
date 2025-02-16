<header id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 text-white">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <a href="#">
            <img src="{{asset('/storage/images/logo.png')}}" alt="Logo" class="h-20">
        </a>

        <!-- Nav Links -->
        <nav class="hidden md:flex space-x-6">
            <a href="#home" class="font-medium hover:text-[#93bc32] transition">Home</a>
            <a href="#services" class="font-medium hover:text-[#93bc32] transition">Services</a>
            <a href="#about" class="font-medium hover:text-[#93bc32] transition">About</a>
            <a href="#contact" class="font-medium hover:text-[#93bc32] transition">Contact</a>
        </nav>
    </div>
</header>

<script>
    let lastScrollTop = 0;
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > 50) {
            navbar.classList.add("bg-white", "shadow-md", "text-black");
            navbar.classList.remove("bg-transparent", "text-white");
        } else {
            navbar.classList.add("bg-transparent", "text-white");
            navbar.classList.remove("bg-white", "shadow-md", "text-black");
        }

        if (scrollTop < lastScrollTop) {
            navbar.style.transform = "translateY(0)";
        } else {
            navbar.style.transform = "translateY(-100%)";
        }

        lastScrollTop = scrollTop;
    });
</script>

<style>
    #navbar {
        transform: translateY(0);
    }
</style>
