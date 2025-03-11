<x-frontend-layout>
<x-slot:title>
    About US
</x-slot:title>

@push('styles')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

<main class="w-full bg-blue-50 lg:py-20">
    <div class="max-w-6xl mx-auto md:p-[10%] lg:p-0">
        <div class="w-full px-6 py-8 lg:p-4 flex items-center flex-wrap gap-8 lg:gap-0">
            <div class="w-full lg:w-1/2">
                <!-- Homec Image Group -->
                <div class="w-full relative lg:pr-24">
                    <div class="w-full relative">
                        <img src="https://0brokers.in/uploads/website-images/about-us-bg-2023-03-21-12-23-02-8837.webp" alt="background_image" class="w-full h-full object-cover">
                        <div class="w-fit absolute top-4 left-4 bg-black px-6 py-4 rounded-md">
                            <h4 class="text-3xl font-extrabold text-white flex flex-col">25+ Years <span class="text-base font-medium">Experience</span></h4>
                        </div>
                    </div>
                    <div class="max-w-[50%] lg:w-fit absolute bottom-4 right-4 lg:bottom-12 lg:right-8 ring-4 ring-white rounded-md">
                        <div class="homec-ceo-quote__img">
                            <style>
                                .homec-overlay {
                                    font-family: "Poppins", sans-serif;
                                    font-weight: 400;
                                    font-size: 16px;
                                    line-height: 26px;
                                    color: #111111;
                                    box-sizing: inherit;
                                    position: absolute;
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    height: 100%;
                                    transition: all 0.3s ease;
                                    background: linear-gradient(
                                        179.13deg,
                                        rgba(217, 217, 217, 0) -20.13%,
                                        rgba(217, 217, 217, 0.39) -20.12%,
                                        #000000b8 99.26%
                                    );
                                    z-index: 2;
                                }
                            </style>
                            <div class="homec-overlay rounded-md"></div>
                            <img src="{{asset('assets/moonstarbuilder-owner.png')}}" alt="author_image" class="rounded-md">
                        </div>
                        <h4 class="absolute bottom-0 p-4 text-lg text-white font-bold flex flex-col z-10">Ghouse Pasha<span class="text-sm font-medium">Chairman/Managing Director</span></h4>
                    </div>
                </div>
                <!-- End Homec Image Group -->
            </div>
            <div class="w-full lg:w-1/2">
                <div class="w-full">
                    <!-- Section Title -->
                    <div class="homec-section__head">
                        <div class="w-full mb-2">
                            <span class="text-xl text-black text-center font-semibold p-6 inline-block bg-no-repeat bg-center bg-cover aos-init aos-animate" data-aos="fade-down" data-aos-delay="300" style="background-image: url('https://0brokers.in/frontend/img/section-shape.svg')">About Moonstar Builder</span>
                        </div>
                        <h2 class="text-3xl text-black font-bold capitalize aos-init aos-animate" data-aos="fade-in" data-aos-delay="400">Exceptional Projects for Everyday Living</h2>
                    </div>
                    <div class="w-full mt-6 aos-init aos-animate" data-aos="fade-in" data-aos-delay="500">
                        <p class="text-base text-gray-500 font-medium">For over two decades, Moonstar Builders has been transforming dreams into reality. We specialize in providing top-quality housing solutions that meet your needs and exceed your expectations.</p>
                        <div class="mt-4 text-base font-medium">
                            <p>With a rich history of more than 25 years in the industry, we have built a reputation for delivering excellence. Our commitment to quality and customer satisfaction is evident in every project we undertake.</p>
                        </div>
                        <div class="w-full mt-6 flex items-center justify-between gap-6">
                            <div class="w-fit">
                                <div class="w-14 h-14 p-2 bg-black rounded-full flex items-center justify-center">
                                    <img src="https://0brokers.in/uploads/website-images/about-us-item-one-2023-04-09-03-16-16-8890.svg" alt="icon">
                                </div>
                                <h3 class="mt-2 text-2xl font-bold text-black"><span class="counter">25</span>+ Projects</h3>
                                <p class="text-base font-medium text-gray-500">completed successfully</p>
                            </div>
                            <div class="w-fit">
                                <div class="w-14 h-14 p-2 bg-black rounded-full flex items-center justify-center">
                                    <img src="https://0brokers.in/uploads/website-images/about-us-item-two-2023-04-09-03-17-48-3669.svg" alt="icon">
                                </div>
                                <h3 class="mt-2 text-2xl font-bold text-black"><span class="counter">400</span>k+ Sq.Ft</h3>
                                <p class="text-base font-medium text-gray-500">proudly delivered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="w-full bg-indigo-100 lg:py-20">
    <div class="max-w-6xl mx-auto bg-white border border-gray-300 rounded-lg">
        <div class="w-full px-6 py-8 lg:px-16 flex items-center flex-wrap gap-8 lg:gap-0">
            <div class="w-full lg:w-5/12">
                <div class="w-full">
                    <div class="w-full">
                        <div class="w-full aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="text-3xl font-extrabold text-black">Why Choose Us?</h2>
                            {{-- <p class="mt-4 text-base font-medium text-gray-500">Why Choose Us?</p> --}}
                        </div>
                        <!-- Homec List -->
                        <ul class="mt-6 w-full space-y-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <li class="w-full text-base text-black font-medium flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg>
                                <p><b>Experienced Team:</b> Our team of seasoned professionals brings a wealth of knowledge and experience to every project.</p>
                            </li>
                            <li class="w-full text-base text-black font-medium flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg>
                                <p><b>Quality Assurance:</b> We adhere to the highest standards of construction and design to ensure your home is built to last.</p>
                            </li>
                            <li class="w-full text-base text-black font-medium flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg>
                                <p><b>Customer-Centric Approach:</b> We prioritize your needs and work closely with you to bring your vision to life.</p>
                            </li>
                            <li class="w-full text-base text-black font-medium flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path></svg>
                                <p><b>Innovative Solutions:</b> Our cutting-edge designs and modern construction techniques set us apart from the competition.</p>
                            </li>
                        </ul>
                        <!-- Homec Button -->
                        <div class="mt-10 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{route('contact')}}" class="w-fit text-lg font-bold text-white bg-black rounded-md px-6 py-4 block hover:bg-gray-800"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-7/12">
                <div class="w-full lg:pl-8">
                    <div class="w-full grid grid-cols-2 grid-rows-2 gap-x-4 text-center">
                            <div class="w-full aos-init aos-animate" data-aos="fade-in" data-aos-delay="400">
                                <div class="w-full mt-16 bg-slate-100 border border-gray-200 p-8 flex items-center justify-center flex-col group hover:bg-black">
                                    <div class="w-16 h-16 -mt-16 p-4 bg-black rounded-full flex items-center justify-center">
                                        <img src="https://0brokers.in/uploads/website-images/counter--2023-04-10-12-17-46-3092.svg" alt="icon" class="w-full">
                                    </div>
                                    <h3 class="mt-6 text-3xl font-extrabold text-black group-hover:text-white"><span class="counter">25+</span></h3>
                                    <p class="mt-2 text-base font-medium text-gray-600 group-hover:text-white">Years of Excellence</p>
                                </div>
                            </div>
                            <div class="w-full aos-init aos-animate" data-aos="fade-in" data-aos-delay="400">
                                <!-- FunFacts Single -->
                                <div class="w-full mt-16 bg-slate-100 border border-gray-200 p-8 flex items-center justify-center flex-col group hover:bg-black">
                                    <div class="w-16 h-16 -mt-16 p-4 bg-black rounded-full flex items-center justify-center">
                                        <img src="https://0brokers.in/uploads/website-images/counter--2023-04-10-12-18-03-1221.svg" alt="icon">
                                    </div>
                                    <h3 class="mt-6 text-3xl font-extrabold text-black group-hover:text-white"><span class="counter">25+</span></h3>
                                    <p class="mt-2 text-base font-medium text-gray-600 group-hover:text-white">Projects Completed</p>
                                </div>
                                <!-- End FunFacts Single -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 aos-init aos-animate" data-aos="fade-in" data-aos-delay="400">
                                <!-- FunFacts Single -->
                                <div class="w-full mt-16 bg-slate-100 border border-gray-200 p-8 flex items-center justify-center flex-col group hover:bg-black">
                                    <div class="w-16 h-16 -mt-16 p-4 bg-black rounded-full flex items-center justify-center">
                                        <img src="https://0brokers.in/uploads/website-images/counter--2023-04-10-12-18-12-3209.svg" alt="icon">
                                    </div>
                                    <h3 class="mt-6 text-3xl font-extrabold text-black group-hover:text-white"><span class="counter">7+</span></h3>
                                    <p class="mt-2 text-base font-medium text-gray-600 group-hover:text-white">Upcoming Projects</p>
                                </div>
                                <!-- End FunFacts Single -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 aos-init aos-animate" data-aos="fade-in" data-aos-delay="400">
                                <!-- FunFacts Single -->
                                <div class="w-full mt-16 bg-slate-100 border border-gray-200 p-8 flex items-center justify-center flex-col group hover:bg-black">
                                    <div class="w-16 h-16 -mt-16 p-4 bg-black rounded-full flex items-center justify-center">
                                        <img src="https://0brokers.in/uploads/website-images/counter--2023-04-10-12-18-20-6506.svg" alt="icon">
                                    </div>
                                    <h3 class="mt-6 text-3xl font-extrabold text-black group-hover:text-white"><span class="counter">40+</span></h3>
                                    <p class="mt-2 text-base font-medium text-gray-600 group-hover:text-white">Lakhs Sq. Ft. Delivered</p>
                                </div>
                                <!-- End FunFacts Single -->
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-blue-50 lg:py-20">
    <div class="max-w-6xl mx-auto md:p-[10%] lg:p-0">
        <div class="w-full px-6 py-8 lg:p-4 flex items-center flex-wrap gap-8 lg:gap-0">
            <div class="w-full lg:w-7/12">
                <div class="w-full lg:pr-24">
                    <!-- Section Title -->
                    <div class="homec-section__head">
                        <div class="w-full mb-2">
                            <span class="text-xl text-black text-center font-semibold px-12 py-4 inline-block bg-no-repeat bg-center bg-cover aos-init aos-animate" data-aos="fade-down" data-aos-delay="300" style="background-image: url('https://0brokers.in/frontend/img/shape-3.svg')">FAQ</span>
                        </div>
                        <h2 class="text-3xl text-black font-bold aos-init aos-animate" data-aos="fade-in" data-aos-delay="400">If you want to know<br> Frequently Ask Questions</h2>
                    </div>
                    <div class="w-full mt-6 space-y-4 aos-init aos-animate" data-aos="fade-in" data-aos-delay="500">
                        <div class="w-full bg-gray-50 border-2 border-blue-200 rounded-sm shadow-md faq-content-div">
                            <h2 class="w-full">
                                <button class="faq-btn w-full p-4 text-lg font-semibold text-black text-left flex items-center justify-between gap-4 group" type="button"  data-faq-target="#faq-data-0">
                                    How does Moonstar Builders' work?
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black group-focus:rotate-180"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
                                </button>
                            </h2>
                            <div id="faq-data-0" class="hidden faq-content">
                                <div class="p-4">At Moonstar Builders, our services are designed to assist you in finding the perfect plot for your needs. We provide personalized consultations to understand your requirements and offer expert advice on selecting the best plot layout for your future development. Our aim is to make the process of purchasing land smooth and hassle-free</div>
                            </div>
                        </div>
                        <div class="w-full bg-gray-50 border-2 border-blue-200 rounded-sm shadow-md faq-content-div">
                            <h2 class="w-full">
                                <button class="faq-btn w-full p-4 text-lg font-semibold text-black text-left flex items-center justify-between gap-4 group" type="button"  data-faq-target="#faq-data-1">
                                    What services do Moonstar Builders offer?
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black group-focus:rotate-180"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
                                </button>
                            </h2>
                            <div id="faq-data-1" class="hidden faq-content">
                                <div class="p-4">
                                    Moonstar Builders specializes in:
                                    <ul class="w-full mt-4 pl-6 list-disc space-y-2">
                                        <li><b>Plot Sales:</b> We offer a wide range of plot layouts suitable for residential, commercial, and industrial development.</li>
                                        <li><b>Site Visits:</b> Schedule a visit to our plot locations to explore and choose the best plot that fits your needs.</li>
                                        <li><b>Legal Assistance:</b> We provide guidance on legal procedures to ensure a secure and transparent transaction.</li>
                                        <li><b>Consultancy:</b> Expert advice on plot selection, investment opportunities, and development potential.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="w-full bg-gray-50 border-2 border-blue-200 rounded-sm shadow-md faq-content-div">
                            <h2 class="w-full">
                                <button class="faq-btn w-full p-4 text-lg font-semibold text-black text-left flex items-center justify-between gap-4 group" type="button"  data-faq-target="#faq-data-2">
                                    Why should I choose Moonstar Builders?
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black group-focus:rotate-180"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
                                </button>
                            </h2>
                            <div id="faq-data-2" class="hidden faq-content">
                                <div class="p-4">With over 25 years of experience in the real estate industry, Moonstar Builders is dedicated to providing high-quality plots and exceptional customer service. Our experienced team, extensive portfolio, and customer-first approach ensure that you find the ideal plot for your requirements.</div>
                            </div>
                        </div>
                        <div class="w-full bg-gray-50 border-2 border-blue-200 rounded-sm shadow-md faq-content-div">
                            <h2 class="w-full">
                                <button class="faq-btn w-full p-4 text-lg font-semibold text-black text-left flex items-center justify-between gap-4 group" type="button"  data-faq-target="#faq-data-3">
                                    How can I get started with Moonstar Builders?
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-8 fill-black group-focus:rotate-180"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
                                </button>
                            </h2>
                            <div id="faq-data-3" class="hidden faq-content">
                                <div class="p-4">Getting started is easy! Give us a call to schedule a Meeting. We'll discuss your needs, arrange site visits, and guide you through the process of purchasing your ideal plot.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-5/12">
                <!-- Homec Image Group -->
                <div class="w-full relative">
                    <div class="w-full relative">
                        <img src="https://0brokers.in/uploads/website-images/faq-support-2023-03-21-12-49-38-6487.webp" alt="background_image" class="w-full h-full object-cover">
                        <div class="w-fit absolute bottom-0 right-0 bg-black px-6 py-4">
                            <h4 class="text-3xl font-extrabold text-white flex flex-col">24/7 Support <br><span class="text-base font-medium">Have any Questions Contact Us?</span></h4>
                        </div>
                    </div>
                </div>
                <!-- End Homec Image Group -->
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
    $('body').on('click', '.faq-btn', function(){
        $(".faq-content").each(function(){
            $(this).addClass('hidden');
        })
        const target = $(this).data('faq-target');
        $(target).toggleClass('hidden')
    });
    // datatable actions dropdown
    $(document).mouseup(function(e) {
        var container = $(".faq-content-div");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".faq-content").addClass('hidden');
        }
    });
</script>
@endpush
</x-frontend-layout>