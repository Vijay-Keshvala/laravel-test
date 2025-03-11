<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-80 h-screen transition -translate-x-full lg:translate-x-0 delay-100 duration-500 ease-in-out" aria-label="Sidebar">
    <div class="h-full px-6 py-8 overflow-y-auto bg-white border-r border-gray-200">
    <!-- sm:translate-x-0 -->
        <div class="w-full">
            <img src="{{asset('assets/moonstar-logo.png')}}" alt="Interior Logo" class="h-12">
        </div>

        <ul class="w-full mt-12 space-y-4 font-medium">
            <li>
                <a href="{{ route('dashboard') }}" class="w-full flex items-center px-4 py-3 text-gray-900 group {{ Route::current()->getName() == 'dashboard' ? 'bg-slate-100' : 'hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 transition duration-75 {{ Route::current()->getName() == 'dashboard' ? 'fill-blue-600' : 'fill-gray-500 group-hover:fill-gray-900' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                        <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-4 text-lg {{ Route::current()->getName() == 'dashboard' ? 'text-blue-600 font-bold' : '' }}">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contacts.index') }}" class="w-full flex items-center px-4 py-3 text-gray-900 group {{ Str::startsWith(Route::current()->getName(), 'contacts.') ? 'bg-slate-100' : 'hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 transition duration-75 {{ Str::startsWith(Route::current()->getName(), 'contacts.') ? 'fill-blue-600' : 'fill-gray-500 group-hover:fill-gray-900' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                    <span class="ms-4 text-lg {{ Str::startsWith(Route::current()->getName(), 'contacts.') ? 'text-blue-600 font-bold' : '' }}">Contacts</span>
                </a>
            </li>
            <li>
                <a href="{{ route('enquiries.index') }}" class="w-full flex items-center px-4 py-3 text-gray-900 group {{ Str::startsWith(Route::current()->getName(), 'enquiries.') ? 'bg-slate-100' : 'hover:bg-gray-100' }}">
                    <svg class="w-5 h-5 transition duration-75 {{ Str::startsWith(Route::current()->getName(), 'enquiries.') ? 'fill-blue-600' : 'fill-gray-500 group-hover:fill-gray-900' }}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2z"></path></svg>
                    <span class="ms-4 text-lg {{ Str::startsWith(Route::current()->getName(), 'enquiries.') ? 'text-blue-600 font-bold' : '' }}">Enquiries</span>
                </a>
            </li>
            <li>
                <a href="{{ route('layouts.index') }}" class="w-full flex items-center px-4 py-3 text-gray-900 group {{ Str::startsWith(Route::current()->getName(), 'layouts.') ? 'bg-slate-100' : 'hover:bg-gray-100' }}">
                    <svg  class="w-5 h-5 transition duration-75 {{ Str::startsWith(Route::current()->getName(), 'contacts.') ? 'fill-blue-600' : 'fill-gray-500 group-hover:fill-gray-900' }}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M19 3H5c-1.103 0-2 .897-2 2v4h18V5c0-1.103-.897-2-2-2zM3 19c0 1.103.897 2 2 2h8V11H3v8zm12 2h4c1.103 0 2-.897 2-2v-8h-6v10z"></path>
                    </svg>
                    <span class="ms-4 text-lg {{ Str::startsWith(Route::current()->getName(), 'contacts.') ? 'text-blue-600 font-bold' : '' }}">Layouts</span>
                </a>
            </li>
        </ul>
    </div>
</aside>