<x-app-layout>
    @push('styles')
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <style>
            .form-card {
                text-align: left
            }

            #msform fieldset:not(:first-of-type) {
                display: none
            }

            .purple-text {
                color: #673AB7;
                font-weight: normal
            }

            .steps {
                font-size: 25px;
                color: gray;
                margin-bottom: 10px;
                font-weight: normal;
                text-align: right
            }

            .fieldlabels {
                color: gray;
                text-align: left
            }

            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                color: lightgrey;
                display: flex;
                justify-content: space-between;
            }

            #progressbar .active {
                color: rgb(37 99 235 / var(--tw-bg-opacity));
            }

            #progressbar li {
                list-style-type: none;
                font-size: 15px;
                font-weight: 400
            }

            #progressbar li:before {
                display: block;
                width: 2px;
                height: 2px;
                /* line-height: 45px; */
                /* color: #ffffff; */
                background: lightgray;
                border-radius: 90%;
                margin: 12px;
            }

            .progress {
                height: 20px
            }

            .progress-bar {
                background-color: rgb(37 99 235 / var(--tw-bg-opacity));
            }

            .fit-image {
                width: 100%;
                object-fit: cover
            }
        </style>
    @endpush

    <!-- actions -->
    <div class="w-full flex justify-between items-center">
        <h2 class="text-lg font-semibold text-gray-800">Add layout</h2>
        <a href="{{ route('layouts.index') }}"
            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
            <i class="bi bi-arrow-left"></i> Go Back
        </a>
    </div>

    <div class="mt-2 bg-white overflow-hidden shadow-sm sm:rounded-lg grid">
        <div class="p-6 py-8 text-gray-900">

            <form id="msform" action="{{ route('layouts.store') }}" method="POST" class="max-w-xl mx-auto" enctype="multipart/form-data">
                @csrf
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active" id="layout"><strong>Layout</strong></li>
                    <li id="description"><strong>Description</strong></li>
                    <li id="measurement"><strong> Measurements</strong></li>
                    <li id="personal"><strong>Near by location</strong></li>
                    {{-- <li id="payment"><strong>Media</strong></li> --}}
                </ul>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- fieldsets -->
                <!-- form1 -->
                <fieldset>
                    <div class="form-card mt-12">
                        <div class="grid w-full gap-4 mt-o">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 w-100">Name <span class="text-red-500">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"
                                    placeholder="name" required>
                            </div>
                        </div>

                        <div class="grid w-full gap-4 mt-4">
                            <div>
                                <label for="location"
                                    class="block mb-2 text-sm font-medium text-gray-900">Address</label>    
                                <input type="text" id="location" name="location"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"
                                    placeholder="address">
                            </div>
                        </div>

                        <div class="grid w-full gap-4 mt-4">
                            <div>
                                <label for="state" class="block mb-2 text-sm font-medium text-gray-900">State <span class="text-red-500">*</span></label>
                                <select name="state" id="state" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" required>
                                    <option value="">Select a state</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>    
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid w-full gap-4 mt-4">
                            <div>
                                <label for="google_map" class="block mb-2 text-sm font-medium text-gray-900">Google map
                                    embed code</label>
                                <textarea id="google_map" name="google_map" placeholder="Paste code here..."
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"></textarea>
                            </div>
                        </div>

                        <div class="grid w-full gap-4 mt-4">
                            <div>
                                <label for="video" class="block mb-2 text-sm font-medium text-gray-900">Vimeo video embed code</label>
                                <textarea id="video" name="video" placeholder="Paste code here..."
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"></textarea>
                            </div>
                        </div>

                        <div class="grid w-full gap-4 mt-4">
                            <div>
                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status <span class="text-red-500">*</span></label>
                                <select id="status" name="status" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5">
                                    <option value="0" selected>Coming soon</option>
                                    <option value="1">Live</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="next"
                        class="next action-button text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 float-right focus:outline-none"
                        value="Next" />
                </fieldset>

                <!-- form2 -description -->
                <fieldset>
                    <div class="form-card mb-20 mt-8">
                        <div class="grid w-full gap-4">
                            <div class="h-48">
                                <label for="description"
                                    class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                                <div id="editor">
                                    {!! old('description') !!}
                                </div>
                                <textarea id="description-field" name="description" cols="30" rows="10" class="hidden">{!! old('description') !!}</textarea>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="next"
                        class="next action-button  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 float-right focus:outline-none"
                        value="Next" />
                    <input type="button" name="previous" class="previous action-button-previous text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-g   ray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 mr-4 float-right focus:outline-none" value="Previous" />
                </fieldset>
                <!-- form2 end -->
                <!-- form3 measurement -->
                <fieldset>
                    <div class="form-card">


                        <div class="grid w-full gap-4 mt-12 mb-5">
                            <div>
                                <label for="site_measurements" class="block mb-2 text-sm font-medium text-gray-900">Site
                                    Measurements</label>
                                <textarea id="site_measurements" name="site_measurements"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"
                                    placeholder="html talbe "></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="button" name="next"
                        class="next action-button  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 float-right focus:outline-none"
                        value="Next" />
                    <input type="button" name="previous" class="previous action-button-previous text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-g   ray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 mr-4 float-right focus:outline-none" value="Previous" />
                </fieldset>
                <!-- form 3 end -->
                <!-- form4  near by location-->
                <fieldset>
                    <div class="form-card d-flex mb-4 mt-12 space-y-4">
                        <div class="grid w-50 gap-2">
                            <div>
                                <label for="location-name"
                                    class="block mb-2 text-sm font-medium text-gray-900">location-name </label>
                                <input type="text" id="location-name" name="location_name[]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"
                                    placeholder="  pharmacy , super marker etc...">
                            </div>
                        </div>
                        <div class="grid  gap-4 mx-2">
                            <div>
                                <label for="distance"
                                    class="block mb-2 text-sm font-medium text-gray-900">Distance</label>
                                <input type="text" id="distance" name="distance[]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"
                                    placeholder="distance">
                            </div>
                        </div>
                        <div class="grid  gap-4 mx-2">
                            <div>
                                <span for="add-button" class="block mb-2 text-sm font-medium text-gray-900">Add
                                    more</span>
                                <button type="button" id="add-button"
                                    class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5 ">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="form2"></div>
                    {{-- <input type="button" name="next"
                        class="next action-button  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 float-right focus:outline-none"
                        value="Next" /> --}}
                    <input type="submit"
                    class="action-button text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 float-right focus:outline-none"
                    value="Submit" />
                    <input type="button" name="previous" class="previous action-button-previous text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-g   ray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 mr-4 float-right focus:outline-none" value="Previous" />
                </fieldset>
                <!-- form5 media -->
                {{-- <fieldset>
                    <div class="form-card media-form-card">
                        <div class="grid w-full gap-4 mt-12">
                            <div>
                                <label for="media-url"
                                    class="block mb-2 text-sm font-medium text-gray-900">Media</label>
                                <input type="file" id="media-url" name="media_url[]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5"
                                    placeholder="Enter URL">
                            </div>
                            <div>
                                <label for="content-location"
                                    class="block mb-2 text-sm font-medium text-gray-900">Content Location</label>
                                <select id="content-location" name="content_location[]"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5">
                                    <option value="description">Description</option>
                                    <option value="thumbnail">Thumbnail</option>
                                    <option value="property-detail">Layout Plan</option>
                                </select>
                            </div>
                            <div>
                                <button type="button"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded add-media-row">Add
                                    More Media</button>
                            </div>
                        </div>
                    </div>
                    <input type="submit"
                        class="action-button text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 float-right focus:outline-none"
                        value="Submit" />
                    <input type="button" name="previous" class="previous action-button-previous text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-g   ray-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 mr-4 float-right focus:outline-none" value="Previous" />
                </fieldset> --}}
            </form>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            // Initialize Quill editor
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
            quill.on('text-change', function (delta, oldDelta, source) {
                $('#description-field').text($(".ql-editor").html());
            });

            // $(document).ready(function () { 
            //     let mediaCounter = 1;

            //     // Delegate event for adding new media row
            //     $('.media-form-card').on('click', '.add-media-row', function () {
            //         mediaCounter++;
            //         const newRow = `
            //             <div class="grid w-full gap-4 mt-4 media-row">
            //                 <div>
            //                     <label for="media-url-${mediaCounter}" class="block mb-2 text-sm font-medium text-gray-900">URL</label>
            //                     <input type="file" id="media-url-${mediaCounter}" name="media_url[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" placeholder="Select Image">
            //                 </div>
            //                 <div>
            //                     <label for="content-location-${mediaCounter}" class="block mb-2 text-sm font-medium text-gray-900">Content Location</label>
            //                     <select id="content-location-${mediaCounter}" name="content_location[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5">
            //                         <option value="description">Description</option>
            //                         <option value="thumbnail">Thumbnail</option>
            //                         <option value="property-detail">Layout Plan</option>
            //                     </select>
            //                 </div>
            //                 <div class="flex gap-2 mt-4">
            //                     <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded remove-media-row">Remove</button>
            //                 </div>
            //             </div>
            //         `;
            //         $('.media-form-card').append(newRow);
            //     });

            //     // Delegate event for removing media row
            //     $(document).on('click', '.remove-media-row', function () {
            //         $(this).closest('.media-row').remove();
            //     });
            // });


            $(document).ready(function () {
                let counter = 0; // Counter for generating unique field names

                // Add more rows
                $("#add-button").click(function (event) {
                    event.preventDefault();
                    
                    counter++;
                    const newRow = `
                        <div class="form-card d-flex mb-4 single-row">
                            <div class="w-50">
                                <label for="location-name-${counter}" class="block mb-2 text-sm font-medium text-gray-900">location-name</label>
                                <input type="text" id="location-name-${counter}" name="location_name[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" placeholder="pharmacy, super market, etc..." >
                            </div>
                            <div class="mx-2">
                                <label for="distance-${counter}" class="block mb-2 text-sm font-medium text-gray-900">Distance</label>
                                <input type="text" id="distance-${counter}" name="distance[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" placeholder="distance">
                            </div>
                            <div class="mx-2" style="align-self:end;">
                                <button class="remove-row bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg">x</button> 
                            </div>
                        </div>
                    `;
                    $(newRow).insertBefore(".form2");
                });

                // Remove rows
                $(document).on("click", ".remove-row", function () {
                    $(this).closest(".single-row").remove();
                });
            });

            // multiform script
            $(document).ready(function () { 
                var current_fs, next_fs, previous_fs; // fieldsets
                var opacity;
                var current = 1;
                var steps = $("fieldset").length;

                setProgressBar(current);

                $(".next").click(function () {
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    // Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    console.log($("#progressbar li").eq($("fieldset").index(next_fs)));
                    // Show the next fieldset
                    next_fs.show();
                    // Hide the current fieldset with style
                    current_fs.animate({ opacity: 0 }, {
                        step: function (now) {
                            // For making fieldset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({ 'opacity': opacity });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                });

                $(".previous").click(function () {
                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    // Remove class active
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                    // Show the previous fieldset
                    previous_fs.show();

                    // Hide the current fieldset with style
                    current_fs.animate({ opacity: 0 }, {
                        step: function (now) {
                            // For making fieldset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            previous_fs.css({ 'opacity': opacity });
                        },
                        duration: 500
                    });
                    setProgressBar(--current);
                });

                function setProgressBar(curStep) {
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                    $(".progress-bar")
                        .css("width", percent + "%")
                }

                $(".submit").click(function () {
                    return false;
                })
            });
        </script>
    @endpush
</x-app-layout>