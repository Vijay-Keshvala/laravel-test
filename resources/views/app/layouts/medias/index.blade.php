<x-app-layout>
@push('styles')
@endpush
<div class="w-full">
    <!-- actions -->
    <div class="w-full flex justify-between items-center">
        <h1 class="text-2xl text-gray-900 font-bold">{{ $layout->name }} - Medias</h1>

        <button data-modal-show="createMediaModal" class="openModalBtn text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
            <i class="bi bi-plus"></i> Create
        </button>
    </div>

    <div class="mt-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 w-full grid md:grid-cols-2 lg:grid-cols-3 gap-4">
            @forelse ($layout->media as $media)
            <div class="w-full rounded-lg overflow-hidden">
                <img src="{{$media->url}}" alt="{{$layout->name}}" class="w-full">

                <div class="w-full flex lg:flex-col xl:flex-row border-t border-white">
                    <div class="w-full capitalize text-gray-900 bg-gray-200 hover:bg-gray-300 font-semibold text-sm px-2 py-3 cursor-pointer inline-flex items-center justify-center">
                        {{$media->media_location}}
                    </div>
                    <form method="POST" action="{{ route('layout.medias.destroy', ['slug' => $layout->name_slug, 'id' => $media->id]) }}" class="w-full inline-flex">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full text-white bg-red-500 hover:bg-red-700 font-medium text-base px-2 py-3 inline-flex items-center justify-center">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <p>No images yet!</p>
            @endforelse
        </div>
    </div>

    <!-- Create modal -->
    <div id="createMediaModal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen max-h-full bg-gray-700 bg-opacity-40">
        <div class="relative p-4 w-full max-w-2xl max-h-full mx-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Add New Media
                    </h3>
                    <button type="button" class="closeModalBtn text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="createMediaModal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('layout.medias.store', $layout->name_slug) }}" method="POST" class="w-full createImageForm" enctype="multipart/form-data">
                    @csrf
                    <div class="p-4 md:p-5">
                        <div class="mb-0">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image</label>
                            <input type="file" id="image" name="image" accept="image/*" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" required>
                        </div>
                        <div class="mt-4">
                            <label for="location" class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                            <select id="location" name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-blue-500 focus:ring-2 focus:outline-none block w-full p-2.5" required>
                                <option value="description">Description</option>
                                <option value="thumbnail">Thumbnail</option>
                                <option value="property-detail">Layout Plan</option>
                            </select>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                        <button type="submit" class="createImageFormBtn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex items-center gap-2">Add Media</button>
                        <button data-modal-hide="createMediaModal" type="button" class="closeModalBtn ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function(){
            // Modal
            $('.openModalBtn').on('click', function(){
                $(this).removeClass('hidden');
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
            $('form').on('submit', function(){
                $(this).closest('button[type=submit]').prop('disabled', true);
            });
            $('.createImageForm').on('submit', function(){
                $('.createImageFormBtn').html('<div role="status" class="mr-2"><svg aria-hidden="true" class="w-6 h-6 text-gray-100 animate-spin fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg></div> Uploading...');
            })
        })
    </script>
@endpush
</x-app-layout>