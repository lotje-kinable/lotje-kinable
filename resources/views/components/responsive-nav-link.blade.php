@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-base font-extrabold font-large text-gray-700 focus:outline-none focus:text-transition duration-150 ease-in-out'
                : 'text-base font-extrabold font-large text-black hover:text-blue-600 focus:outline-none focus:text-transition duration-150 ease-in-out';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
