<div class="bg-cover bg-center px-5 sm:px-10 py-8 space-y-10 font-raleway"
     data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"
     style="background-image: url('{{ asset('/storage/images/footerbg.png') }}');">
    
    <!-- Logo and Tagline -->
    <div class="flex flex-col sm:flex-row items-center sm:justify-between text-center sm:text-left space-y-4 sm:space-y-0">
        <img src="{{ asset('/storage/images/logo.png') }}" class="h-24 object-contain">
        <p class="font-thin text-sm text-gray-500">we deliver accuracy you can trust...</p>
    </div>

    <!-- Footer Content -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center sm:text-left">
        
        <!-- Office Address -->
        <div>
            <p class="font-bold text-md py-2">Our Office</p>
            <ul class="font-medium text-sm text-gray-400 leading-6 space-y-2"> 
                <li>Huson House, Emmanuel Emenike Road, By Court of Appeal, Opposite Crown Plaza Hotel, Area A, New Owerri, Imo State.</li>
                <li>
                    <a href="tel:+234860936649">+234860936649</a>, 
                    <a href="tel:+2348147182326">+2348147182326</a>
                </li>
                <li>
                    <a href="mailto:seamlesssmartconsult@gmail.com">seamlesssmartconsult@gmail.com</a>
                </li>
            </ul>
        </div>

        <!-- Quick Links -->
        <div>
            <p class="font-bold text-md py-2">Quick Links</p>
            <ul class="font-medium text-sm text-gray-400 leading-6 space-y-2"> 
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <p class="font-bold text-md py-2">Services</p>
            <ul class="font-medium text-sm text-gray-400 leading-6 space-y-2"> 
                <li>Land & Aerial Surveying</li>
                <li>GIS & Mapping Solutions</li>
                <li>Bathymetry Solutions</li>
                <li>Remote Sensing & Drone Mapping</li>
                <li>Geospatial Data Analysis</li>
            </ul>
        </div>

        <!-- Social Media -->
        <div>
            <p class="font-bold text-md py-2">Stay Connected</p>
            <div class="flex justify-center sm:justify-start space-x-4 py-2">
                <i class="fa-brands fa-facebook-f text-gray-700 text-2xl bg-green-800 bg-clip-text text-transparent"></i>
                <i class="fa-brands fa-linkedin text-gray-700 text-3xl bg-green-800 bg-clip-text text-transparent"></i>
                <i class="fa-brands fa-instagram text-gray-700 text-3xl bg-green-800 bg-clip-text text-transparent"></i>
            </div>
            <p class="text-sm text-gray-400">Follow us for updates and insights.</p>
        </div>

    </div>

    <!-- Divider -->
    <hr class="border-gray-300">

    <!-- Copyright & Credits -->
    <div class="flex flex-col sm:flex-row justify-between text-center sm:text-left text-sm text-gray-400">
        <span>Copyright &copy; Seamless Smart {{ date('Y') }}</span>
        <span>Developed by Virtual Horizons</span>
    </div>

</div>
