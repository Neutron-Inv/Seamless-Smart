<section id="about" class="px-6 md:px-20 py-14 space-y-14">
    <!-- Header Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 justify-items-stretch text-center md:text-left" data-aos="fade-up" data-aos-duration="800">
        <div class="justify-self-center md:justify-self-start">
            <h2 class="font-raleway font-semibold text-3xl md:text-4xl">Partners & <br class="hidden md:block"/> Clients</h2> 
        </div> 
        <div class="justify-self-center md:justify-self-end">
            <p class="font-raleway font-normal text-sm text-gray-600">
                We believe that collaboration is key to building a sustainable future.<br class="hidden md:block"/>
                Our Partners and Clients play a crucial role in driving our mission forward. 
            </p> 
        </div> 
    </div>

    <!-- Client Logos with Hover Scaling -->
    <div class="flex flex-wrap justify-center md:justify-between gap-6 md:gap-10" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
        @for ($i = 1; $i <= 5; $i++)
            <span class="transition-transform duration-500 hover:scale-110">
                <img src="{{ asset("/storage/images/clients/$i.png") }}" class="h-16 md:h-20 w-auto rounded-xl border p-4 border-gray-300 object-contain">
            </span>
        @endfor
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-[#f6fde2] rounded-2xl w-full py-14 space-y-10" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
        <div class="px-6 md:px-14 text-center">
            <h2 class="font-raleway text-3xl md:text-4xl font-bold pb-4">Why Choose Us?</h2>
            <p class="font-raleway text-sm md:text-xs text-gray-400">
                We provide cutting-edge surveying and geospatial solutions that enhance project efficiency, <br class="hidden md:block"/> 
                improve decision-making, and deliver precise, actionable insights.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-6 lg:px-20">
            @php
                $features = [
                    ['icon' => 'fas fa-search', 'title' => 'Precision & Accuracy', 'desc' => 'Leveraging advanced technology to ensure highly accurate survey data and geospatial mapping.', 'delay' => '500'],
                    ['icon' => 'fas fa-bolt', 'title' => 'Efficiency & Innovation', 'desc' => 'Our state-of-the-art tools and methodologies streamline project execution for faster results.', 'delay' => '600'],
                    ['icon' => 'fas fa-chart-pie', 'title' => 'Data-Driven Insights', 'desc' => 'We transform raw data into actionable intelligence, empowering better decision-making.', 'delay' => '700']
                ];
            @endphp

            @foreach ($features as $feature)
                <div class="rounded-2xl bg-white flex flex-col p-6 space-y-4 transition-all duration-500 transform hover:scale-105 hover:shadow-lg" 
                     data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $feature['delay'] }}">
                    <span class="bg-[#f6fde2] p-4 rounded transition-transform duration-500 hover:rotate-12 self-center">
                        <i class="{{ $feature['icon'] }} text-gray-700 text-2xl bg-green-800 bg-clip-text text-transparent"></i>
                    </span>
                    <h3 class="font-raleway font-semibold text-md text-center">{{ $feature['title'] }}</h3>
                    <p class="font-raleway font-light text-sm leading-[1.5] text-gray-400 text-center">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
