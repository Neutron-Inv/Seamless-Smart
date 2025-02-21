<section id="engineering-survey" class="w-full py-16 px-6 md:px-16 bg-gray-100">
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
                Engineering Surveys for Infrastructure Development
            </h2>
            <p class="text-gray-600 mt-4">
                Our engineering survey solutions support the construction, transportation, and energy 
                industries with accurate geospatial data for infrastructure development. We ensure precise 
                measurements, terrain assessments, and structural analysis to enhance project efficiency.
            </p>

            <p class="text-gray-600 mt-4">
                From initial site planning to as-built verification, our surveys help engineers 
                and project managers execute their designs with confidence, ensuring compliance 
                with industry standards and environmental regulations.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Detailed land and structural surveys for construction projects</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Precision geospatial data for infrastructure planning</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Hydrographic and transportation route surveys</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Compliance with engineering and safety regulations</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Monitoring and maintenance planning for long-term projects</span>
                </li>
            </ul>

            <button class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Get a Survey
            </button>
        </div>

    </div>
</section>
