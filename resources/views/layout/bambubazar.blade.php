<x-frontend-layout>
<x-slot:title>
    Bambubazar Commercial Street Layout
</x-slot:title>

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<style>
.splide__slide img {
    width: 100%;
    height: auto;
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

<main class="w-full bg-gray-100">
    <div class="container mx-auto p-8 pb-12 flex flex-col items-start gap-6 lg:flex-row">
        <article class="w-full max-w-5xl">
            {{-- thumbnails --}}
            <div>
                <div id="image-carousel" class="splide" aria-label="Beautiful Images">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_2.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_1.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_6.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_5.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_3.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_14.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_16.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_17.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_21.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_19.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="thumbnail-carousel" class="splide mt-2">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_2.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_1.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_6.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_5.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_3.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_14.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_16.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_17.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_21.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/bambubazar/PLOT 3_View_19.jpg')}}" alt="Moonstar Ujwala Layout">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            {{-- property details --}}
            <section class="w-full mt-6 bg-white rounded-md p-4 pb-6">
                <div class="w-full">
                    <h1 class="text-3xl font-black text-blue-900 capitalize">Bambubazar Commercial Street Layout</h1>
                    <address class="mt-2 text-gray-600">Chennai to Manglore National Highway, Road Number 234</address>
                </div>
    
                {{-- tabs --}}
                <div class="w-full mt-6">
                    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200">
                        <ul class="flex flex-nowrap -mb-px propety-tab-links overflow-x-auto">
                            <li class="me-2 min-w-fit">
                                <button data-tab="propertyDetails" class="property-tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 tab-active">Property Details</button>
                            </li>
                            <li class="me-2 min-w-fit">
                                <button data-tab="siteMeasurements" class="property-tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Site Measurements</button>
                            </li>
                            <li class="me-2 min-w-fit">
                                <button data-tab="layoutPlan" class="property-tab-link inline-block p-4 border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 rounded-t-lg" aria-current="page">Layout Plan</button>
                            </li>
                            <li class="me-2 min-w-fit">
                                <button data-tab="layoutVideo" class="property-tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Video</button>
                            </li>
                            <li class="me-2 min-w-fit">
                                <button data-tab="locationMap" class="property-tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Location</button>
                            </li>
                            <li class="me-2 min-w-fit">
                                <button data-tab="nearestLocations" class="property-tab-link inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">Nearest Locations</button>
                            </li>
                        </ul>
                    </div>
                    {{-- property details --}}
                    <div class="w-full mt-4 tab-details" id="propertyDetails">
                        <ul style="list-style: disc; padding-left: 2rem;">
                            <li>Spread around 20 Gunt Acres</li>
                            <li>30 Feet Tar Road</li>
                            <li>Rain water flow drainage</li>
                            <li>Under drainage system</li>
                            <li>Water facility 24/7</li>
                            <li>Street lights</li>
                            <li>Walking track</li>
                            <li>Layout surrounded by compound</li>
                            <li>Footpath</li>
                            <li>All banks provide loans</li>
                            <li>Surrounded by trees and plants</li>
                        </ul>
                        <p class="font-bold mt-4">Other Details</p>
                        <ul style="list-style: disc; padding-left: 2rem; margin-top: 1rem;">
                            <li>Panchayati E khata </li>
                            <li>DC conversion </li>
                            <li>Town and Country planning approval join Commonsioner Banglore and Assistent commissioner Chikkaballapur district approve </li>
                            <li>Layout to airport 40 min route</li>
                            <li>Chennai to manglore national highway, road number 234</li>
                        </ul>
                    </div>
                    <div class="w-full mt-4 tab-details" id="siteMeasurements">
                        <style>
                            #siteMeasurements {
                                width: 100%;
                                overflow-x: auto;
                            }
                            #siteMeasurements table {
                                width: 100%;
                                border: 1px black solid;
                                border-collapse: collapse;
                                text-align: center;
                                min-width: 800px;

                                th, tr, td {
                                    border: 1px black solid;
                                    padding: 5px;
                                }
                            }
                        </style>
                        <table border="1" style="border-collapse: collapse;">
                          <thead>
                            <tr>
                              <th>Site Number</th>
                              <th>North (ft)</th>
                              <th>South (ft)</th>
                              <th>East (ft)</th>
                              <th>West (ft)</th>
                              <th>Area (sq ft)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>81</td>
                              <td>81</td>
                              <td>20</td>
                              <td>20</td>
                              <td>1620</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>13</td>
                              <td>13</td>
                              <td>20</td>
                              <td>20</td>
                              <td>260</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-full mt-4 tab-details" id="layoutPlan">
                        <img src="{{asset('assets/bambubazar/PLOT 3_View_2.jpg')}}" alt="Layout Full view">
                    </div>
                    <div class="w-full mt-4 tab-details" id="layoutVideo">
                        <div class="w-full h-20 bg-gray-100 flex items-center justify-center">
                            <p class="text-sm text-gray-600">No Data Available</p>
                        </div>
                    </div>
                    <div class="w-full mt-4 tab-details" id="locationMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3881.140690472755!2d78.056817!3d13.403614000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTPCsDI0JzEzLjAiTiA3OMKwMDMnMjQuNSJF!5e0!3m2!1sen!2sin!4v1720851175482!5m2!1sen!2sin" class="w-full h-[40dvh]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w-full mt-4 tab-details" id="nearestLocations">
                        <ul class="w-full mt-4 grid md:grid-cols-2 lg:grid-cols-3">
                            <li><b>Airport:</b> <span>40 Minutes</span></li>
                        </ul>
                    </div>
                </div>
            </section>
        </article>

        <aside class="w-full max-w-md lg:sticky top-4">
            <div class="w-full bg-blue-900 px-6 py-8 shadow-md">
                <h2 class="text-xl font-bold text-white">Request A Callback</h2>
    
                <form action="{{route('enquiry.store')}}" method="POST" class="w-full mt-6">
                    @csrf
                    <input type="hidden" name="property" value="Bambubazar Commercial Street Layout">
                    <div>
                        <label for="customer_name" class="block mb-2 text-sm font-medium text-white">Full name</label>
                        <input type="text" id="customer_name" name="customer_name" class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your Name" required />
                    </div>
                    <div class="mt-4">
                        <label for="customer_phone" class="block mb-2 text-sm font-medium text-white">Phone Number</label>
                        <input type="tel" id="customer_phone" name="customer_phone" class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your Phone Number" minlength="10" maxlength="16" required />
                    </div>
                    <div class="mt-4">
                        <label for="customer_email" class="block mb-2 text-sm font-medium text-white">Email</label>
                        <input type="email" id="customer_email" name="customer_email" class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your Email" />
                    </div>
                    <div class="mt-4">
                        <label for="customer_message" class="block mb-2 text-sm font-medium text-white">Request Message</label>
                        <textarea id="customer_message" name="customer_message" rows="3" class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Request Message"></textarea>
                    </div>
                    <button type="submit" class="w-full mt-6 py-2.5 px-5 text-sm font-bold text-blue-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:ring-4 focus:ring-blue-600">Send Request</button>
                </form>
            </div>

            @if (Session::has('success'))
            <div class="w-full mt-4 bg-green-200 p-4 text-green-900 font-medium shadow-md enquiryResponseMessage">
                Enquiry send successfully! Our team will get in touch with you soon.
            </div>
            @endif

            @if (Session::has('error'))
            <div class="w-full mt-4 bg-red-200 p-4 text-red-900 font-medium shadow-md enquiryResponseMessage">
                Could not save your message. Thanks for contacting us. Please try again.
            </div>
            @endif
        </aside>
    </div>
</main>

{{-- Upcoming Layout Design --}}
<section class="w-full py-10 bg-gray-100">
    <div class="container mx-auto pb-6 px-8">
        <h2 class="text-2xl font-extrabold text-gray-900">Other Layouts</h2>

        <!-- Slider main container -->
        <div class="swiper w-full h-auto mt-6">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
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
                <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
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
                <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow opacity-60">
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
                <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow opacity-60">
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
                <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow opacity-60">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{asset('assets/singapoor-layout-3d.jpg')}}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Thunkbund Layout</h5>
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

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
document.addEventListener( 'DOMContentLoaded', function () {
    const main = new Splide( '#image-carousel',{
        type      : 'fade',
        // fixedHeight: 600,
        rewind    : true,
        pagination: false,
        arrows    : false,
        lazyLoad: 'nearby',
    });
    const thumbnails = new Splide( '#thumbnail-carousel', {
        fixedWidth      : 104,
        // fixedHeight     : 58,
        gap         : 10,
        rewind      : true,
        pagination  : false,
        isNavigation: true,
        lazyLoad: 'nearby',
        // direction: 'ttb',
        // height   : 'auto',
        breakpoints : {
            600: {
                direction: 'ltr',
                fixedWidth : 60,
                fixedHeight: 'auto',
            },
        },
    });

    main.sync( thumbnails );
    main.mount();
    thumbnails.mount();
});
$(document).ready(function(){
    setTimeout(() => {
        $('.enquiryResponseMessage').hide()
    }, 5000);

    $('.tab-details').hide()
    $('.tab-details#propertyDetails').show()
    $('.property-tab-link').on('click', function(){
        $('.property-tab-link').removeClass('tab-active')
        $('.tab-details').hide()
        $(this).addClass('tab-active')
        const tab = $(this).data('tab');
        $(`.tab-details#${tab}`).show()
        console.log(tab)
    })
});
</script>
@endpush
</x-frontend-layout>