<x-layout>
    <x-card class="p-2 sm:p-10 max-w-lg mx-3 sm:mx-auto mt-6 sm:mt-24">
        <header class="text-center sm:text-left">
            <h2 class="text-lg sm:text-2xl font-semibold capitalise mb-3 sm:mb-6">
                Create a Marketplace Account
            </h2>
        </header>

        <form action="/users" method="POST">
            @csrf
            <div class="mb-2 sm:mb-6">
                <label for="name" class="inline-block text-lg mb-2">
                    First name
                </label>
                <input value="{{ old('name') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="name" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2 sm:mb-6">
                <label for="email" class="inline-block text-lg mb-2">
                    Email Address
                </label>
                <input value="{{ old('email') }}" type="email" class="border border-gray-200 rounded p-2 w-full"
                    name="email" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-2 sm:mb-6">
                <label for="company" class="inline-block text-lg mb-2">
                    Company Name
                </label>
                <input value="{{ old('company') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="company" />
                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-2 sm:mb-6">
                <label for="license" class="inline-block text-lg mb-2">
                    Tranding License No.
                </label>
                <input value="{{ old('license') }}" type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="license" />
                @error('license')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-2 sm:mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2 sm:mb-6">
                <label for="password_confirmation" class="inline-block text-lg mb-2">
                    Confirm Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2 sm:mb-6">
                <button type="submit" class="bg-secondary text-white rounded py-2 px-4 hover:bg-text_dark">
                    Create Account
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-secondary hover:text-primary">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
