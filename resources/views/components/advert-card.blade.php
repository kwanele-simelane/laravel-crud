@props(['advert'])
<x-card class="p-15 bg-black mb-4">
    <div class="max-w-sm rounded overflow-hidden shadow-l">
        <img class="w-full" src="{{ $advert->image ? asset('storage/' . $advert->image) : asset('images/advert_placeholder.png') }}"
            alt="" />
        <div class="m-2">
            <a href="{{ $advert->web_url }}" target="_blank"
                class="block bg-secondary text-white text-center py-2 rounded-md hover:opacity-80">
                Learn More
                <i class="text-xs ml-2 fa fa-external-link"></i>
            </a>
        </div>
    </div>
</x-card>
