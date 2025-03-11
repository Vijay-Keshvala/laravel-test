<x-frontend-layout>
    <x-slot:title>
        {{$layout->name}}
    </x-slot:title>

    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
        <style>
            .splide__slide img {
                width: 100%;
                height: auto;
            }

            .swiper-button-prev,
            .swiper-button-next {
                width: 50px;
                height: 50px;
                background-color: white;
                border-radius: 50px;
                box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            }

            .swiper-button-prev:hover,
            .swiper-button-next:hover {
                background-color: rgb(30 58 138 / 1);
            }

            .swiper-button-prev:after,
            .swiper-button-next:after {
                font-size: 16px !important;
                font-weight: 800;
                color: rgb(30 58 138 / 1);
            }

            .swiper-button-prev:hover:after,
            .swiper-button-next:hover:after {
                color: #FFFFFF !important;
            }
        </style>
    @endpush

    <main class="w-full bg-gray-100">
        <div class="container mx-auto px-4 pt-8 pb-12 flex flex-col items-start gap-6 lg:flex-row">
            <article class="w-full max-w-5xl">
                {{-- thumbnails --}}
                <div>
                    @if (count($medias))
                    <div id="image-carousel" class="splide" aria-label="Beautiful Images">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($medias as $media)
                                <li class="splide__slide">
                                    <img src="{{ asset($media->url) }}" alt="Moonstar Builders - {{$layout->name}}">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div id="thumbnail-carousel" class="splide mt-2">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach ($medias as $media)
                                <li class="splide__slide">
                                    <img src="{{ asset($media->url) }}" alt="Moonstar Builders - {{$layout->name}}">
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @else
                    <img class="w-full border border-gray-300" src="{{asset('assets/layout-demo-image.jpg')}}" alt="" />
                    @endif
                </div>

                {{-- property details --}}
                <section class="w-full mt-6 bg-white rounded-md p-4 pb-6">
                    <div class="w-full">
                        <h1 class="text-3xl font-black text-blue-900 capitalize">{{$layout->name}}</h1>
                        <address class="mt-2 text-gray-600">{{$layout->location}} </address>
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
                            @if ($layout->description)
                            {!! $layout->description !!}
                            @else
                            <div class="w-full h-20 bg-gray-100 flex items-center justify-center">
                                <p class="text-sm text-gray-600">No Data Available</p>  
                            </div>
                            @endif
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

                                    th,
                                    tr,
                                    td {
                                        border: 1px black solid;
                                        padding: 5px;
                                    }
                                }
                            </style>
                            @if ($layout->site_measurements)
                            {!! $layout->site_measurements !!}
                            @else
                            <div class="w-full h-20 bg-gray-100 flex items-center justify-center">
                                <p class="text-sm text-gray-600">No Data Available</p>  
                            </div>
                            @endif
                        </div>
                        <div class="w-full mt-4 tab-details" id="layoutPlan">
                            @if ($medias->where('media_location','property-detail')->first())
                            <img src="{{asset($medias->where('media_location','property-detail')->first()->url)}}" alt="Layout Full view">  
                            @else
                            <div class="w-full h-20 bg-gray-100 flex items-center justify-center">
                                <p class="text-sm text-gray-600">No Data Available</p>  
                            </div>
                            @endif
                        </div>
                        <div class="w-full mt-4 tab-details" id="layoutVideo">
                            @if ($layout->video)
                            {!! $layout->video !!}
                            @else
                            <div class="w-full h-20 bg-gray-100 flex items-center justify-center">
                                <p class="text-sm text-gray-600">No Data Available</p>  
                            </div>
                            @endif
                        </div>
                        <div class="w-full mt-4 tab-details" id="locationMap">
                            @if ($layout->google_map)
                            {!! $layout->google_map !!} 
                            @else
                            <div class="w-full h-20 bg-gray-100 flex items-center justify-center">
                                <p class="text-sm text-gray-600">No Data Available</p>  
                            </div>
                            @endif
                        </div>
                        <div class="w-full mt-4 tab-details" id="nearestLocations">
                            @if(count($nearbylocations))
                            <ul class="w-full mt-4 grid md:grid-cols-2 lg:grid-cols-3">
                                @forelse ($nearbylocations as $location)
                                    <li><b>{{$location->location_name}}:</b> <span>{{$location->distance}}</span></li>
                                @endforeach
                            </ul>
                            @else
                            <div class="w-full h-20 bg-gray-100 flex items-center justify-center">
                                <p class="text-sm text-gray-600">No Data Available</p>  
                            </div>
                            @endif
                        </div>
                    </div>
                </section>
            </article>

            <aside class="w-full max-w-md lg:sticky top-4">
                <div class="w-full bg-blue-900 px-6 py-8 shadow-md">
                    <h2 class="text-xl font-bold text-white">Request A Callback</h2>

                    <form action="{{route('enquiry.store')}}" method="POST" class="w-full mt-6">
                        @csrf
                        <input type="hidden" name="property" value="{{$layout->name}}">
                        <div>
                            <label for="customer_name" class="block mb-2 text-sm font-medium text-white">Full
                                name</label>
                            <input type="text" id="customer_name" name="customer_name"
                                class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Your Name" required />
                        </div>
                        <div class="mt-4">
                            <label for="customer_phone" class="block mb-2 text-sm font-medium text-white">Phone
                                Number</label>
                            <input type="tel" id="customer_phone" name="customer_phone"
                                class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Your Phone Number" minlength="10" maxlength="16" required />
                        </div>
                        <div class="mt-4">
                            <label for="customer_email" class="block mb-2 text-sm font-medium text-white">Email</label>
                            <input type="email" id="customer_email" name="customer_email"
                                class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Your Email" />
                        </div>
                        <div class="mt-4">
                            <label for="customer_message" class="block mb-2 text-sm font-medium text-white">Request
                                Message</label>
                            <textarea id="customer_message" name="customer_message" rows="3"
                                class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Request Message"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full mt-6 py-2.5 px-5 text-sm font-bold text-blue-900 focus:outline-none bg-white rounded-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:ring-4 focus:ring-blue-600">Send
                            Request</button>
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
    @if (count($layouts))
    <section class="w-full py-10 bg-gray-100">
        <div class="container mx-auto pb-6 px-8">
            <h2 class="text-2xl font-extrabold text-gray-900">Other Layouts</h2>

            <!-- Slider main container -->
            <div class="swiper w-full h-auto mt-6">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper py-4">
                    @foreach ($layouts as $layout)
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
            document.addEventListener('DOMContentLoaded', function () {
                const main = new Splide('#image-carousel', {
                    type: 'fade',
                    // fixedHeight: 600,
                    rewind: true,
                    pagination: false,
                    arrows: false,
                    lazyLoad: 'nearby',
                });
                const thumbnails = new Splide('#thumbnail-carousel', {
                    fixedWidth: 104,
                    // fixedHeight     : 58,
                    gap: 10,
                    rewind: true,
                    pagination: false,
                    isNavigation: true,
                    lazyLoad: 'nearby',
                    // direction: 'ttb',
                    // height   : 'auto',
                    breakpoints: {
                        600: {
                            direction: 'ltr',
                            fixedWidth: 60,
                            fixedHeight: 'auto',
                        },
                    },
                });

                main.sync(thumbnails);
                main.mount();
                thumbnails.mount();
            });
            $(document).ready(function () {
                setTimeout(() => {
                    $('.enquiryResponseMessage').hide()
                }, 5000);

                $('.tab-details').hide()
                $('.tab-details#propertyDetails').show()
                $('.property-tab-link').on('click', function () {
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