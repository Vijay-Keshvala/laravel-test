<x-frontend-layout>
<x-slot:title>
    Singapore Layout
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
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
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
                                <img src="{{asset('assets/singapore/Singapore_Layout_View_3.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_1.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_4.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_2.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_8.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_9.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_10.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_11.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_12.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_13.jpg')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="thumbnail-carousel" class="splide mt-2">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore_Layout_View_3.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_1.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_4.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_2.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_8.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_9.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_10.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_11.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_12.jpg')}}" alt="">
                            </li>
                            <li class="splide__slide">
                                <img src="{{asset('assets/singapore/Singapore Layout_View_13.jpg')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- property details --}}
            <section class="w-full mt-6 bg-white rounded-md p-4 pb-6">
                <div class="w-full">
                    <h1 class="text-3xl font-black text-blue-900 capitalize">Singapore Layout</h1>
                    <address class="mt-2 text-gray-600">Sidlagatta road, Chinpalli Station - 562105</address>
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
                        <p>
                        <b>Total Area:</b> 3.5 acres <br>
                        <b>Road Access:</b> Main road: 226 feet wide, connecting Chennai to Mangalore National Highway (Road Number 234) <br>
                        <b>Internal layout roads:</b> 30 feet wide concrete roads <br> <br>
                        
                        <b class="text-xl">Infrastructure:</b> <br>
                        <b>Drainage:</b> Underground rainwater drainage system <br>
                        <b>Water Supply:</b> 24/7 water facility <br>
                        <b>Lighting:</b> High-quality aluminum street lights with underground wiring <br>
                        <b>Electricity:</b> Underground electricity provided to individual sites <br> <br>
                        
                        <b>Amenities:</b> <br>
                        <b>Park:</b> Features seating and a pleasant atmosphere <br>
                        <b>Walking Track:</b> Well-maintained track for residents <br>
                        <b>Security:</b> 24/7 security with the entire layout surrounded by a compound wall <br> <br>
                        
                        <b>Additional Features:</b> <br>
                        <b>Rainwater Storage:</b> Reliable rainwater storage tank <br>
                        <b>Loan Facility:</b> Loans available from all banks <br>
                        <b>Greenery:</b> Surrounded by a variety of trees and plants, including palm and date trees <br> <br>
                        
                        <b>Approvals and Certifications:</b> Panchayati A Khata, DC Conversion <br>
                        <b>Approved by:</b> Town and Country Planning, Joint Commissioner Bangalore, and Assistant Commissioner Chikkaballapur District <br> <br>
                        
                        <b>Convenience:</b> <br>
                        <b>Train Station:</b> 2-minute walk <br>
                        <b>Airport:</b> 40-minute drive <br>
                        </p>
                        
                        <!--<ul style="list-style: disc; padding-left: 2rem;">
                            <li>Spread around 3.5 acers</li>
                            <li>Sub road  30 feet </li>
                            <li>Main road 226 feet</li>
                            <li>Underground Rain water flow drainage</li>
                            <li>Unwater racity 29tm</li>
                            <li>Street lights</li>
                            <li>⁠Underground electricity wires</li>
                            <li>Park ( Children's park and adult park)</li>
                            <li>Walking track</li>
                            <li>Layout surrounded by compound and security 24/7</li>
                            <li>Footpath</li>
                            <li>Rain water store tank</li>
                            <li>All Banks provide loans</li>
                            <li>reads sounding trees and plants (palm trees / date tress )</li>
                        </ul>
                        <p class="font-bold mt-4">Other Details</p>
                        <ul style="list-style: disc; padding-left: 2rem; margin-top: 1rem;">
                            <li>Panchayati E khata </li>
                            <li>DC conversion </li>
                            <li>Approved by Town and Country planning, join Commonsioner Banglore and Assistent commissioner Chikkaballapur district</li>
                            <li>Layout to airport 40 min route </li>
                            <li>Chennai to manglore national highway, road number 234</li>
                        </ul>
                        <ul class="list-disc pl-5 hidden">
                            <li><span class="text-green-500">&#10003;</span> Underground electrical wire</li>
                            <li class="mt-2"><span class="text-green-500">&#10003;</span> Road boundary With Date Palm</li>
                            <li class="mt-2"><span class="text-green-500">&#10003;</span> Layout With Royal Palm</li>
                            <li class="mt-2"><span class="text-green-500">&#10003;</span> Connected With Highway</li>
                        </ul>
                        <div class="site-mes-slider hidden overflow-x-auto">
                            <img src="{{asset('assets/singapore/site_mes_1.jpg')}}" alt="site-mes-1" style="width:250px;height:auto;" onclick="openModal('{{asset('assets/singapore/site_mes_1.jpg')}}')">
                            <img src="{{asset('assets/singapore/site_mes_2.jpg')}}" alt="site-mes-2" style="width:250px;height:auto;" onclick="openModal('{{asset('assets/singapore/site_mes_2.jpg')}}')">
                            <img src="{{asset('assets/singapore/site_mes_3.jpg')}}" alt="site-mes-3" style="width:250px;height:auto;" onclick="openModal('{{asset('assets/singapore/site_mes_3.jpg')}}')">
                         </div>
                        -->
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
                            <tr>
                                <th colspan="14">SITE MEASURMENTS OF Y HUNASENAHALLI<br>
                                    SURVEY NO.87/1 (3 acars 0 guntas)</th>
                            </tr>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th colspan="3">3</th>
                                <th colspan="3">4</th>
                                <th colspan="3">5</th>
                                <th colspan="3">6</th>
                            </tr>
                            <tr>
                                <th>SL<br> No.</th>
                                <th>SITE<br> No.</th>
                                <th colspan="3">NORTH</th>
                                <th colspan="3">SOUTH</th>
                                <th colspan="3">EAST</th>
                                <th colspan="3">WEST</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>30'0" <br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>S. No. <br> 81/2</td>
                                <td>30'0" <br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>62'0" <br>(18.90m)</td>
                                <td>203.44 <br>(sq ft)</td>
                                <td>S. No. <br> 81/3&4</td>
                                <td>62'0" <br> (18.90m)</td>
                                <td>203.44 <br>(sq ft)</td>
                                <td>Site No.2</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2</td>
                                <td>30'0" <br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>S. No. <br>81/2</td>
                                <td>30'0" <br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>62'0"<br> (18.90m)</td>
                                <td>203.44 <br>(sq ft)</td>
                                <td>Site No.1</td>
                                <td>62'0"<br> (18.90m)</td>
                                <td>203.44 <br>(sq ft)</td>
                                <td>Site No.3</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>3</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>S. No. <br>81/2</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>62'0" <br>(18.90m)</td>
                                <td>203.44 <br>(sq ft)</td>
                                <td>Site No.2</td>
                                <td>62'0"<br> (18.90m)</td>
                                <td>203.44 <br>(sq ft)</td>
                                <td>CA area</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>4</td>
                                <td>18'6" <br>(5.64m)</td>
                                <td>60.37 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>15'6"<br> (4.72m)</td>
                                <td>50.81 <br>(sq ft)</td>
                                <td>Site No.30</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.5</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>S.No.87/9</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>5</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.30</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.6</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.4</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>6</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.29</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.7</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.5</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>7</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.28</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.8</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.6</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>8</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.27</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.9</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.7</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>9</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.26</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.10</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.8</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>10</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.25</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.9</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>11</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.24</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.12</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>12</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m<br> Road</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.23</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.13</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.11</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>13</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.22</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.14</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.12</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>14</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.21</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.15</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.13</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>15</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.20</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.16</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.14</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>16</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0"<br> (9.14m)</td>
                                <td>98.39 <br>(sq ft)</td>
                                <td>Site No.19</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.17</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.15</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>17</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>45.85 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>54.18 <br>(sq ft)</td>
                                <td>Site No.18</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>S. No.87/12</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.2 <br>(sq ft)</td>
                                <td>Site No.16</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>18</td>
                                <td>16'0" <br>(5.03m)</td>
                                <td>54.17 <br>(sq ft)</td>
                                <td>Site No. <br>17</td>
                                <td>19'6" <br> (5.94m)</td>
                                <td>63.93 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>S.No. <br>87/12</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.19</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>19</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>16</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.18</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.20</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>20</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>15</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.19</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.21</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>21</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>14</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.20</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.22</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>22</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>13</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.21</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.23</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>23</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>12</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.22</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.24</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>24</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>11</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.23</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>25</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>10</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.26</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>26</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>9</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.25</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.27</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>27</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>8</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.26</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.28</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>28</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>7</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.27</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.29</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>29</td>
                                <td>30'0" <br>(19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>6</td>
                                <td>30'0"<br> (19.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br> Road</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.28</td>
                                <td>40'0"<br> (12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.30</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>30</td>
                                <td>45'6" <br>(13.87m)</td>
                                <td>149.32 <br>(sq ft)</td>
                                <td>Site No. <br>5 & 4</td>
                                <td>42'6" <br>(12.95m)</td>
                                <td>139.47 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.29</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>S. No.87/9</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>31</td>
                                <td>39'6" <br>(12.04m)</td>
                                <td>129.58 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>36'0" <br>(10.97m)</td>
                                <td>118.9 <br>(sq ft)</td>
                                <td>Site No.55</td>
                                <td>50'0"<br> (15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.32</td>
                                <td>50'0" <br>(15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>S. No.87/9</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>32</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.55</td>
                                <td>50'0"<br> (15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.33</td>
                                <td>50'0" <br>(15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.31</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>33</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.54</td>
                                <td>50'0"<br> (15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.34</td>
                                <td>50'0" <br>(15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.32</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>34</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.53</td>
                                <td>50'0"<br> (15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.35</td>
                                <td>50'0" <br>(15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.33</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>35</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.52</td>
                                <td>50'0"<br> (15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.36</td>
                                <td>50'0" <br>(15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.34</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>36</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.51</td>
                                <td>50'0"<br> (15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>50'0" <br>(15.24m)</td>
                                <td>161.46 <br>(sq ft)</td>
                                <td>Site No.35</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>37</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.50</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.38</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>38</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.49</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.39</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.37</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>39</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.48</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.40</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.38</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>40</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.47</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.41</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.39</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>41</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.46</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.42</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.40</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>42</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No.45</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.43</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.41</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>43</td>
                                <td>21'6" <br>(6.55m)</td>
                                <td>70.5 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>24'0" <br>(7.31m)</td>
                                <td>78.74 <br>(sq ft)</td>
                                <td>Site No.44</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>S. No. <br>87/12</td>
                                <td>40'0" <br>(12.19m)</td>
                                <td>131.25 <br>(sq ft)</td>
                                <td>Site No.42</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>44</td>
                                <td>24'0" <br>(7.31m)</td>
                                <td>78.74 <br>(sq ft)</td>
                                <td>Site No. <br>43</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>36'0" <br>(10.97m)</td>
                                <td>118.11 <br>(sq ft)</td>
                                <td>S. No. <br>87/12</td>
                                <td>41'6" <br>(12.65m)</td>
                                <td>136.82 <br>(sq ft)</td>
                                <td>Site No.45</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>45</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>42</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sdl <br>Road</td>
                                <td>41'6" <br>(12.65m)</td>
                                <td>136.82 <br>(sq ft)</td>
                                <td>Site No.44</td>
                                <td>48'0" <br>(14.63m)</td>
                                <td>157.45 <br>(sq ft)</td>
                                <td>Site No.46</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>46</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>41</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>48'0" <br>(14.63m)</td>
                                <td>157.45 <br>(sq ft)</td>
                                <td>Site No.45</td>
                                <td>54'6" <br>(16.61m)</td>
                                <td>179.04 <br>(sq ft)</td>
                                <td>Site No.47</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>47</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>40</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>54'6" <br>(16.61m)</td>
                                <td>179.04 <br>(sq ft)</td>
                                <td>Site No.46</td>
                                <td>61'0" <br>(18.59m)</td>
                                <td>200.73 <br>(sq ft)</td>
                                <td>Site No.48</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>48</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>39</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>61'0" <br>(18.59m)</td>
                                <td>200.73 <br>(sq ft)</td>
                                <td>Site No.47</td>
                                <td>67'6" <br>(20.57m)</td>
                                <td>225.36 <br>(sq ft)</td>
                                <td>Site No.49</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>49</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>38</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>67'6" <br>(20.57m)</td>
                                <td>225.36 <br>(sq ft)</td>
                                <td>Site No.48</td>
                                <td>74'0" <br>(22.56m)</td>
                                <td>248.92 <br>(sq ft)</td>
                                <td>Site No.50</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>50</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>37</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>74'0" <br>(22.56m)</td>
                                <td>248.92 <br>(sq ft)</td>
                                <td>Site No.49</td>
                                <td>80'6" <br>(24.54m)</td>
                                <td>267.2 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                            </tr>
                            <tr>
                                <td>51</td>
                                <td>51</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>36</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>77'0" <br>(23.47m)</td>
                                <td>267.2 <br>(sq ft)</td>
                                <td>9.00m <br>Road</td>
                                <td>83'0" <br>(25.30m)</td>
                                <td>290.63 <br>(sq ft)</td>
                                <td>Site No.52</td>
                            </tr>
                            <tr>
                                <td>52</td>
                                <td>52</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>35</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>83'0" <br>(25.30m)</td>
                                <td>290.63 <br>(sq ft)</td>
                                <td>Site No.51</td>
                                <td>90'0" <br>(27.43m)</td>
                                <td>323 <br>(sq ft)</td>
                                <td>Site No.53</td>
                            </tr>
                            <tr>
                                <td>53</td>
                                <td>53</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>34</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>90'0" <br>(27.43m)</td>
                                <td>323 <br>(sq ft)</td>
                                <td>Site No.52</td>
                                <td>96'0" <br>(29.26m)</td>
                                <td>339.94 <br>(sq ft)</td>
                                <td>Site No.54</td>
                            </tr>
                            <tr>
                                <td>54</td>
                                <td>54</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>Site No. <br>33</td>
                                <td>30'0" <br>(9.14m)</td>
                                <td>98.42 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>96'0" <br>(29.26m)</td>
                                <td>339.94 <br>(sq ft)</td>
                                <td>Site No.53</td>
                                <td>103'0" <br>(31.40m)</td>
                                <td>357.14 <br>(sq ft)</td>
                                <td>Site No.55</td>
                            </tr>
                            <tr>
                                <td>55</td>
                                <td>55</td>
                                <td>66'0" <br>(20.12m)</td>
                                <td>215.67 <br>(sq ft)</td>
                                <td>Site No. <br>31 & 32</td>
                                <td>57'0" <br>(17.37m)</td>
                                <td>183.75 <br>(sq ft)</td>
                                <td>cmy-sidl <br>Road</td>
                                <td>103'0" <br>(31.40m)</td>
                                <td>357.14 <br>(sq ft)</td>
                                <td>Site No.54</td>
                                <td>115'0" <br>(35.06m)</td>
                                <td>377.13 <br>(sq ft)</td>
                                <td>S. No. <br>87/9</td>
                            </tr>
                        </table>
                    </div>
                    <div class="w-full mt-4 tab-details" id="layoutPlan">
                        <img src="{{asset('assets/singapore/Singapore Layout_View_1.jpg')}}" alt="Layout Full view">
                    </div>
                    <div class="w-full mt-4 tab-details" id="layoutVideo">
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/941129037?h=b6bfaf72b5&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
                    </div>
                    <div class="w-full mt-4 tab-details" id="locationMap">
                        <iframe class="w-full h-[40dvh]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.175574117725!2d77.9448401!3d13.401452800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb20300282135fd%3A0x5829e27fecc2c79b!2sSingapore%20layout!5e0!3m2!1sen!2sin!4v1716921025086!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="w-full mt-4 tab-details" id="nearestLocations">
                        <ul class="w-full mt-4 grid md:grid-cols-2 lg:grid-cols-3">
                            <li><b>Pharmacy:</b> <span>1KM</span></li>
                            <li><b>Super Market:</b> <span>2KM</span></li>
                            <li><b>Hospital:</b> <span>1KM</span></li>
                            <li><b>School:</b> <span>3KM</span></li>
                            <li><b>Bank:</b> <span>6KM</span></li>
                            <li><b>Rail Station:</b> <span>3KM</span></li>
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
                    <input type="hidden" name="property" value="Singapore Layout">
                    <div>
                        <label for="customer_name" class="block mb-2 text-sm font-medium text-white">Full name <span class="text-red-500">*</span></label>
                        <input type="text" id="customer_name" name="customer_name" class="bg-transparent border border-white text-white placeholder:text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Your Name" required />
                    </div>
                    <div class="mt-4">
                        <label for="customer_phone" class="block mb-2 text-sm font-medium text-white">Phone Number <span class="text-red-500">*</span></label>
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
                <div class="swiper-slide max-w-sm bg-white border border-gray-200 rounded-lg shadow">
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
<script>
    function openModal(imgSrc) {
      var modal = document.getElementById('modal');
      var modalImg = document.getElementById("modal-img");
      modal.style.display = "block";
      modalImg.src = imgSrc;

      var span = document.getElementsByClassName("close")[0];
      span.onclick = function() {
        modal.style.display = "none";
      }
    }
    </script>

@endpush
</x-frontend-layout>
