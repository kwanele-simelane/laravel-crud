@props(['productsCsv'])
@php
    $products = array_slice(explode(',', $productsCsv), 0, 2);
@endphp

<ul class="my-3 list-disc">
    @foreach ($products as $product)
        <li class="ml-6 text-text_dark px-1 mb-1 text-xs">
            <i class="fa-solid fa-briefcase mr-2"></i> {{ $product->loan_name }}, {{ $product->loan_type }} @
            {{ $product->interest_rate }}
        </li>
    @endforeach
</ul>
