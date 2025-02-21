<section id="drone-surveys-details" class="w-full py-16 px-6 md:px-16 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">

        <!-- Image Section -->
        <div class="relative flex-col md:p-14 space-y-8">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'1.webp') }}" class="rounded-lg shadow-lg w-full">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'2.webp') }}" class="w-full rounded-lg shadow-lg hidden md:block border-4 border-white">
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800">
                High-Precision Drone (UAV) Surveys
            </h2>
            <p class="text-gray-600 mt-4">
                UAV-based aerial surveys provide rapid, accurate, and cost-effective solutions for large-scale mapping and 
                site analysis. Our drone technology captures high-resolution imagery and 3D terrain models for various applications, 
                including construction, agriculture, and infrastructure planning.
            </p>

            <p class="text-gray-600 mt-4">
                With real-time data acquisition and enhanced efficiency, our UAV surveys support detailed site assessments, 
                reducing field time while improving accuracy in decision-making processes.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">High-resolution aerial mapping for large areas</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">3D modeling and digital elevation analysis</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Surveying difficult or hazardous terrain safely</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Improved accuracy with drone-based LiDAR technology</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Reduced survey time and operational costs</span></li>
            </ul>

            <button class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Request a Survey
            </button>
        </div>

    </div>
</section>
