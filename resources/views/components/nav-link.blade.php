@props(['active'])
<!-- This is the control that sets the layout for the nav menu links -->
@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-4 border-green-400 text-sm font-bold leading-5 text-white
focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-400
hover:text-green-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300
transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>