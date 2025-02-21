<section id="cadastral" class="hero bg-cover bg-center min-h-[75vh] w-full flex items-center px-6 md:px-16 py-20" 
     style="background-image: url('{{ asset('/storage/images/detail/'.$service->slug.'.webp') }}');">
    
    <div class="max-w-3xl text-left md:mt-4" style="margin-top:15%">
        <h1 class="text-3xl md:text-[40px] font-raleway font-bold text-white leading-tight">
            <span class="bg-gradient-to-r from-[#bdff13] via-90% to-[#e4d814] to-90% bg-clip-text text-transparent">
                {{$service->title}}
            </span>
        </h1>

        <p class="text-white text-sm md:text-lg mt-2 font-semibold">
            {{$service->subline}}
        </p>

        <!-- CTA Section -->
        <div class="mt-6">
            <button class="bg-[#93bc32] rounded-full py-2 px-6 text-sm md:text-lg transition-colors duration-300 hover:bg-[#c6ff41]">
                Contact Us
            </button>
        </div>
    </div>

</section>
