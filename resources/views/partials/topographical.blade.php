<section id="topographical-details" class="w-full py-16 px-6 md:px-16 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">

        <!-- Image Section -->
        <div class="relative flex-col md:p-14 space-y-8">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'1.webp') }}" class="rounded-lg shadow-lg w-full">
            
            <!-- Optional Second Image -->
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'2.webp') }}" 
                 class="w-full rounded-lg shadow-lg hidden md:block border-4 border-white">
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800">
                Precision Topographical Surveying Solutions
            </h2>
            <p class="text-gray-600 mt-4">
                Topographical surveying is essential for capturing the natural and man-made features of a landscape, 
                providing critical data for engineering, construction, and land development projects. Using advanced 
                surveying instruments and GIS technology, we deliver highly accurate terrain models and elevation mapping.
            </p>

            <p class="text-gray-600 mt-4">
                Our topographical surveys support infrastructure planning, site feasibility studies, and environmental impact assessments. 
                We provide comprehensive terrain analysis that aids architects, engineers, and urban planners in making informed decisions 
                for project execution.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Detailed mapping of land contours, elevations, and natural features</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Identification of existing structures, utilities, and road networks</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">High-precision elevation models for flood risk assessment</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Geospatial data analysis for land development and planning</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Compliance with industry standards for engineering and construction projects</span>
                </li>
            </ul>

            <button class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Request a Survey
            </button>
        </div>

    </div>
</section>
