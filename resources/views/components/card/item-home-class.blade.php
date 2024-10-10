@props(['title'])

<x-card-secondary class="flex items-center xl:gap-3 lg:gap-2">
    {{-- Should Be IMG but later --}}
    <div class="bg-gray-500 rounded-full xl:size-24 lg:size-16"></div>
    <x-fonts.heading-four :text="$title" />
</x-card-secondary>
