<x-frontend-layout>
<x-slot:title>
    Contact
</x-slot:title>

<main class="w-full lg:h-[80dvh] bg-blue-50">
    <div class="w-full h-full py-6 px-4 container mx-auto flex items-center justify-center">
        <div class="w-full grid lg:grid-cols-2 gap-8">
            <div class="w-full">
                <h1 class="text-3xl text-gray-900 font-bold">Love to hear from you, <br> Get in Touch &#127919;</h1>

                <div class="w-full mt-6">
                    <h2 class="text-gray-800">Mobile</h2>
                    <a href="tel:+919916852260" class="text-xl font-semibold">+91 9916852260</a><br>
                    <a href="tel:+919900903886" class="text-xl font-semibold">+91 9900903886</a>
                </div>
                <div class="w-full mt-6">
                    <h2 class="text-gray-800">Email</h2>
                    <a href="mailto:info@moonstarbuilders.com" class="text-xl font-semibold">info@moonstarbuilders.com</a>
                </div>
                <div class="w-full mt-6">
                    <h2 class="text-gray-800">Corporate Address</h2>
                    <p class="text-xl font-semibold">KR Extension, Chintamani, Karnataka 563125</p>
                </div>
            </div>
            <div class="w-full">
                <p class="font-bold mt-6 mb-4 lg:mt-0">Interested? Send us a note for more information.</p>
                <form id="contact-form" method="POST" action="{{route('contacts.store')}}">
                    @csrf
                    <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="">
                            <label for="name" class="block mb-2 text-sm font-normal text-gray-800">Your name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name" class="bg-transparent text-gray-900 text-sm focus:ring-1 focus:ring-gray-900 block w-full p-2.5 border border-gray-400" placeholder="Christopher Nolan" required>
                        </div>

                        <div class="">
                            <label for="email" class="block mb-2 text-sm font-normal text-gray-800">Your email</label>
                            <input type="email" name="email" id="email" class="bg-transparent text-gray-900 text-sm focus:ring-1 focus:ring-gray-900 block w-full p-2.5 border border-gray-400" placeholder="name@alphabet.com">
                        </div>
                    </div>

                    <div class="w-full mt-6">
                        <label for="phone" class="block mb-2 text-sm font-normal text-gray-800">Your Mobile Number <span class="text-red-500">*</span></label>
                        <input type="tel" id="phone" name="phone" class="bg-transparent text-gray-900 text-sm focus:ring-1 focus:ring-gray-900 block w-full p-2.5 border border-gray-400" placeholder="+91 9956254783" required>
                    </div>

                    <div class="w-full mt-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-600">Your message</label>
                        <textarea id="message" rows="4" name="message" class="w-full bg-transparent text-gray-900 text-sm focus:ring-1 focus:ring-gray-900 block p-2.5 border border-gray-400" placeholder="Tell us about the project you have in mind"></textarea>
                    </div>

                    @if (Session::has('success'))
                    <div class="w-full mt-6 bg-green-200 text-green-700 text-sm font-bold p-4 transition ease-in-out delay-150">
                        Your Message send successfully. We will get back to you SOON!
                    </div>
                    @endif

                    @if (Session::has('error'))
                    <div class="w-full mt-6 bg-red-200 text-red-700 text-sm font-bold p-4 transition ease-in-out delay-150">
                        Could not save your message. Thanks for contacting us.
                    </div>
                    @endif

                    <button type="submit" class="w-full max-w-sm mt-6 text-white bg-blue-900 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-violet-300 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center justify-center transition ease-in-out delay-150">
                        Get in touch
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
</x-frontend-layout>