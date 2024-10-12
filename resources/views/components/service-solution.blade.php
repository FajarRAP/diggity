@props(['title', 'description'])

<div class="text-center">
    <img {{ $attributes->merge(['class' => 'lg:size-14 xl:size-20 mx-auto']) }} alt="solution image">
    <x-fonts.paragraph class="font-semibold lg:my-2 xl:my-3" :text="$title" />
    <x-fonts.paragraph-small :text="$description" />
</div>
