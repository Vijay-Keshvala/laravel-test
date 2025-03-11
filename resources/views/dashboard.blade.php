<x-app-layout>
    <div class="w-full">
        <h1 class="text-2xl text-gray-900 font-bold">Dashboard</h1>

        <div class="w-full pb-6 mt-6 overflow-hidden">
            @if (session()->has('error'))
            <div class="w-full p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 border-1 border-red-300" role="alert">
                <span class="font-medium">Error!</span> {{ session()->get('error') }}
            </div>
            @endif

            <div class="w-full grid md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="w-full p-4 bg-white border-2 border-gray-300 rounded-lg" title="Active users in the last 30 min">
                    <div class="w-full flex items-center justify-between gap-4">
                        <div class="flex items-center gap-2">
                            
                            <p class="text-xl font-bold text-gray-900">Active Users</p>
                        </div>

                        <svg class="w-6 h-6 fill-gray-400 md:hidden xl:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                    </div>

                    <div class="mt-4 flex items-center gap-4">
                        <div class="p-2 bg-blue-200 rounded">
                            <svg class="w-4 h-4 fill-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                        </div>
                        <p class="text-4xl font-extrabold text-blue-600">{{$active_users ?? 0}}</p>
                    </div>
                </div>

                @if ($users && count($users))    
                <div class="w-full p-4 bg-white border-2 border-gray-300 rounded-lg" title="Total visitors in the last 30 days">
                    <div class="w-full flex items-center justify-between gap-4">
                        <div class="flex items-center gap-2">
                            
                            <p class="text-xl font-bold text-gray-900">Total Visitors</p>
                        </div>

                        <svg class="w-6 h-6 fill-gray-400 md:hidden xl:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                    </div>

                    <div class="mt-4 flex items-center gap-4">
                        <div class="p-2 bg-blue-200 rounded">
                            <svg class="w-4 h-4 fill-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                        </div>
                        <p class="text-4xl font-extrabold text-blue-600">{{ $users[0]->getValue() ?? 0 }}</p>
                    </div>
                </div>

                <div class="w-full p-4 bg-white border-2 border-gray-300 rounded-lg" title="New visitors in the last 30 days">
                    <div class="w-full flex items-center justify-between gap-4">
                        <div class="flex items-center gap-2">
                            
                            <p class="text-xl font-bold text-gray-900">New Visitors</p>
                        </div>

                        <svg class="w-6 h-6 fill-gray-400 md:hidden xl:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                    </div>

                    <div class="mt-4 flex items-center gap-4">
                        <div class="p-2 bg-blue-200 rounded">
                            <svg class="w-4 h-4 fill-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                        </div>
                        <p class="text-4xl font-extrabold text-blue-600">{{ $users[1]->getValue() ?? 0 }}</p>
                    </div>
                </div>

                <div class="w-full p-4 bg-white border-2 border-gray-300 rounded-lg md:hidden lg:block" title="Avarage user engagement time">
                    <div class="w-full flex items-center justify-between gap-4">
                        <div class="flex items-center gap-2">
                            
                            <p class="text-xl font-bold text-gray-900">Engagement Time</p>
                        </div>

                        <svg class="w-6 h-6 fill-gray-400 md:hidden xl:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                    </div>

                    <div class="mt-4 flex items-center gap-4">
                        <div class="p-2 bg-blue-200 rounded">
                            <svg class="w-4 h-4 fill-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                        </div>
                        <p class="text-4xl font-extrabold text-blue-600">{{ Carbon\CarbonInterval::seconds($users[2]->getValue())->cascade()->forHumans(['parts' => 1, 'options' => Carbon\Carbon::FLOOR]) ?? 0 }}</p>
                    </div>
                </div>
                @endif
            </div>

            {{-- tables --}}
            <div class="w-full mt-8 grid lg:grid-cols-2 gap-4">
                {{-- visitors by country --}}
                <div class="w-full p-4 bg-white border-2 border-gray-300 rounded-lg">
                    <h2 class="text-xl font-bold text-gray-900">Visitors by country</h2>

                    <div class="w-full max-w-64 md:max-w-full mt-4 relative overflow-x-auto">
                        @if ($visitors_by_country)    
                        <table class="w-full text-sm text-lef text-gray-700">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Country
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Visitors
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visitors_by_country as $item)
                                <tr class="odd:bg-white even:bg-gray-50 border-b">
                                    <th scope="row" class="px-4 py-2 font-semibold text-gray-900 whitespace-nowrap">
                                        {{ $item->getDimensionValues()[0]->getValue() ?? "" }}
                                    </th>
                                    <td class="px-4 py-2">
                                        {{ $item->getMetricValues()[0]->getValue() ?? 0 }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>

                {{-- most viewed pages --}}
                <div class="w-full p-4 bg-white border-2 border-gray-300 rounded-lg">
                    <h2 class="text-xl font-bold text-gray-900">Page Visits</h2>

                    <div class="w-full max-w-64 md:max-w-full mt-4 relative overflow-x-auto">
                        @if ($visits_by_page)    
                        <table class="w-full text-sm text-lef text-gray-700">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Page Title
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Visits
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visits_by_page as $item)
                                <tr class="odd:bg-white even:bg-gray-50 border-b">
                                    <th scope="row" class="px-4 py-2 font-semibold text-gray-900 whitespace-nowrap">
                                        {{ $item->getDimensionValues()[0]->getValue() ?? "" }}
                                    </th>
                                    <td class="px-4 py-2">
                                        {{ $item->getMetricValues()[0]->getValue() ?? 0 }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>