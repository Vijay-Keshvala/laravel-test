<x-app-layout>
<div class="w-full">
    <!-- actions -->
    <div class="w-full flex justify-between items-center">
        <h1 class="text-2xl text-gray-900 font-bold">Contacts</h1>
    </div>

    <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 table-responsive">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@push('scripts')
{{ $dataTable->scripts() }}
<script>
    function dropActions(dropdownId) {
        $(".actionsDropdownContent[data-dropdownid='" + dropdownId + "']").toggle();
    }
</script>
<script>
</script>
@endpush
</x-app-layout>