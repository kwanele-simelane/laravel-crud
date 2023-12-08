<x-layout>
    @include('partials._hero')

    <div class="text-text_dark my-5 sm:my-10 flex flex-col sm:flex-row gap-4 mx-4 md:mx-12">
        <div class="w-full xl:w-2/12 sm:w-2/12"></div>
        <div class="w-full xl:w-8/12 sm:w-8/12 text-center">
            <h2 class="text-center text-black-50 text-lg underline capitalize mb-4">how it works</h2>
            <p class="text-sm mx-2 sm:text-md">
                Marketplace connects individuals and companies seeking financial products with listed financial service
                providers. It is a must-see for individuals and companies seeking credit. Packed with credit providers
                willing to drive
                financial inclusion in Eswatini, Marketplace compliments PayEasy, a platform designed for source
                deduction
                of loan repayments. Both platforms provides access to credit at a competetitve level. Read more about <a
                    href="#" class="text-secondary underline hover:text-primary">PayEasy</a>
            </p>
        </div>
        <div class="w-full xl:w-2/12 sm:w-2/12"></div>
    </div>

    @include('partials._search')

    <div class="mx-4 md:mx-12">
        <h2 class="mt-4 md:mt-8 capitalize text-lg md:-2xl">financial services providers</h2>
        <hr class="h-px mb-8 bg-gray-50 border-0 dark:bg-gray-300">
    </div>

    <div class="flex flex-col sm:flex-row pb-4 overflow-y-scroll sm:overflow-hidden relative mx-4 sm:mx-12 gap-5">
        <main class="w-full h-screen overflow-y-scroll pr-2 mb-8 sm:mb-0">
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0">
                <style>
                    /* width */
                    ::-webkit-scrollbar {
                        width: 5px;
                    }

                    /* Track */
                    ::-webkit-scrollbar-track {
                        background: #f1f1f1;
                    }

                    /* Handle */
                    ::-webkit-scrollbar-thumb {
                        background: #c7c7c7;
                    }

                    /* Handle on hover */
                    ::-webkit-scrollbar-thumb:hover {
                        background: #e0e0e0;
                    }
                </style>
                {{-- @dd($listings) --}}
                @unless (count($listings) == 0)
                    @foreach ($listings as $listing)
                        <x-listing-card :listing="$listing" />
                    @endforeach
                @else
                    <p>No Listings Found</p>
                @endunless
            </div>
        </main>
        <div class="w-full h-4/5 xl:w-4/12 sm:w-4/12 border border-gray-200 bg-gray-50 p-1 sm:p-4 rounded gap-3 overflow-y-scroll">
            <div class="fb-page custom mb-4" data-href="https://www.facebook.com/TheBlllboard" data-tabs="timeline"
                data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"
                data-hide-cover="true" data-show-facepile="false" data-hide-cta="true">
                @push('css')
                    <link rel="stylesheet" href="../../css/app.css">
                @endpush
                <blockquote cite="https://www.facebook.com/TheBlllboard" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/TheBlllboard">
                        The Billboard
                    </a>
                </blockquote>
            </div>

            <hr class="border border-gray-30 my-6">

            @unless (count($adverts) == 0)
                @foreach ($adverts as $advert)
                    <x-advert-card :advert="$advert" />
                @endforeach
            @else
                <p>I want to advertise here</p> <br>
                <a href="/advert" class="bg-secondary text-white text-center py-1 px-8 rounded-sm hover:opacity-80">Create
                    a new advert</a>
            @endunless
        </div>
    </div>
    <div class="flex overflow-hidden relative mx-4 md:mx-12 gap-2 md:gap-5">
        <div class="mt-7 p-0 md:p-4 w-full xl:w-9/12 sm:w-9/12">
            {{ $listings->links() }}
        </div>
        <div class="hidden w-full xl:w-3/12 sm:w-3/12"></div>
    </div>

</x-layout>
