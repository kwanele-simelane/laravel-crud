@props(['categoriesCsv'])
@php
    $categories = explode(',', $categoriesCsv);
@endphp

<ul class="flex">
    @foreach ($categories as $category)
        <li class="flex items-center justify-center bg-primary text-white rounded-sm px-1 mr-2 text-xs">
            <a href="/?category={{ $category }}">{{ $category }}</a>
        </li>
    @endforeach
</ul>
