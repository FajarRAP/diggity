@props(['title', 'description'])

<div class="text-center">
    <img {{ $attributes->merge(['class' => 'lg:size-14 xl:size-20 mx-auto']) }} alt="solution image">
    <x-paragraph class="font-semibold lg:my-2 xl:my-3">{{ $title }}</x-paragraph>
    <x-paragraph-small>{{ $description }}</x-paragraph-small>
</div>
