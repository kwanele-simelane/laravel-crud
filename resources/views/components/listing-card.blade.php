@props(['listing'])
<x-card class="p-30 bg-black transition ease-in-out delay-70 hover:-translate-x-1 hover:scale-55 duration-50">
    <div class="flex truncate">

        <img class="hidden sm:w-48 mr-2 md:mr-6 md:block" id="image"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/placeholder_img.png') }}"
            alt="" />

        <div class="p-4 md:py-2 w-full">
            <h3 class="text-md md:text-2xl whitespace-nowrap flex justify-between items-center">
                <a href="/listings/{{ $listing->id }}">{{ $listing->company }}</a>
                <x-listing-tags :categoriesCsv="$listing->category" />
            </h3>
            <div class="text-xs mb-2 md:mb-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
            @php
                $productsObject = $listing->products->slice(0, 2);
            @endphp
            @foreach ($productsObject as $product)
                <div class="text-2xs mb-1">
                    <i class="fa-solid fa-check briefcase mr-2"></i> {{ $product->loan_name }},
                    {{ $product->loan_type }} @
                    {{ $product->interest_rate }}
                </div>
            @endforeach
            <div class="mt-4">
                <a href="listings/{{ $listing->id }}/contact"
                    class="bg-secondary text-xs text-white text-center py-1 px-4 md:px-8 rounded-sm hover:opacity-80">
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</x-card>
