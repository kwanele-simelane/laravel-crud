<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 capitalise">
                My Adverts
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
                            <p>You currently do not own any Advert.</p>
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
