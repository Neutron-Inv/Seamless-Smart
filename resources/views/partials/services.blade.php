<section id="services" class="max-w-[100vw] px-4 md:px-20 py-4 space-y-14 font-raleway">
    <!-- Header Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-items-stretch text-center md:text-left">
        <div class="justify-self-center md:justify-self-start" data-aos="fade-right">
            <h2 class="font-[600] text-3xl md:text-4xl leading-tight">
                Delivering <br /> Exceptional Surveying Solutions
            </h2>
        </div>
        <div class="justify-self-center md:justify-self-end md:text-left" data-aos="fade-left">
            <p class="font-normal text-sm text-gray-600">
                We believe in the power of collaboration to shape a better, data-driven future. <br />
                Our clients and partners are at the core of our mission, helping us drive accuracy, efficiency, and
                innovation in every project.
            </p>
        </div>
    </div>

    <hr class="border-gray-300">

    @php
        $services = [
            [
                'title' => 'Cadastral Surveying',
                'image' => 'cadastral.jpg',
                'desc' =>
                    'We conduct precise boundary mapping, land subdivision, and title registration to ensure legal land ownership and compliance with regulatory authorities.',
                'slug' => 'cadastral-survey',
            ],
            [
                'title' => 'Topographical Surveying',
                'image' => 'topo.jpg',
                'desc' =>
                    'We provide high-accuracy contour and elevation mapping for construction, infrastructure, and environmental projects.',
                'slug' => 'topographical-survey',
            ],
            [
                'title' => 'Engineering Surveys',
                'image' => 'engr.jpg',
                'desc' =>
                    'Providing critical geospatial data for infrastructure projects, ensuring compliance with design specifications and safety standards.',
                'slug' => 'engineering-survey',
            ],
            [
                'title' => 'Drone (UAV) Surveys',
                'image' => 'drone.jpg',
                'desc' =>
                    'Capturing high-resolution aerial data for land mapping, site monitoring, and environmental assessments using Unmanned Aerial Vehicles.',
                'slug' => 'drone-uav-survey',
            ],
            [
                'title' => 'Drone Data Processing',
                'image' => 'dronedata.png',
                'desc' =>
                    'Converting raw aerial imagery into actionable geospatial insights, including 3D models, orthophotos, and volumetric calculations.',
                'slug' => 'drone-data-processing',
            ],
            [
                'title' => 'Bathymetric Surveys',
                'image' => 'bathy.jpg',
                'desc' =>
                    'Mapping underwater terrain using sonar and GPS technology to support marine construction, dredging, and environmental studies.',
                'slug' => 'bathymetry-survey',
            ],
            [
                'title' => 'Geospatial Data Visualization & Analysis',
                'image' => 'gis.png',
                'desc' =>
                    'Transforming raw spatial data into interactive maps, dashboards, and reports to support planning, monitoring, and decision-making.',
                'slug' => 'geospatial-visualization',
            ],
            [
                'title' => 'Photogrammetry & Spatial Data Management',
                'image' => 'photo.jpeg',
                'desc' =>
                    'Utilizing advanced imaging techniques to generate accurate 3D models, maps, and geospatial datasets for analysis and decision-making.',
                'slug' => 'photogrammetry-spatial-data',
            ],
        ];
    @endphp

    @foreach ($services as $index => $service)
        <div class="py-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 items-center">
                <!-- Image -->
                <div class="flex justify-center">
                    <img src="{{ asset('/storage/images/services/' . $service['image']) }}"
                        class="rounded-2xl h-40 w-10/12 object-cover object-top">
                </div>
                <!-- Title -->
                <div class="text-center md:text-left">
                    <h3 class="text-2xl md:text-3xl font-[600]">{{ $service['title'] }}</h3>
                </div>
                <!-- Description & Icon -->
                <div
                    class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-2 text-center md:text-left">
                    <p class="text-sm text-gray-400">{{ $service['desc'] }}</p>
                    <a href="{{ route('services', $service['slug']) }}">
                        <span
                            class="border-[1px] rounded-full border-gray-300 hover:border-green-500 transition-all duration-400 transform hover:scale-110 p-2">
                            <i
                                class="fas fa-arrow-right text-gray-700 text-xl transition-all duration-600 hover:-rotate-45"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <hr class="border-gray-300">
    @endforeach
</section>
