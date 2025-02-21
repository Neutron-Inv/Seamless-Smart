<section id="drone-data-processing-details" class="w-full py-16 px-6 md:px-16 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">

        <!-- Image Section -->
        <div class="relative flex-col md:p-14 space-y-8">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'1.webp') }}" class="rounded-lg shadow-lg w-full">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'2.webp') }}" class="w-full rounded-lg shadow-lg hidden md:block border-4 border-white">
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800">
                Advanced Drone Data Processing & Analysis
            </h2>
            <p class="text-gray-600 mt-4">
                Raw aerial imagery and LiDAR scans require high-level processing to extract meaningful insights. 
                Our data processing solutions transform drone-collected data into actionable outputs, including 
                3D point clouds, orthophotos, and digital surface models.
            </p>

            <p class="text-gray-600 mt-4">
                Our team utilizes industry-leading software to process UAV data with precision, supporting sectors such as 
                agriculture, real estate, construction, and environmental monitoring.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Generation of orthophotos and digital terrain models</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Advanced LiDAR point cloud classification</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Automated feature extraction for urban planning</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">High-accuracy 3D models for construction and land use</span></li>
                <li class="flex items-center">✅ <span class="ml-2 text-gray-700">Seamless data integration with GIS platforms</span></li>
            </ul>

            <button class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Request Processing
            </button>
        </div>

    </div>
</section>
