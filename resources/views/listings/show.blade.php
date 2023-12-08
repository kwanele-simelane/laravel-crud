<x-layout>
    <a href="/" class="inline-block text-black mx-4 md:mx-12 mt-2 sm:mt-12 mb-4 py-1 px-2 bg-text_light"><i
            class="fa-solid fa-arrow-left"></i> Go back
    </a>
    <div class="mx-4 md:mx-12">
        <x-card class="p-30 bg-white px-2 sm:px-8 py-4">
            <div class="flex flex-col justify-center">

                <div class="flex-col flex sm:flex-row items-end justify-between">
                    <div class="flex-col flex sm:flex-row items-end justify-between mb-3">
                        <img class="w-48 mb-4 sm:mr-6 rounded"
                            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/placeholder_img.png') }}"
                            alt="" />
                        <div>
                            <x-listing-tags :categoriesCsv="$listing->category" />
                            <h3 class="text-lgmd sm:text-3xl font-semibold mt-3">{{ $listing->company }}</h3>
                        </div>
                    </div>

                    <div class="text-sm sm:text-lg my-2 sm:my-4">
                        <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                    </div>
                </div>

                <div class="border border-gray-100 w-full mb-6"></div>

                <div class="flex-col flex sm:flex-row justify-between gap-8">
                    <div class="w-full xl:w-6/12 mb-4 sm:mb-2">
                        <h3 class="text-xl font-bold mb-2">
                            Products
                        </h3>
                        <div class="text-lg space-y-6">
                            @foreach ($listing->products as $product)
                                <div class="text-sm">
                                    <strong class="text-secondary">{{ $product->loan_name }}</strong><br>
                                    <span>Amount Range: </span>{{ $product->amount_range }} <br>
                                    {{ $product->loan_type }} <br>
                                    <span>Interest Rate: </span><strong
                                        class="text-secondary">{{ $product->interest_rate }}</strong>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="w-full xl:w-3/12">
                        <h3 class="text-lg font-bold mb-2">
                            About {{ $listing->company }}
                        </h3>
                        <div class="text-lg">
                            <p>
                                {{ $listing->description }}
                            </p>
                        </div>
                    </div>
                    <div class="w-full xl:w-3/12"></div>
                </div>
                <div class="border border-gray-100 w-full mt-6"></div>

                <div class="flex items-end justify-start">
                    <a href="/listings/{{ $listing->id }}/contact"
                        class="block bg-secondary text-sm sm:text-lg text-white mt-6 p-2 mr-4 rounded hover:opacity-80">
                        <i class="fa-solid fa-paper-plane"></i>
                        Apply Now
                    </a>

                    <a href="{{ $listing->website }}" target="_blank"
                        class="block bg-secondary text-sm sm:text-lg text-white mt-6 p-2 mr-4 rounded hover:opacity-80">
                        <i class="fa-solid fa-globe"></i>
                        Visit Website
                    </a>
                </div>
            </div>
        </x-card>
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/listings/{{ $listing->id }}/edit">
                <i class="fa-solid fa-user-check mr-2"></i>
                @auth
                    Edit
                @else
                    Claim
                @endauth
                this listing
            </a>
        </x-card>
    </div>
</x-layout>
