<x-layout>
    <div class="text-text_dark my-5 sm:my-10 flex flex-col items-center justify-center gap-4 mx-4 md:mx-12">
        <img class="mt-7 w-full sm:w-1/3" src="{{ asset('images/404.svg') }}" alt="404 - not found">
        <div class="my-8 flex flex-col items-center">
            <p class="text-secondary text-lg">
                The resource you are looking does not seem to exist on this server :)
            </p>
            <a href="/" class="mt-6 bg-secondary rounded-md text-text_light px-4 py-2 inline-block"> Go to Home</a>
        </div>
    </div>
</x-layout>
