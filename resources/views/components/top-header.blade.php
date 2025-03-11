<header class="lg:ml-80 px-4 lg:px-8 py-3 bg-white shadow-sm">
    <div class="w-full flex justify-end items-center relative">
        <!-- sidebar toggle button -->
        <button class="lg:hidden mr-6 flex-grow" id="sidebar-button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 fill-gray-900"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>
        </button>

        <!-- user menu -->
        <div>
            <button type="button" class="flex bg-white rounded-full md:me-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                @if( isset(auth()->user()->profile) )
                <img class="w-10 h-10 rounded-full object-cover" src="https://images.unsplash.com/photo-1699936527885-31ba9201fa00?q=80&w=1848&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="user photo">
                @else
                <div class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-blue-400 rounded-full">
                    <span class="text-base font-bold text-white uppercase">{{ substr(auth()->user()->name, 0, 2); }}</span>
                </div>
                @endif
            </button>
    
            <!-- Dropdown menu -->
            <div class="absolute top-full right-0 origin-top z-50 hidden mt-6 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown" >
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900">{{ auth()->user()->name }}</span>
                    <span class="block text-sm  text-gray-500 truncate">{{ auth()->user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
    
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Sign out
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#sidebar-button').on('click', function(){
                $('#sidebar-multi-level-sidebar').addClass('translate-x-0');
            });

            $('#user-menu-button').on('click', function(){
                console.log('clicked');
                $('#user-dropdown').toggleClass('hidden');
            });
            $('#notifications-button').on('click', function(){
                console.log('clicked');
                $('#notifications-dropdown').toggleClass('hidden');
            });
            $(document).click(function(event) {
                if (!$(event.target).closest('#sidebar-button, #sidebar-multi-level-sidebar').length) {
                    $('#sidebar-multi-level-sidebar').removeClass('translate-x-0');
                }
                if (!$(event.target).closest('#user-menu-button, #user-dropdown').length) {
                    $('#user-dropdown').addClass('hidden');
                }
                if (!$(event.target).closest('#notifications-button, #notifications-dropdown').length) {
                    $('#notifications-dropdown').addClass('hidden');
                }
            });
        })
    </script>
</header>