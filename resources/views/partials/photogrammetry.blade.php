<section id="3d-visualization" class="w-full py-16 px-6 md:px-16 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">

        <!-- Image Section -->
        <div class="relative flex-col md:p-14 space-y-8">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'1.webp') }}" class="rounded-lg shadow-lg w-full">
            
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'2.webp') }}" 
                 class="w-full rounded-lg shadow-lg hidden md:block border-4 border-white">
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800">
                Immersive 3D Visualization for Enhanced Decision-Making
            </h2>
            <p class="text-gray-600 mt-4">
                3D stereoscopic visualization provides realistic and immersive representations of data, 
                allowing businesses, architects, and researchers to analyze and interpret spatial 
                information effectively.
            </p>

            <p class="text-gray-600 mt-4">
                We specialize in creating detailed, high-resolution 3D models that simulate 
                real-world environments, enhancing applications such as engineering simulations, 
                virtual city planning, and environmental monitoring.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Real-time 3D data representation for enhanced analysis</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">High-fidelity stereoscopic models for simulations</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Immersive virtual reality (VR) integration</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Seamless GIS and CAD software compatibility</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Enhanced visual storytelling for presentations</span>
                </li>
            </ul>

            <button class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Explore 3D Solutions
            </button>
        </div>

    </div>
</section>
