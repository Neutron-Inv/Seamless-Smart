<section id="geospatial-data-management" class="w-full py-16 px-6 md:px-16 bg-gray-100">
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
                Centralized Geospatial Data for Seamless Decision-Making
            </h2>
            <p class="text-gray-600 mt-4">
                Effective data management is crucial in today’s fast-paced world. We provide a dynamic, 
                single point-of-reference file that consolidates all spatial data for a given project or 
                site, ensuring accuracy and accessibility.
            </p>

            <p class="text-gray-600 mt-4">
                Our solutions align geospatial data to a unified coordinate system, categorizing it into 
                structured CAD layers for easy visualization and analysis. This enables site managers, 
                engineers, and stakeholders to make informed decisions based on comprehensive and 
                up-to-date spatial information.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Single reference file for streamlined data access</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Geospatial data alignment to a unified coordinate system</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Categorization into CAD layers for improved visualization</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Multiple data hosting options for accessibility</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Trusted by architects, engineers, and construction firms</span>
                </li>
            </ul>

            <button @click="open = true" class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Learn More
            </button>
        </div>

    </div>
</section>
