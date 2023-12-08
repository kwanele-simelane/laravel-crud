<x-layout>
    <x-card class="p-3 sm:p-10">
        <header class="flex justify-between items-center">
            <h1 class="text-lg sm:text-3xl text-left sm:text-center font-bold my-6 capitalize">
                Manage Listings
            </h1>
            <a class="block bg-secondary text-sm text-white rounded-sm py-2 px-2 sm:px-4 hover:bg-text_dark" href="/advert/manage">My Adverts</a>
            {{-- <a class="block bg-secondary text-white rounded py-2 px-4 hover:bg-text_dark" href="/adverts/all">Show All</a> --}}
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($listings->isEmpty())

                    @foreach ($listings as $listing)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-sm sm:text-lg">
                                <a href="/listings/{{ $listing->id }}">
                                    {{ $listing->company }}
                                </a>
                            </td>
                            <td class="px-4 py-4 sm:py-8 border-t border-b border-gray-300 text-sm sm:text-lg">
                                <a href="/listings/{{ $listing->id }}/edit" class="text-secondary px-6 py-2 rounded-xl"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form action="/listings/{{ $listing->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500">
                                        <i class="fa-solid fa-trash"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg"></td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg"></td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg"></td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg"></td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg"></td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p>You currently do not own any listings.</p>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/listings/create" class="text-blue-400 px-6 py-2 rounded-xl">
                                <i class="fa-solid fa-pen-to-square" style="margin-right: 10px"></i>
                                Get your business listed
                            </a>
                        </td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>
