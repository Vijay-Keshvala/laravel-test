<x-frontend-layout>
<x-slot:title>
    Home
</x-slot:title>

@push('styles')
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

<main class="w-full xl:h-[80dvh] overflow-hidden relative">
    <!--<video  src="{{asset('assets/moonstar-video-2.mp4')}}" playsinline loop muted autoplay poster="https://images.unsplash.com/photo-1605276373954-0c4a0dac5b12?q=80" class="w-full">-->
        <img src="{{asset('assets/moonstar-upcoming-project-banner.webp')}}" alt="" class="w-full h-full object-cover">
    </video>
</main>

<!--<main class="w-full h-[60dvh] lg:h-[80dvh] overflow-hidden relative">-->
<!--    <video  src="{{asset('assets/singapore/singapore-layout-3d-video.mp4')}}" playsinline loop muted autoplay poster="https://images.unsplash.com/photo-1605276373954-0c4a0dac5b12?q=80" class="w-full h-full object-cover">-->
        <!--poster="https://images.unsplash.com/photo-1605276373954-0c4a0dac5b12?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" -->
        <!--<source src="{{asset('assets/singapore/singapore-layout-3d-video.mp4')}}" type="video/mp4">-->
        <!--<img src="https://images.unsplash.com/photo-1605276373954-0c4a0dac5b12?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-full h-full object-cover">-->
<!--    </video>-->
    <!--<img src="https://images.unsplash.com/photo-1605276373954-0c4a0dac5b12?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-full h-full object-cover" id="hero-image-tag">-->

<!--    <div class="w-full h-full absolute top-0 left-0 bg-slate-800 bg-opacity-70 hidden">-->
<!--        <div class="w-full h-full p-4 flex flex-col items-center justify-center lg:items-start lg:max-w-screen-xl lg:mx-auto">-->
<!--            <h1 class="sr-only">Moonstar Builders</h1>-->
<!--            <h2 class="text-4xl max-w-sm lg:max-w-md lg:text-4xl 2xl:text-5xl 2xl:max-w-lg font-extrabold text-white drop-shadow-md text-center lg:text-left animate-delay-300 animate-fade-left" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1600">We Offer You The Best And Safe Land Layout To Build Your Dream Home</h2>-->
<!--        </div>-->
<!--    </div>-->
<!--</main>-->

{{-- Upcoming Layout Design --}}
<section class="w-full mt-6h hidden">
    <div class="container mx-auto py-6 px-4">
        <h2 class="text-2xl font-extrabold text-blue-900">Our Layout Designs</h2>

        <!-- Slider main container -->
        <div class="swiper w-full h-auto mt-6">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide max-w-lg bg-white border border-gray-200 rounded-lg shadow" style="width:500px;">
                    <a href="{{route('layout.singapore')}}">
                        <img class="rounded-t-lg" src="{{asset('assets/singapoor-layout-3d.jpg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{route('layout.singapore')}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Singapore Layout</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="{{route('layout.singapore')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide max-w-lg bg-white border border-gray-200 rounded-lg shadow" style="width:500px;">
                    <a href="{{route('layout.ujwala')}}">
                        <img class="rounded-t-lg" src="{{asset('assets/ujwala/Ujjwala_View_2.jpg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{route('layout.ujwala')}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ujwala Layout</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    
                        <a href="{{route('layout.ujwala')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide max-w-lg bg-white border border-gray-200 rounded-lg shadow" style="width:500px;">
                    <a href="{{route('layout.bambubazar')}}">
                        <img class="rounded-t-lg" src="{{asset('assets/bambubazar/PLOT%203_View_2.jpg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{route('layout.bambubazar')}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Bambubazar Layout</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    
                        <a href="{{route('layout.bambubazar')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide max-w-lg bg-white border border-gray-200 rounded-lg shadow" style="width:500px;">
                    <a href="{{route('layout.tankbund')}}">
                        <img class="rounded-t-lg" src="{{asset('assets/tankbund/Plot 4_1.jpg')}}" alt="Tank Bund Layout" />
                    </a>
                    <div class="p-5">
                        <a href="{{route('layout.tankbund')}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Tank Bund Gated Community</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">Tank Bund Gated Community is a layout located in the center of Chintamani town.</p>
    
                        <a href="{{route('layout.tankbund')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide max-w-lg bg-white border border-gray-200 rounded-lg shadow opacity-60" style="width:500px;">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/singapoor-layout-3d.jpg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Samruddi Nagar</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    
                        <p class="text-lg font-bold text-red-500">Coming Soon</p>
                        <a href="#" class="hidden inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide max-w-lg bg-white border border-gray-200 rounded-lg shadow opacity-60" style="width:500px;">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/singapoor-layout-3d.jpg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Kalparuksha Layout</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    
                        <p class="text-lg font-bold text-red-500">Coming Soon</p>
                        <a href="#" class="hidden inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
@if (count($layouts))
<section class="w-full mt-6">
    <div class="container mx-auto py-6 px-4">
        <h2 class="text-2xl font-extrabold text-blue-900" data-aos="fade-up" data-aos-duration="1200">Our Layout Designs</h2>

        <!-- Slider main container -->
        <div class="swiper w-full h-auto mt-6">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @foreach ($layouts->sortByDesc('status')->all() as $layout)
                    <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow overflow-hidden {{ $layout->status == 0 ? 'opacity-60' : '' }}">
                        <a type="button" href="{{ $layout->status == 0 ? '#' : route('layout', $layout->name_slug) }}">
                            @if (count($layout->media))
                                @if ($layout->media->where('media_location','thumbnail')->first())
                                <img class="rounded-t-lg" src="{{$layout->media->where('media_location','thumbnail')->first()->url}}" alt="{{$layout->name}}" />
                                @elseif ($layout->media->where('media_location','property-details')->first())
                                <img class="rounded-t-lg" src="{{$layout->media->where('media_location','property-details')->first()->url}}" alt="{{$layout->name}}" />
                                @elseif ($layout->media->where('media_location','description')->first())
                                <img class="rounded-t-lg" src="{{$layout->media->where('media_location','description')->first()->url}}" alt="{{$layout->name}}" />
                                @endif
                            @else
                            <img class="rounded-t-lg" src="{{asset('assets/layout-demo-image.jpg')}}" alt="" />
                            @endif
                        </a>
                        <div class="p-5">
                        <a href="{{ $layout->status == 0 ? '#' : route('layout', $layout->name_slug) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$layout->name}}</h5>
                        </a>
                        <div class="mb-3 font-normal text-gray-700 dark:text-gray-400 max-h-12 overflow-hidden">{!!$layout->description!!}</div>

                        @if (!$layout->status)
                        <p class="text-lg font-bold text-red-500 py-1">Coming Soon</p>
                        @else
                        <a href="{{ $layout->status == 0 ? '#' : route('layout', $layout->name_slug) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
@endif

{{-- Upcoming Layout Design --}}
<section class="w-full mt-6">
    <div class="container mx-auto py-6 px-4">
        <h2 class="text-2xl font-extrabold text-blue-900">Our Projects</h2>
        <p class="text-base font-medium">Dream big we are here to provide</p>

        <div class="openModalBtn w-full mt-6" data-modal-show="singaporLayoutModal">
            <div class="w-full lg:h-[50dvh] overflow-hidden relative rounded-xl">
                <img src="{{asset('assets/singapoor-layout-3d.jpg')}}" alt="Singapor Layout 3D" class="w-full h-full object-cover rounded-xl">

                <div class="w-full h-full absolute top-0 left-0 flex items-center justify-center bg-gray-800 bg-opacity-30">
                    <svg class="h-12 md:h-28 fill-white drop-shadow-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="m9 17 8-5-8-5z"></path></svg>
                </div>
            </div>
        </div>


        <div class="w-full mt-6 grid md:grid-cols-2 gap-4">
            <div class="w-full px-8 py-6 bg-gray-200 rounded-lg animate-fade-right animate-delay-500" data-aos="fade-up" data-aos-duration="1600">
                <h3 class="text-lg font-extrabold capitalize">Prime location</h3>
                <p class="w-full mt-4">Refers to a highly desirable or advantageous location, often characterized by factors such as proximity to amenities, good accessibility, low crime rates, and potential for future growth or development.</p>
            </div>
            <div class="w-full px-8 py-6 bg-gray-200 rounded-lg animate-fade-left animate-delay-500" data-aos="fade-up" data-aos-duration="1600">
                <h3 class="text-lg font-extrabold capitalize">Beside national highway</h3>
                <p class="w-full mt-4">Indicates that the land is situated adjacent to or in close proximity to a major national highway, providing excellent connectivity to other regions and facilitating easy transportation of goods and people.</p>
            </div>
            <div class="w-full px-8 py-6 bg-gray-200 rounded-lg animate-fade-right animate-delay-500" data-aos="fade-up" data-aos-duration="1600">
                <h3 class="text-lg font-extrabold capitalize">Underground electricity wiring</h3>
                <p class="w-full mt-4">Denotes the infrastructure setup where electrical wiring is installed underground rather than overhead on poles. This approach offers aesthetic benefits, reduces the risk of outages due to weather-related incidents, and minimizes the visual clutter of overhead power lines.</p>
            </div>
            <div class="w-full px-8 py-6 bg-gray-200 rounded-lg animate-fade-left animate-delay-500" data-aos="fade-up" data-aos-duration="1600">
                <h3 class="text-lg font-extrabold capitalize">Commercial & residential land</h3>
                <p class="w-full mt-4">Indicates that the land is zoned for both commercial and residential purposes, providing opportunities for various types of development such as retail establishments, office spaces, residential complexes, or mixed-use developments that combine both commercial and residential elements.</p>
            </div>
        </div>
    </div>
</section>

{{-- about us --}}
<section class="w-full lg:min-h-[70dvh] mt-10 bg-slate-100 bg-gradient-to-br from-blue-300 via-transparent to-blue-200 flex justify-center" id="about-section">
    <div class="container mx-auto py-12 px-4 grid lg:grid-cols-2 lg:items-center gap-8">
        <div class="w-full lg:px-6">
            <div class="max-w-screen-lg text-gray-700 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900">Why Choose Us</h2>
                <p class="mb-4 font-normal">Choosing Moon Star Builders for your real estate needs ensures a seamless experience designed entirely around you. Here's why our customers benefit.</p>
                <p class="mb-4 font-medium text-gray-800"><b>Tailored Excellence</b>: Each plot by Moon Star Builders is crafted with meticulous care, promising superior quality and attention to detail that aligns perfectly with your vision.</p>

<p class="mb-4 font-medium text-gray-800"><b>Personalized Service</b>: We prioritize your dreams and preferences, offering bespoke solutions that cater specifically to your lifestyle and aspirations.</p>

<p class="mb-4 font-medium text-gray-800"><b>Investment Confidence</b>: With Moon Star Builders, your investment is secured by our proven track record of delivering exceptional value and growth potential in every property.</p>

<p class="mb-4 font-medium text-gray-800"><b>Community Connection</b>: Our developments are more than just spaces; they are thriving communities enriched with amenities that enhance your everyday living experience.</p>

<p class="mb-4 font-medium text-gray-800"><b>Enduring Satisfaction</b>: From initial consultation to beyond move-in day, our commitment to customer satisfaction ensures a smooth and enjoyable journey.</p>
                <a href="/about" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                    Learn more
                    <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <div class="w-full max-w-xl grid grid-cols-2 gap-8 lg:justify-self-end">
            <div class="w-full p-2 bg-transparent rounded-lg">
                <h3 class="mt-0 text-blue-900 text-5xl md:text-6xl font-light" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1600"><span id="about-counter-years">25</span>+</h3>
                <p class="w-full mt-2 text-sm md:text-base max-w-xs">Years of Excellence</p>
            </div>
            <div class="w-full p-2 bg-transparent rounded-lg">
                <h3 class="mt-0 text-blue-900 text-5xl md:text-6xl font-light" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1600"><span id="about-counter-projects">25</span>+</h3>
                <p class="w-full mt-2 text-sm md:text-base max-w-xs">Projects Completed</p>
            </div>
            <div class="w-full p-2 bg-transparent rounded-lg">
                <h3 class="mt-0 text-blue-900 text-5xl md:text-6xl font-light" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1600"><span id="about-counter-upcoming">7</span>+</h3>
                <p class="w-full mt-2 text-sm md:text-base max-w-xs">Upcoming Projects</p>
            </div>
            <div class="w-full p-2 bg-transparent rounded-lg">
                <h3 class="mt-0 text-blue-900 text-5xl md:text-6xl font-light" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1600"><span id="about-counter-delivered">100</span>+</h3>
                <p class="w-full mt-2 text-sm md:text-base max-w-xs">Lakhs Sq. Ft. Delivered</p>
            </div>
        </div>
    </div>
</section>

{{-- vision n mission --}}
<section class="w-full mt-6 mb-6">
    <div class="container mx-auto py-6 px-4">
        <div class="w-full grid lg:grid-cols-2 gap-6">
            <div class="w-full h-full">
                <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="House" class="w-full h-full object-cover rounded-xl">
            </div>

            <div class="w-full space-y-4 divide-y divide-gray-300">
                <div class="w-full py-4" data-aos="flip-up" data-aos-duration="2000">
                    <h2 class="text-2xl font-extrabold text-blue-900">Our Goal</h2>
                    <p class="mt-4 text-base font-medium text-gray-700">Our goal is to transform India's real estate sector by embracing digital innovation, in line with the vision of our esteemed Prime Minister for a Digital India. Join us on this journey to revolutionize the industry and make digitalization a reality.</p>
                </div>
                <div class="w-full py-4" data-aos="flip-up" data-aos-duration="2000">
                    <h2 class="text-2xl font-extrabold text-blue-900">Our Mission</h2>
                    <p class="mt-4 text-base font-medium text-gray-700">Our mission is to turn our clients' dreams into reality through high-quality housing solutions. We aim to empower businesses with innovative technologies, improving processes and efficiency. Our goal is to consistently bring our clients’ visions to life, fostering growth and success.</p>
                </div>
                <div class="w-full py-4" data-aos="flip-up" data-aos-duration="2000">
                    <h2 class="text-2xl font-extrabold text-blue-900">Our Vision</h2>
                    <p class="mt-4 text-base font-medium text-gray-700">We aspire to be the most sought-after real estate developer, promoting sustainable growth and prosperity for both local and international clients. Our continuous innovation and commitment to excellence position us as leaders in the dynamic real estate industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full  hidden">
    <video id="vid2" class="w-full h-full object-cover" class="video-js" muted>
        <source src="{{asset('assets/singapore/singapore-layout-3d-video.mp4')}}" type="video/mp4">
    </video>
</section>


<!-- Singapore layout 3d video -->
<div id="singaporLayoutModal" class="flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full max-h-full bg-gray-700 bg-opacity-70" data-modal-show="singaporLayoutModal" data-aos="zoom-in-up" data-aos-duration="1200">
    <div class="relative p-4 w-full max-w-2xl max-h-full mx-auto">
        <!-- Modal content -->
        <div class="w-full h-fit relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between px-4 py-2 border-b rounded-t">
                <h3 class="md:text-xl font-semibold text-gray-900">
                    Singapore Layout Bangalore
                </h3>
                <button type="button" class="closeModalBtn text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="singaporLayoutModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="w-full p-4">
                <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/941129037?h=b6bfaf72b5&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{asset('assets/counter.js')}}"></script>
<script>
    // counts 
    $('#about-counter-years').counter({countFrom: 0,countTo: 25,duration: 3000});
    $('#about-counter-projects').counter({countFrom: 0,countTo: 25,duration: 3000});
    $('#about-counter-upcoming').counter({countFrom: 0,countTo: 7,duration: 3000});
    $('#about-counter-delivered').counter({countFrom: 0,countTo: 100,duration: 3000});
    
    
    // Modal
    $('#singaporLayoutModal').hide();
    $('.openModalBtn').on('click', function(){
        const modal = $(this).data('modal-show');
        $(`#${modal}`).show();
    })
    $('.closeModalBtn').on('click', function(){
        const modal = $(this).data('modal-hide');
        $(`#${modal}`).hide();
    })
    const player = videojs('vid2');
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
                slidesPerView: 3,
            }
        }
    });
    // const player2 = videojs('vid1', {
    //     loop: true,
    //     muted: true,
    // });
    // $('#hero-image-tag').hide();
    // var html5video = player.canPlayType;
    // if(!html5video){
    //     console.log('dsafsdf')
    //     $('#vid1').hide();
    //     $('#hero-image-tag').show();
    // }else{
    //     player2.play()
    //     player2.options.autoplay = true
    //     console.log('234234234')
    // }
</script>
<script src="https://player.vimeo.com/api/player.js"></script>
@endpush
</x-frontend-layout>
