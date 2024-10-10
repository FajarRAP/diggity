@props(['title', 'price'])

<x-card class="shadow-card-secondary xl:space-y-3 lg:space-y-2">
    <div class="flex items-center gap-3">
        <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="certification program image"
            class="rounded-full xl:size-16 lg:size-10">
        <x-fonts.paragraph class="font-semibold" :text="$title" />
    </div>
    <x-fonts.paragraph-small class="pb-3 border-b" text="Paket Komprehensif:" />
    <div class="flex flex-wrap pb-3 border-b">
        <x-badges.primary text="Badge" />
    </div>
    <div class="flex justify-between">
        <x-fonts.paragraph class="text-accent" :text="$price" />
        <a href="" class="flex items-center gap-1 font-medium hover:underline text-primary">
            <x-fonts.paragraph text="Lihat Selengkapnya" />
            <x-svgs.arrow-android class="xl:size-4 lg:size-2.5 fill-primary" />
        </a>
    </div>
</x-card>
