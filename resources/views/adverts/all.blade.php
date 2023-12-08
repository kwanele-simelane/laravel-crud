<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 capitalise">
                All Advert Submissions
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($adverts->isEmpty())

                    @foreach ($adverts as $advert)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                {{ $advert->advert_name }}
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form action="/advert/{{ $advert->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500">
                                        <i class="fa-solid fa-trash"></i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form action="/advert/{{ $advert->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="advert_id" value="{{ $advert->id }}">
                                    <button class="text-secondary-500 bg-text_light px-2 py-1 border border-gray-20">
                                        <i class="fa-solid fa-check mr-2"></i>
                                        @unless ($advert->approved)
                                            Aprrove
                                        @else
                                            Approved
                                        @endunless
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
                            <p>No new adverts</p>
                        </td>
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <a href="/advert" class="text-blue-400 px-6 py-2 rounded-xl">
                                <i class="fa-solid fa-pen-to-square" style="margin-right: 10px"></i>
                                Post a New Advert
                            </a>
                        </td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>
