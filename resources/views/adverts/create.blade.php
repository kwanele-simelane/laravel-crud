<x-layout>
    <x-card class="max-w-xl mx-auto mt-24 p-8">
        <header class="text-center">
            <h2 class="text-lg font-bold uppercase mb-4">
                Create a New Advert
            </h2>
        </header>

        <form action="/advert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="advert_name" class="inline-block text-lg mb-2">Advert Name</label>
                <input value="{{ old('advert_name') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="advert_name" placeholder="Give it a name you will remember..." />
                @error('advert_name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="web_url" class="inline-block text-lg mb-2">Resource URL</label>
                <input value="{{ old('web_url') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="web_url" placeholder="Example: https://mywebsite.com/product-i-want-to-promote" />
                @error('web_url')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">
                    Advert Photo
                </label>
                <input type="file" name="image" id="image"
                    class="p-2 block w-full text-sm text-gray-900 border border-gray-300 rounded cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Advert literature
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Advert literature">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-secondary text-white rounded py-2 px-4 hover:bg-text_dark">
                    Post Advert
                </button>

                <a href="/" class="text-black ml-4"> Go Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
