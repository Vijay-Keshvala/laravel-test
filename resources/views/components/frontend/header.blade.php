<header class="w-full bg-white block top-0 left-0 z-50 shadow-sm relative">
    <div class="container mx-auto px-2 sm:px-6 lg:px-8 relative z-10">
      <div class="relative flex h-16 items-center justify-between">
        <div class="static inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <button type="button" id="mheader-menu-btn" class="inline-flex items-center justify-center rounded-md p-2 text-gray-800" aria-controls="mheader-mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
            <svg id="mheader-menu-icon-open" class="mheader-menu-icon-open h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
            <svg id="mheader-menu-icon-close" class="mheader-menu-icon-close h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-between relative">
            <div class="flex flex-shrink-0 items-center">
                <a href="{{route('home')}}">
                    <img class="h-10 w-auto drop-shadow" src="{{ asset('assets/moonstar-logo.png') }}" alt="Moonstart Builders">
                </a>
            </div>
          <div class="hidden sm:ml-6 sm:block relative">
            <nav class="flex space-x-4 relative uppercase">
                <a href="{{route('home')}}" class="{{Route::current()->getName() == 'home' ? 'text-indigo-700' : 'text-black' }} px-3 py-2 text-base font-medium web-nav-active">Home</a>
                <a href="{{route('about')}}" class="{{Route::current()->getName() == 'about' ? 'text-indigo-700' : 'text-black' }} hover:text-indigo-500 px-3 py-2 text-base font-medium">About</a>
                <a href="#" class="{{Str::startsWith(Route::current()->getName(), 'layout.') ? 'text-indigo-700' : 'text-black' }} hover:text-indigo-500 px-3 py-2 text-base font-medium peer">Layouts</a>
                <a href="{{route('contact')}}" class="{{Route::current()->getName() == 'contact' ? 'text-indigo-700' : 'text-black' }} hover:text-indigo-500 px-3 py-2 text-base font-medium">Contact</a>
                <a href="tel:919916852260" class="hidden lg:flex text-indigo-700 px-3 py-2 text-base font-medium items-center gap-2 border border-indigo-700 rounded-md fill-indigo-700 hover:bg-indigo-700 hover:text-white hover:fill-white">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
                    +91 9916852260
                </a>
                <!-- Dropdown menu -->
                <div class="hidden peer-hover:block hover:block absolute left-8 top-8 z-10 mt-3 w-screen max-w-xs overflow-hidden rounded bg-white shadow-lg ring-1 ring-gray-900/5">
                  <div class="p-4">
                    <!--<a href="{{route('layout.singapore')}}" class="w-full block px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">-->
                    <!--  Singapore Layout-->
                    <!--</a>-->
                    <!--<a href="{{route('layout.ujwala')}}" class="w-full block px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">-->
                    <!--  Ujwala Layout-->
                    <!--</a>-->
                    <!--<a href="{{route('layout.bambubazar')}}" class="w-full block px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">-->
                    <!--  Bambubazar Layout-->
                    <!--</a>-->
                    <!--<a href="{{route('layout.tankbund')}}" class="w-full block px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">-->
                    <!--  Tank Bund Gated Community-->
                    <!--</a>-->
                    <!--<a href="#" class="w-full block px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">-->
                    <!--  Samruddi Nagar-->
                    <!--</a>-->
                    <!--<a href="#" class="w-full block px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">-->
                    <!--  Kalparuksha Layout-->
                    <!--</a>-->
                    @foreach ($menu_layouts as $layout)
                    <a href="{{$layout->status == 1 ? route('layout', $layout->name_slug) : '#'}}" class="w-full block px-3 py-2 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                      {{$layout->name}}
                    </a> 
                    @endforeach
                  </div>
                </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="w-full sm:hidden bg-white" id="mheader-mobile-menu">
      <nav class="w-full space-y-4 px-2 pb-3 pt-2">
        <a href="{{route('home')}}" class="block rounded-md px-3 py-2 text-base font-medium {{Route::current()->getName() == 'home' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }}" aria-current="page">Home</a>
        <a href="{{route('about')}}" class="{{Route::current()->getName() == 'about' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">About</a>
        
        <div class="w-full rounded-md py-2 block group">
          <div class="w-full rounded-md px-3 py-2 flex justify-between gap-4 text-base font-medium {{ Str::startsWith(Route::current()->getName(), 'layout.') ? " bg-indigo-600 text-white" : "bg-white text-indigo-600" }} group-hover:bg-indigo-600 group-hover:text-white">
            Layouts
            <svg class="w-4 h-4 {{ Str::startsWith(Route::current()->getName(), 'layout.') ? "fill-white" : "fill-indigo-600" }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
          </div>

          <div class="w-full mt-4 pl-6 space-y-2 {{ Str::startsWith(Route::current()->getName(), 'layout.') ? 'block' : 'hidden'}} group-hover:block">
            <!--<a href="{{route('layout.singapore')}}" class="{{Route::current()->getName() == 'layout.singapore' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">Singapore Layout</a>-->
            <!--<a href="{{route('layout.ujwala')}}" class="{{Route::current()->getName() == 'layout.ujwala' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">Ujwala Layout</a>-->
            <!--<a href="{{route('layout.bambubazar')}}" class="{{Route::current()->getName() == 'layout.bambubazar' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">Bambubazar Layout</a>-->
            <!--<a href="{{route('layout.tankbund')}}" class="{{Route::current()->getName() == 'layout.tankbund' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">Tank Bund Gated Community</a>-->
            <!--<a href="#" class="{{Route::current()->getName() == 'sd6f54sdf' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">Samruddi Nagar</a>-->
            <!--<a href="#" class="{{Route::current()->getName() == 'sd6f54sdf' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">Kalparuksha Layout</a>-->
            @foreach ($menu_layouts as $layout)
            <a href="{{$layout->status == 1 ? route('layout', $layout->name_slug) : '#'}}"  class="{{Route::current()->getName() == 'sd6f54sdf' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">
              {{$layout->name}}
            </a> 
            @endforeach
          </div>
        </div>
        
        <a href="{{route('contact')}}" class="{{Route::current()->getName() == 'contact' ? 'text-white bg-indigo-600' : 'text-indigo-600 hover:text-white hover:bg-indigo-600' }} rounded-md block px-3 py-2 text-base font-medium">Contact</a>
        <a href="tel:919916852260" class="mt-6 ml-3 text-indigo-700 px-3 py-2 text-base font-medium inline-flex items-center gap-2 border border-indigo-700 rounded-md fill-indigo-700 hover:bg-indigo-700 hover:text-white hover:fill-white">
            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
            +91 9916852260
        </a>
      </nav>
    </div>
</header>