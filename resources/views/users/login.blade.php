<x-layout>
    <x-card class="p-2 sm:p-10 max-w-lg mx-3 sm:mx-auto mt-6 sm:mt-24">
        <header class="text-left">
            <h2 class="text-2xl font-bold capitalise mb-6">
                Sign in
            </h2>
        </header>

        <form action="/users/authenticate" method="POST">
            @csrf
            <div class="mb-2 sm:mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input value="{{ old('email') }}" type="email" class="border border-gray-200 rounded p-2 w-full"
                    name="email" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-2 sm:mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
            </div>

            <div class="mb-2 sm:mb-6">
                <button type="submit" class="bg-secondary text-white rounded py-2 px-4 hover:bg-text_dark">
                    Sign In
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Not registered?
                    <a href="/register" class="text-secondary hover:text-primary">Create an Account</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>
