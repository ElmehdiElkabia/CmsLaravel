<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Comment') }}
        </h2>
    </x-slot>
    <x-success></x-success>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('commentaires.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="mt-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full" name="name" value="{{ old('name') }}" required autofocus>
                        </div>

                        <!-- Comment -->
                        <div class="mt-4">
                            <label for="commentaire" class="block text-gray-700 text-sm font-bold mb-2">Comment:</label>
                            <textarea id="commentaire" class="form-textarea rounded-md shadow-sm mt-1 block w-full" name="commentaire" rows="5" required>{{ old('commentaire') }}</textarea>
                        </div>

                        <!-- Image -->
                        <div class="mt-4">
                            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image:</label>
                            <input id="image" type="file" class="form-input rounded-md shadow-sm mt-1 block w-full" name="image" required>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
