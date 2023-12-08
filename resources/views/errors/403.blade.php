<x-layout>
    <div class="text-text_dark my-5 sm:my-10 flex flex-col items-center justify-center gap-4 mx-4 md:mx-12">
        <div class="my-8 flex flex-col items-center">
            <p class="text-secondary text-ls text-center sm:text-lg">
                Only the owner can perform this action
            </p>
            <a href="{{ url()->previous() }}" class="mt-6 bg-secondary rounded-sm text-text_light px-4 py-2 inline-block">
                Go Back</a>
        </div>
    </div>
</x-layout>
