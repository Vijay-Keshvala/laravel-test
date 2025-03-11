<x-app-layout>
<div class="w-full">
    <!-- actions -->
    <div class="w-full flex justify-between items-center">
        <h1 class="text-2xl text-gray-900 font-bold">User Activities - {{ $user->name }}</h1>
    </div>

    <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <span class="sr-only max-w-12"></span>
        <div class="p-6 text-gray-900 table-responsive">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Login Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Login Time
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Logout Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Logout Time
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($user->activities as $activity)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                {{ carbon::parse($activity->login_time)->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ Carbon::parse($activity->login_time)->format('h:i:s') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ Carbon::parse($activity->logout_time)->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4">
                                {{ Carbon::parse($activity->logout_time)->format('h:i:s') }}
                            </td>
                        </tr>
                        @empty
                        <tr class="bg-white border-b">
                            <th colspan="4" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                No Activities
                            </th>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function(){
        // 
    })
</script>
@endpush
</x-app-layout>