@props(['title', 'description'])

<x-card class="rounded-lg lg:space-y-4 xl:space-y-6">
    <img {{ $attributes->merge(['class' => 'lg:size-16 xl:size-24']) }} alt="benefit image">
    <x-fonts.paragraph class="font-semibold" :text="$title" />
    <x-fonts.paragraph-small :text="$description" />
</x-card>
