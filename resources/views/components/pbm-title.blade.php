<!-- 
    PBM Section title 
    Author : DVG
-->
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-6xl ml-5 mt-5' ]) }}>
    {{ $value ?? $slot }}
</label>