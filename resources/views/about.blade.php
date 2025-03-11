<x-frontend-layout>
<x-slot:title>
    About US
</x-slot:title>

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />
<style>
    #vid1_html5_api {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .swiper-button-prev, .swiper-button-next {
        width: 50px;
        height: 50px;
        background-color: white;
        border-radius: 50px;
        box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    }
    .swiper-button-prev:hover, .swiper-button-next:hover {
        background-color: rgb(30 58 138 / 1);
    }
    .swiper-button-prev:after, .swiper-button-next:after {
        font-size: 16px !important;
        font-weight: 800;
        color: rgb(30 58 138 / 1);
    }
    .swiper-button-prev:hover:after, .swiper-button-next:hover:after  {
        color: #FFFFFF !important;
    }
</style>
@endpush

<main class="w-full bg-white">
    <div class="container mx-auto md:p-[10%] xl:px-8">
        <div class="w-full px-6 py-8 lg:p-4 flex items-center flex-wrap gap-8 lg:gap-0">
            <div class="w-full lg:w-7/12">
                <div class="w-full lg:pr-16">
                    <h1 class="text-xl font-base text-yellow-600">About Moonstar Builder</h1>
                    <h2 class="mt-4 text-4xl font-bold text-black">Exceptional Projects for Modern Living</h2>

                    <p class="mt-6">With over 25 years of excellence, Moonstar Builder has been a pioneer in transforming dreams into reality. Specializing in land layout plots, we deliver top-tier housing solutions that meet your needs and exceed your expectations. Our reputation for quality and customer satisfaction is evident in every project we undertake.</p>
                    <p class="mt-6">Moonstar Land Developers and Builders is now synonymous with trust, quality, and progress in the real estate sector, continuously setting new benchmarks and leading the industry with their exemplary projects and customer-centric approach.</p>
                </div>
            </div>
            <div class="w-full lg:w-5/12 lg:pl-8 lg:border-l border-yellow-600">
                <div class="w-full py-8 grid grid-cols-2 gap-6" data-aos="fade-up" data-aos-duration="1600">
                    <div> 
                        <p class="text-4xl font-bold">
                            <span id="about-counter-years">25</span>
                            <span class="text-yellow-600 font-light">+</span>
                        </p>
                        <p class="text-sm md:text-base">Years of Excellence</p>
                    </div>
                    <div> 
                        <p class="text-4xl font-bold">
                            <span id="about-counter-projects">25</span>
                            <span class="text-yellow-600 font-light">+</span>
                        </p>
                        <p class="text-sm md:text-base">Projects Completed</p>
                    </div>
                    <div> 
                        <p class="text-4xl font-bold">
                            <span id="about-counter-upcoming">07</span>
                            <span class="text-yellow-600 font-light">+</span>
                        </p>
                        <p class="text-sm md:text-base">Upcoming Projects</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold">
                            <span id="about-counter-delivered">100</span>
                            <span class="text-yellow-600 font-light">+</span>
                        </p>
                        <p class="text-sm md:text-base">Lakhs Sq. Ft. Delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="w-full bg-white">
    <div class="w-full relative"><!--2xl:container mx-auto-->
        <img src="{{ asset('assets/team/ceo.jpg') }}" alt="" class="w-full object-cover" style="max-height: 600px;object-position: center;">
        <div class="w-full h-10 lg:h-16 lg:pl-[10%] absolute bottom-0 left-0 right-0">
            <div class="w-full h-full bg-white"></div>
        </div>
    </div>
    <div class="container mx-auto lg:p-[10%] lg:pt-8 xl:px-8 xl:py-0">
        <div class="w-full px-6 py-8 lg:p-4 flex items-center flex-wrap gap-8 lg:gap-0">
            <div class="w-full lg:w-5/12" data-aos="fade-up" data-aos-duration="1600">
                <h2 class="text-5xl font-bold text-black">History</h2>
                <p class="max-w-sm mt-4">Moonstar Builders has been transforming dreams into reality</p>
            </div>
            <div class="w-full lg:w-7/12">
                <div class="w-full flex items-center gap-4 cursor-pointer">
                    {{-- paginatin --}}
                    <div class="w-fit h-full flex flex-col items-center gap-4">
                        <div class="w-fit text-gray-600 font-medium block -rotate-90">
                            <span id="current-history" class="text-black font-bold">01</span>/05
                        </div>
                        <div class="w-[1px] h-full min-h-36 mt-4 bg-gray-400"></div>
                        <div class="w-fit flex flex-col">
                            <button class="w-fit bg-white p-2 group" id="history-arrow-up">
                                <svg class="h-6 fill-black group-hover:fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11 8.414V18h2V8.414l4.293 4.293 1.414-1.414L12 4.586l-6.707 6.707 1.414 1.414z"></path></svg>
                            </button>
                            <button class="w-fit bg-white p-2 group" id="history-arrow-down">
                                <svg class="h-6 fill-black group-hover:fill-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z"></path></svg>
                            </button>
                        </div>
                    </div>
                    {{-- years --}}
                    <div class="w-fit">
                        <ul class="w-fit space-y-6 text-gray-600">
                            <li class="history-years text-lg font-bold text-black hover:text-black" data-history-index="1" data-history-item="0">2005</li>
                            <li class="history-years hover:text-black" data-history-index="2" data-history-item="1">2008</li>
                            <li class="history-years hover:text-black" data-history-index="3" data-history-item="2">2010</li>
                            <li class="history-years hover:text-black" data-history-index="4" data-history-item="3">2020</li>
                            <li class="history-years hover:text-black" data-history-index="5" data-history-item="4">2024</li>
                        </ul>
                    </div>
                    <div class="w-full h-full pl-8">
                        <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="max-w-sm text-base text-gray-600 py-4">
                                            Ghouse Pasha embarked on a new chapter by establishing Moonstar Enterprises, a small-scale venture aimed at entering the real estate market. His dedication and strategic vision laid the foundation for future growth
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="max-w-sm text-base text-gray-600 py-4">
                                            With significant progress and an expanding portfolio, Moonstar Enterprises evolved into Moonstar Land Developers and Builders. This rebranding marked the company's transition into a more prominent player in the real estate industry
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="max-w-sm text-base text-gray-600 py-4">
                                            Moonstar Land Developers and Builders began undertaking larger projects, gaining recognition for their meticulous planning and adherence to ethical business principles. The company’s reputation for quality and reliability started to spread
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="max-w-sm text-base text-gray-600 py-4">
                                           By 2020, Moonstar Land Developers and Builders had become one of the leading businesses in the real estate field. The company’s projects were known for their innovative design, adherence to Vastu Shastra principles, and compliance with government regulations
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="max-w-sm text-base text-gray-600 py-4">
                                            With over 25 years of rich, hands-on experience in the real estate industry, Ghouse Pasha continues to steer the company with a focus on ethical business practices and a commitment to excellence. Under his leadership, Moonstar Land Developers and Builders have created numerous opportunities and successfully brought his vision to fruition. The company stands as a real estate icon and an inspiration, showcasing a legacy of success and innovation
                                        </div>
                                    </li>
                                </ul>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white">
    <div class="container mx-auto lg:p-[10%] xl:px-8 xl:py-20">
        <div class="w-full px-6 py-8 lg:p-4 md:grid md:grid-cols-2 relative">
            <div class="w-full h-full bg-gray-100">
                <img src="{{ asset('assets/our-vision.webp') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="w-full h-full after:w-0 after:h-0 lg:after:content-[''] lg:after:h-1/4 lg:after:w-1/4 after:absolute after:top-0 after:right-0 after:border-t after:border-r after:border-black">
                <div class="w-full h-full flex items-center justify-center py-6 md:p-4 lg:p-6">
                    <div class="w-full max-w-sm" data-aos="zoom-out-down" data-aos-duration="1600">
                        <h2 class="text-3xl font-bold text-black">Our Vision</h2>
                        <p class="text-base mt-4">We aspire to be the most sought-after real estate developer, promoting sustainable growth and prosperity for both local and international clients. Our continuous innovation and commitment to excellence position us as leaders in the dynamic real estate industry.</p>
                    </div>
                </div>
            </div>
            <div class="w-full h-full after:w-0 after:h-0 lg:after:content-[''] lg:after:h-1/4 lg:after:w-1/4 after:absolute after:bottom-0 after:left-0 after:border-b after:border-l after:border-black">
                <div class="w-full h-full flex items-center justify-center py-6 md:p-4 lg:p-6">
                    <div class="w-full max-w-sm" data-aos="zoom-out-down" data-aos-duration="1600">
                        <h2 class="text-3xl font-bold text-black">Our Mission</h2>
                        <p class="text-base mt-4">Our mission is to turn our clients' dreams into reality through high-quality housing solutions. We aim to empower businesses with innovative technologies, improving processes and efficiency. Our goal is to consistently bring our clients’ visions to life, fostering growth and success.</p>
                    </div>
                </div>
            </div>
            <div class="w-full h-full bg-gray-100">
                <img src="{{ asset('assets/our-mission-1.webp') }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white xl:py-10">
    <div class="container mx-auto px-8">
        <div class="w-full px-6 py-8 lg:p-4 space-y-8 lg:space-y-0 md:flex items-center justify-around gap-4">
            <div class="text-center" data-aos="flip-up" data-aos-duration="800">
                <h3 class="mt-6 text-4xl font-bold text-black"><span id="info-counter-years">25</span>+</span></h3>
                <p class="mt-2 text-lg font-medium text-gray-600">Years of Excellence</p>
            </div>
            <div class="text-center" data-aos="flip-up" data-aos-duration="800">
                <h3 class="mt-6 text-4xl font-bold text-black"><span id="info-counter-projects">25</span>+</span></h3>
                <p class="mt-2 text-lg font-medium text-gray-600">Successful Projects</p>
            </div>
            <div class="text-center" data-aos="flip-up" data-aos-duration="800">
                <h3 class="mt-6 text-4xl font-bold text-black"><span id="info-counter-delivered">100</span>k+ Sq.Ft</span></h3>
                <p class="mt-2 text-lg font-medium text-gray-600">Proudly Delivered</p>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-white">
    <div class="container mx-auto md:p-[10%] md:pt-10 xl:px-8">
        <div class="w-full px-6 py-8 lg:p-4">
            <h2 class="text-3xl font-bold text-black text-center">Founding Members</h2>

            <div class="w-full mt-12 grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6">
                <div class="w-full flex flex-col items-center" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-white ring-4 ring-yellow-500">
                        <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/chief-executive-officer.jpg" alt="chief-executive-officer moonstar builders" loading="lazy">
                    </div>
                    <div class="w-full mt-4 text-center">
                        <h3 class="text-xl font-bold text-black capitalize">Ghouse pasha</h3>
                        <p class="mt-1 text-base font-medium text-yellow-600 capitalize">Chief Executive Officer</p>
                    </div>
                </div>

                <div class="w-full flex flex-col items-center" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-white ring-4 ring-yellow-500">
                        <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/co-founder.png" alt="co-founder moonstar builders" loading="lazy">
                    </div>
                    <div class="w-full mt-4 text-center">
                        <h3 class="text-xl font-bold text-black capitalize">Shaheen kouser</h3>
                        <p class="mt-1 text-base font-medium text-yellow-600 capitalize">Co-Founder</p>
                    </div>
                </div>

                <div class="w-full flex flex-col items-center" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-white ring-4 ring-yellow-500">
                        <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/chief-finance-officer.webp" alt="chief-finance-officer moonstar builders" loading="lazy">
                    </div>
                    <div class="w-full mt-4 text-center">
                        <h3 class="text-xl font-bold text-black capitalize">Mohammed khizer pasha</h3>
                        <p class="mt-1 text-base font-medium text-yellow-600 capitalize">Chief Finance Officer</p>
                    </div>
                </div>

                <div class="w-full flex flex-col items-center" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-white ring-4 ring-yellow-500">
                        <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/digital-marketing-manager.jpg" alt="sales-executive-1 moonstar builders" loading="lazy">
                    </div>
                    <div class="w-full mt-4 text-center">
                        <h3 class="text-xl font-bold text-black capitalize">Syed Momin</h3>
                        <p class="mt-1 text-base font-medium text-yellow-600 capitalize">Digital Marketing Manager</p>
                    </div>
                </div>

                <div class="w-full flex flex-col items-center" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-white ring-4 ring-yellow-500">
                        <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/company-secretory-new.jpg" alt="company-secretory moonstar builders" loading="lazy">
                    </div>
                    <div class="w-full mt-4 text-center">
                        <h3 class="text-xl font-bold text-black capitalize">Suguna</h3>
                        <p class="mt-1 text-base font-medium text-yellow-600 capitalize">Company Secretory</p>
                    </div>
                </div>
                
                <div class="w-full flex flex-col items-center" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-white ring-4 ring-yellow-500">
                        <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/chief-sales-executive.jpeg" alt="chief-sales-executive moonstar builders" loading="lazy">
                    </div>
                    <div class="w-full mt-4 text-center">
                        <h3 class="text-xl font-bold text-black capitalize">Vasantha Bai</h3>
                        <p class="mt-1 text-base font-medium text-yellow-600 capitalize">Chief Sales Executive</p>
                    </div>
                </div>
            </div>

            <h2 class="mt-10 text-2xl font-bold text-black text-center">Our Team</h2>

            <div class="swiper w-full h-auto mt-6">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="w-full h-56 rounded-lg overflow-hidden shadow border-4 border-yellow-500">
                <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/sales-executive-1.jpg" alt="Sales Executive moonstar builders" loading="lazy">
            </div>
            <div class="p-5">
                <h3 class="mt-4 text-xl font-bold text-black capitalize">Viji</h3>
                <p class="mt-1 text-base font-medium text-gray-700 capitalize">Sales Executive</p>
            </div>
        </div>

        <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="w-full h-56 rounded-lg overflow-hidden shadow border-4 border-yellow-500">
                <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/sales-executive-2-2.png" alt="Sales Executive moonstar builders" loading="lazy">
            </div>
            <div class="p-5">
                <h3 class="mt-4 text-xl font-bold text-black capitalize">Siddiq</h3>
                <p class="mt-1 text-base font-medium text-gray-700 capitalize">Sales Executive</p>
            </div>
        </div>

        <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="w-full h-56 rounded-lg overflow-hidden shadow border-4 border-yellow-500">
                <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/sales-executive-3-1.jpg" alt="Sales Executive moonstar builders" loading="lazy">
            </div>
            <div class="p-5">
                <h3 class="mt-4 text-xl font-bold text-black capitalize">Deepa</h3>
                <p class="mt-1 text-base font-medium text-gray-700 capitalize">Sales Executive</p>
            </div>
        </div>

        <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="w-full h-56 rounded-lg overflow-hidden shadow border-4 border-yellow-500">
                <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/sales-executive-4.jpg" alt="Sales Executive moonstar builders" loading="lazy">
            </div>
            <div class="p-5">
                <h3 class="mt-4 text-xl font-bold text-black capitalize">B Govind Raju</h3>
                <p class="mt-1 text-base font-medium text-gray-700 capitalize">Sales Executive</p>
            </div>
        </div>
        
         <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <div class="w-full h-56 rounded-lg overflow-hidden shadow border-4 border-yellow-500">
                <img class="w-full h-full object-cover object-top" src="https://moonstarbuilders.com/assets/team/sales-executive-5.jpg" alt="Sales Executive moonstar builders" loading="lazy">
            </div>
            <div class="p-5">
                <h3 class="mt-4 text-xl font-bold text-black capitalize">Srinivasa</h3>
                <p class="mt-1 text-base font-medium text-gray-700 capitalize">Sales Executive</p>
            </div>
        </div>
        
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>







        </div>
    </div>
</section>

<section class="w-full bg-black lg:py-20">
    <div class="container mx-auto lg:p-[10%] xl:px-8 xl:py-0">
        <h2 class="pt-8 px-6 lg:p-0 text-4xl font-bold text-white">Our Values</h2>
        <div class="w-full px-6 py-8 space-y-6 md:space-y-0 lg:px-0 md:grid md:grid-cols-3 items-start gap-6">
            <div class="w-full">
               <!-- <h3 class="w-full hidden md:flex items-center gap-2 text-lg text-white ">01</h3> -->

                <!--<img src="https://www.webalive.com.au/wp-content/uploads/2019/07/Group-359.png" class="mt-8 h-8" alt="icon image">-->
                <img width="50" height="50" src="https://img.icons8.com/?size=100&id=47076&format=png&color=ffffff" alt="property" class="value-images"/>

                <h3 class="mt-4 text-2xl font-bold text-white">Respect</h3>
                <p class="mt-2 text-base text-white">At Moonstar Land Developers and Builders, we are committed to delivering exceptional quality and reliability in every project. Our journey from a small-scale venture to a leading name in the real estate industry exemplifies our dedication to excellence and ethical business practices, guided by Mr. Ghouse Pasha. We prioritize adherence to all regulations, ensuring trust and transparency.</p>
            </div>
            <div class="w-full">
              <!--   <h3 class="w-full hidden md:flex items-center gap-2 text-lg text-white ">02</h3> -->

                <!--<img src="https://www.webalive.com.au/wp-content/uploads/2019/07/Group-359.png" class="mt-8 h-8" alt="icon image">-->
                <img width="50" height="50" src="https://img.icons8.com/?size=100&id=WYzGT5m4f0qO&format=png&color=ffffff" alt="property" class="value-images"/>
                <h3 class="mt-4 text-2xl font-bold text-white">Integrity</h3>
                <p class="mt-2 text-base text-white">Our evolution marked a significant milestone as we continually innovate with cutting-edge designs and sustainable solutions. Our large-scale projects are known for meticulous execution, high standards, and customer-centric approaches. We create homes that promote well-being and harmony, following Vastu Shastra principles for positive energy and prosperity.</p>
            </div>
            <div class="w-full">
                <!-- <h3 class="w-full hidden md:flex items-center gap-2 text-lg text-white ">03</h3> -->

                <!--<img src="https://www.webalive.com.au/wp-content/uploads/2019/07/Group-359.png" class="mt-8 h-8" alt="icon image">-->
                <img width="50" height="50" src="https://img.icons8.com/?size=100&id=Zx9AHZpUAdVf&format=png&color=ffffff" alt="property" class="value-images"/>
                
                <h3 class="mt-4 text-2xl font-bold text-white">Excellence</h3>
                <p class="mt-2 text-base text-white">With over 25 years of experience, Mr. Ghouse Pasha leads us to new heights, creating opportunities and realizing ambitious goals. Our legacy of trust, quality, and progress positions us as leaders in the dynamic real estate industry, promoting sustainable growth and prosperity for both local and international clients.</p>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{asset('assets/counter.js')}}"></script>
<script>
    $('#about-counter-years').counter({countFrom: 0,countTo: 25,duration: 3000});
    $('#about-counter-projects').counter({countFrom: 0,countTo: 25,duration: 3000});
    $('#about-counter-upcoming').counter({countFrom: 0,countTo: 07,duration: 3000});
    $('#about-counter-delivered').counter({countFrom: 0,countTo: 100,duration: 3000});
    $('#info-counter-years').counter({countFrom: 0,countTo: 25,duration: 5000});
    $('#info-counter-projects').counter({countFrom: 0,countTo: 25,duration: 5000});
    $('#info-counter-delivered').counter({countFrom: 0,countTo: 400,duration: 5000});
    
    var historyCarousel = new Splide('.splide', {
        direction: 'ttb',
        height: '26rem',
        perPage: 2,
        focus: 'center',
        arrows: false,
        pagination: false,
        autoHeight: true,
    }).mount();

    $('.history-years').on('click', function(){
        var slide = $(this).data('history-item');
        historyCarousel.go(parseInt(slide));
    });
    $('#history-arrow-up').on('click', function(){
        historyCarousel.go('-1');
    });
    $('#history-arrow-down').on('click', function(){
        historyCarousel.go('+1');
    });

    historyCarousel.on('moved', function(newIndex){
        $('#current-history').text(`0${newIndex+1}`)
        $('.history-years').each(function(){
            $(this).removeClass('text-lg font-bold text-black');
        });
        $(`.history-years[data-history-index="${newIndex+1}"]`).addClass('text-lg font-bold text-black');
    });
</script>
<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            980: {
                slidesPerView: 3,
            },
            1250: {
                slidesPerView: 4,
            }
        }
    });
    // const swiper = new Swiper('.swiper', {
    //     loop: true,
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //     breakpoints: {
    //         640: {
    //             slidesPerView: 2,
    //         },
    //         980: {
    //             slidesPerView: 3,
    //         },
    //         1250: {
    //             slidesPerView: 4,
    //         }
    //     }
    // });
</script>
@endpush
</x-frontend-layout>