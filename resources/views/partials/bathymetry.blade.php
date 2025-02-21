<section id="bathymetry-details" class="w-full py-16 px-6 md:px-16 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">

        <!-- Image Section -->
        <div class="relative flex-col md:p-14 space-y-8">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'1.webp') }}" class="rounded-lg shadow-lg w-full">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'2.webp') }}" class="w-full rounded-lg shadow-lg hidden md:block border-4 border-white">
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800">
                Bathymetric Surveying for Water Bodies
            </h2>
            <p class="text-gray-600 mt-4">
                Bathymetric surveys provide essential data on underwater topography, depth variations, and sediment distribution. 
                Our hydrographic surveyors use sonar and GPS technology to create detailed maps of rivers, lakes, and coastal waters.
            </p>

            <p class="text-gray-600 mt-4">
                Our data-driven approach ensures accurate seabed mapping, supporting environmental studies, offshore infrastructure 
                planning, and navigational safety.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Precise depth measurement and underwater mapping</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Detection of underwater hazards and obstructions</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Hydrographic data for port and harbor development</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Monitoring of erosion and sediment transport</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Support for coastal and offshore energy projects</span></li>
            </ul>

            <button class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Request a Survey
            </button>
        </div>

    </div>
</section>
