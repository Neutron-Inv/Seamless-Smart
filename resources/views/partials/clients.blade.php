<div class="px-20 py-14 space-y-14">
    <!-- Header Section -->
    <div class="grid grid-cols-2 gap-10 justify-items-stretch" data-aos="fade-up" data-aos-duration="800">
        <div class="justify-self-start">
            <h2 class="font-raleway font-[600] text-4xl">Partners & <br/>Clients</h2> 
        </div> 
        <div class="justify-self-end align-middle">
            <p class="font-raleway font-normal text-sm text-gray-600">
                We believe that collaboration is key to building a sustainable future.<br/>
                Our Partners and Clients play a crucial role in driving our mission forward. 
            </p> 
        </div> 
    </div>

    <!-- Client Logos with Hover Scaling -->
    <div class="flex space-x-10 justify-between" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        @for ($i = 1; $i <= 5; $i++)
            <span class="transition-transform duration-500 hover:scale-110">
                <img src="{{ asset("/storage/images/clients/$i.png") }}" class="h-20 w-auto rounded-xl border p-4 border-gray-300 object-contain">
            </span>
        @endfor
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-[#f6fde2] rounded-2xl w-[100%] py-14 space-y-10" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div>
            <h2 class="font-raleway text-4xl font-bold text-center px-14 pb-4">Why Choose Us?</h2>
            <p class="font-raleway text-xs text-center text-gray-400">
                We provide cutting-edge surveying and geospatial solutions that enhance project efficiency, <br/> 
                improve decision-making, and deliver precise, actionable insights.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-20">
            @php
                $features = [
                    ['icon' => 'fas fa-search', 'title' => 'Precision & Accuracy', 'desc' => 'Leveraging advanced technology to ensure highly accurate survey data and geospatial mapping.', 'delay' => '500'],
                    ['icon' => 'fas fa-bolt', 'title' => 'Efficiency & Innovation', 'desc' => 'Our state-of-the-art tools and methodologies streamline project execution for faster results.', 'delay' => '600'],
                    ['icon' => 'fas fa-chart-pie', 'title' => 'Data-Driven Insights', 'desc' => 'We transform raw data into actionable intelligence, empowering better decision-making.', 'delay' => '700']
                ];
            @endphp

            @foreach ($features as $feature)
                <div class="rounded-2xl bg-white flex-col p-6 space-y-4 transition-all duration-500 transform hover:scale-105 hover:shadow-lg" 
                     data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $feature['delay'] }}">
                    <span class="bg-[#f6fde2] p-4 rounded transition-transform duration-500 hover:rotate-12">
                        <i class="{{ $feature['icon'] }} text-gray-700 text-2xl bg-green-800 bg-clip-text text-transparent"></i>
                    </span>
                    <h3 class="font-raleway font-[600] text-md">{{ $feature['title'] }}</h3>
                    <p class="font-raleway font-[300] text-xs leading-[1.5] text-gray-400">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
