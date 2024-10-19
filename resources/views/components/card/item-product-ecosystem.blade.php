@props(['title', 'description', 'src'])

<x-card class="flex flex-col lg:gap-2 xl:gap-3">
    <img src="{{ $src }}" alt="Product Benefit" class="mx-auto lg:size-16 xl:size-24">
    <x-fonts.paragraph class="font-semibold" :text="$title" />
    <x-fonts.paragraph-small :text="$description" />
</x-card>
