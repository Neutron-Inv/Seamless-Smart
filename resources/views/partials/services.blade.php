<div class="px-20 py-4 space-y-14 font-raleway">
    <div class="grid grid-cols-2 gap-10 justify-items-stretch">
        <div class="justify-self-start" data-aos="fade-right">
            <h2 class="font-[600] text-4xl leading-tight">
                Delivering <br /> Exceptional Surveying Solutions
            </h2>
        </div>
        <div class="justify-self-end align-middle" data-aos="fade-left">
            <p class="font-normal text-sm text-gray-600">
                We believe in the power of collaboration to shape a better, data-driven future. <br />
                Our clients and partners are at the core of our mission, helping us drive accuracy, efficiency, and innovation in every project.
            </p>
        </div>
    </div>

    <hr>

    @php
        $services = [
            ['title' => 'Cadastral Surveying', 'image' => 'cadastral.jpg', 'desc' => 'We conduct precise boundary mapping, land subdivision, and title registration to ensure legal land ownership and compliance with regulatory authorities.'],
            ['title' => 'Topographical Surveying', 'image' => 'topo.jpg', 'desc' => 'We provide high-accuracy contour and elevation mapping for construction, infrastructure, and environmental projects.'],
            ['title' => 'Engineering Surveys', 'image' => 'engr.jpg', 'desc' => 'Providing critical geospatial data for infrastructure projects, ensuring compliance with design specifications and safety standards.'],
            ['title' => 'Drone (UAV) Surveys', 'image' => 'drone.jpg', 'desc' => 'Capturing high-resolution aerial data for land mapping, site monitoring, and environmental assessments using Unmanned Aerial Vehicles.'],
            ['title' => 'Drone Data Processing', 'image' => 'dronedata.png', 'desc' => 'Converting raw aerial imagery into actionable geospatial insights, including 3D models, orthophotos, and volumetric calculations.'],
            ['title' => 'Bathymetric Surveys', 'image' => 'bathy.jpg', 'desc' => 'Mapping underwater terrain using sonar and GPS technology to support marine construction, dredging, and environmental studies.'],
            ['title' => 'Geospatial Data Visualization & Analysis', 'image' => 'gis.png', 'desc' => 'Transforming raw spatial data into interactive maps, dashboards, and reports to support planning, monitoring, and decision-making.'],
            ['title' => 'Photogrammetry & Spatial Data Management', 'image' => 'photo.jpeg', 'desc' => 'Utilizing advanced imaging techniques to generate accurate 3D models, maps, and geospatial datasets for analysis and decision-making.'],
        ];
    @endphp

    @foreach ($services as $index => $service)
        <div class="flex-col py-1 items-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
            <div class="grid grid-cols-3 gap-10 items-center">
                <div>
                    <img src="{{ asset('/storage/images/services/' . $service['image']) }}" class="rounded-2xl h-40 w-full object-cover object-top">
                </div>
                <div>
                    <h3 class="text-3xl font-raleway font-[600]">{{ $service['title'] }}</h3>
                </div>
                <div class="flex items-start space-x-2">
                    <p class="text-sm text-gray-400">{{ $service['desc'] }}</p>
                    <span class="border-[1px] rounded-full border-gray-300 hover:border-green-500 transition-all duration-400 transform hover:scale-110">
                        <i class="fas fa-arrow-right text-gray-700 text-2xl bg-green-800 bg-clip-text text-transparent transition-all duration-600 p-3 hover:-rotate-45"></i>
                    </span>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>
