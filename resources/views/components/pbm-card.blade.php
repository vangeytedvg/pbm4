<!-- 
    PBM Card
    Author : DVG
-->
@props(['value', 'img', 'title'])

<div class="max-w-xs rounded-lg shadow-lg lg:mr-2 bg-gray-200">
    <img class="w-full h-48" src="{{$img ?? ''}}" alt="image" />
    <div class="px-6 py-4">
        <h4 class="mb-3 text-xl font-semibold tracking-tight text-gray-800">{{ $title ?? '' }}</h4>
        <p class="leading-normal text-gray-700">{{$value ?? $slot}}</p>
    </div>
</div>