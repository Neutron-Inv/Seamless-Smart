<section id="cadastral-details" class="w-full py-16 px-6 md:px-16 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">

        <!-- Image Section -->
        <div class="relative flex-col md:p-14 space-y-8">
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'1.webp') }}" class="rounded-lg shadow-lg w-full">
            
            <!-- Optional Second Image -->
            <img src="{{ asset('/storage/images/detail/'.$service->slug.'2.webp') }}" 
                 class=" w-full rounded-lg shadow-lg hidden md:block border-4 border-white">
        </div>

        <!-- Text Content -->
        <div>
            <h2 class="text-3xl font-bold text-gray-800">
                Comprehensive Cadastral Surveying Solutions
            </h2>
            <p class="text-gray-600 mt-4">
                Cadastral surveying is essential for establishing legally recognized land boundaries, ensuring property ownership accuracy, 
                and preventing disputes. Our expert surveyors leverage advanced geospatial technology to provide precise boundary 
                demarcations, subdivision planning, and legal documentation to meet regulatory requirements.
            </p>

            <p class="text-gray-600 mt-4">
                We specialize in conducting surveys for land registration, title verification, and property development. 
                Whether you need to subdivide land, verify existing boundaries, or establish ownership rights, our team delivers 
                data-driven solutions that adhere to national and international surveying standards.
            </p>

            <ul class="mt-6 space-y-3">
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Accurate mapping of land boundaries for legal ownership</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Preparation of cadastral maps, site plans, and survey reports</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Land subdivision and re-establishment of property lines</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Compliance with local, state, and federal land regulations</span>
                </li>
                <li class="flex items-center">
                    ✅ <span class="ml-2 text-gray-700">Resolution of land disputes through accurate boundary demarcation</span>
                </li>
            </ul>

            <button @click="open = true" class="mt-6 bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Request a Survey
            </button>
        </div>

    </div>
</section>
