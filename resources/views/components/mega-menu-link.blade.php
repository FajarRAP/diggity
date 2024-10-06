@props(['num'])

<div {{ $attributes }} class="p-3 rounded-lg lg:space-y-4 xl:space-y-6 hover:bg-gray-100 hover:cursor-pointer">
    <x-heading-three>{{ $title }}</x-heading-three>
    <x-paragraph class="text-gray-500">{{ $description }}</x-paragraph>
    <hr x-bind:class="active === {{ $num }} ? 'visible' : 'invisible'" class="border-b-2 border-b-primary">
</div>
