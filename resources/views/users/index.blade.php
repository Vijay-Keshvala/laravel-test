<x-app-layout>
<div class="w-full">
    <!-- actions -->
    <div class="w-full flex justify-between items-center">
        <h1 class="text-2xl text-gray-900 font-bold">Users</h1>

        <button data-modal-show="addUserModal" class="openModalBtn text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
            <i class="bi bi-plus"></i> Create
        </button>
        <span class="text-red-500 hidden border border-gray-300 shadow-gray-900 text-orange-500"></span><!-- do not remove this -->
    </div>

    <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <span class="sr-only max-w-12"></span>
        <div class="p-6 text-gray-900 table-responsive">
            {{ $dataTable->table() }}
        </div>
    </div>

    <!-- create modal -->
    <div id="addUserModal" aria-hidden="true" class="{{ $errors->any() ? 'block' : 'hidden' }} overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-700 bg-opacity-40">
        <div class="relative p-4 w-full max-w-2xl max-h-full mx-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Add User
                    </h3>
                    <button type="button" class="closeModalBtn text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="addUserModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('users.store') }}" method="POST" class="w-full">
                    @csrf
                    <div class="p-4 md:p-5 space-y-4">
                        <div class="m-0">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Full Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" placeholder="Full Name" required>
                        </div>
                        <div class="mt-4">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" placeholder="Email" required>
                        </div>
                        <div class="mt-4">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                            <input type="password" id="password" name="password" value="{{ old('password') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" placeholder="********" required>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add User</button>
                        <button data-modal-hide="addUserModal" type="button" class="closeModalBtn ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
{{ $dataTable->scripts() }}
<script>
    $(document).ready(function(){
        // Modal
        $('.openModalBtn').on('click', function(){
            const modal = $(this).data('modal-show');
            $(`#${modal}`).show();
        })
        $('.closeModalBtn').on('click', function(){
            const modal = $(this).data('modal-hide');
            $(`#${modal}`).hide();
            $(`#${modal} .formErrors`).hide();
            $(`#${modal} form input`).val('');
            $(`#${modal} form #supplier-select`).val('').trigger('change');
        })
    })

    function dropActions(dropdownId){
        $(".actionsDropdownContent[data-dropdownid='" + dropdownId + "']").toggle();
    }
</script>
@endpush
</x-app-layout>