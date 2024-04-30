<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Furniture') }}
        </h2>
    </x-slot>
    <x-success></x-success>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('furnitures.update', $furniture->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Title -->
                        <div class="mt-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" value="{{ $furniture->title }}"
                                class="mt-1 p-2 block w-full shadow-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Prix -->
                        <div class="mt-4">
                            <label for="prix" class="block text-sm font-medium text-gray-700">Price</label>
                            <input type="number" name="prix" id="prix" value="{{ $furniture->prix }}"
                                class="mt-1 p-2 block w-full shadow-sm border-gray-300 rounded-md">
                        </div>

                        <!-- Image -->
                        <div class="mt-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                            <input type="file" name="image" id="image" class="mt-1 p-2 block w-full shadow-sm border-gray-300 rounded-md">
                            <img src="{{ asset($furniture->image) }}" alt="Current Image" class="mt-2 h-20">
                        </div>


                        <div class="flex items-center justify-between">
                            <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            {{ __('Update') }}
                        </button>
                            <a href="{{ route('furnitures.index') }}"
                                class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
