<div class="px-20 py-14 space-y-24 font-raleway" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
    <div class="grid lg:grid-cols-5 gap-10">
        <!-- Contact Section -->
        <div class="lg:col-span-2 space-y-4">
            <h2 class="text-3xl font-bold">Have Questions? We’re Here to Help!</h2>
            <p class="text-gray-600">
                If you need further clarification or have specific inquiries, feel free to reach out to us.
            </p>
            <button class="bg-green-700 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-800 transition">
                Contact Us
            </button>
        </div>
    
        <!-- FAQ Section -->
        <div class="lg:col-span-3">
    
            <div class="space-y-4">
                @php
                    $faqs = [
                        ["question" => "What types of survey solutions do you offer?", "answer" => "We provide a wide range of geospatial and land surveying solutions. Visit our Services page for detailed information."],
                        ["question" => "How accurate are your survey results?", "answer" => "Our surveys are conducted using advanced technology to ensure precision and reliability."],
                        ["question" => "Do you offer consultation services?", "answer" => "Yes, we provide professional consultation to help you determine the best survey solutions for your needs."],
                        ["question" => "How can I request a survey?", "answer" => "You can request a survey by contacting us through our website or reaching out via email."],
                    ];
                @endphp
    
                @foreach ($faqs as $index => $faq)
                    <div class="border-b border-gray-300 pb-3">
                        <button onclick="toggleFAQ({{ $index }})" class="w-full text-left flex justify-between items-center py-3 font-medium text-md focus:outline-none">
                            {{ $faq['question'] }}
                            <span id="icon-{{ $index }}" class="text-green-700 transition-transform duration-300">+</span>
                        </button>
                        <div id="faq-{{ $index }}" class="overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                            <p class="text-gray-600 text-sm mt-2">
                                {{ $faq['answer'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- FAQ Toggle Script -->
    <script>
        function toggleFAQ(index) {
            let answer = document.getElementById("faq-" + index);
            let icon = document.getElementById("icon-" + index);
    
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                icon.classList.remove("rotate-180");
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                icon.classList.add("rotate-180");
            }
        }
    </script>   
    

    <div class="bg-cover bg-center rounded-2xl w-[100%] py-14 space-y-10" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" style="background-image: url('{{ asset('/storage/images/ctabg.png') }}');">
        <div>
            <h2 class="font-raleway text-4xl font-bold text-center px-14 pb-4 text-white">Let's Bring Your Vision to Life</h2>
            <p class="font-raleway text-xs text-center text-gray-200">
                Get in touch today to explore tailored geospatial solutions for your project.
            </p>
        </div>
        <div class="text-center mt-4">
            <a href="" class="bg-[#afdf34] text-white text-sm font-semibold px-6 py-3 rounded-lg hover:bg-green-700 transition-all">
                Contact Us
            </a>
        </div>
    </div>


</div>