@props(['title', 'description', 'price', 'date'])

<x-card class="text-left xl:space-y-6 lg:space-y-4">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="webinar image">
    <div class="xl:space-y-3 lg:space-y-2">
        <x-fonts.paragraph-small class="font-semibold" :text="$date" />
        <x-fonts.paragraph class="font-semibold" :text="$title" />
        <x-fonts.paragraph-small :text="$description" />
    </div>
    <div class="flex items-center justify-between">
        <x-fonts.heading-four class="text-accent" :text="$price" />
        <x-button text="Daftar Webinar" />
    </div>
</x-card>
