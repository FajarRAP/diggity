@props(['title', 'description'])

<x-card class="xl:space-y-3 lg:space-y-2 rounded-xl">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="bootcamp benefit icon"
        class="mx-auto xl:size-24 lg:size-16">
    <x-fonts.heading-five class="text-center xl:pt-3 lg:pt-2" :text="$title" />
    <x-fonts.paragraph class="text-center" :text="$description" />
</x-card>
