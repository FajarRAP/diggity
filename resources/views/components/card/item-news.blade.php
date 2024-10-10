@props(['title', 'highlight', 'date', 'topic'])

<x-card class="!p-0 text-left shadow-card-secondary !rounded-lg">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="news image" class="rounded-t-lg">
    <div class="xl:m-6 lg:m-4 xl:space-y-6 lg:space-y-4">
        <x-fonts.paragraph class="border-b xl:pb-3 lg:pb-2" :text="$title" />
        <x-fonts.paragraph-extra-small :text="$highlight" />
        <div class="flex items-center gap-2 border-t xl:pt-3 lg:pt-2">
            <x-badges.accent :text="$topic" />
            <div class="bg-gray-900 rounded-full xl:size-3 lg:size-2"></div>
            <x-fonts.paragraph-small :text="$date" />
        </div>
        <a href="" class="block font-medium hover:underline text-primary">
            <x-fonts.paragraph text="Baca Selengkapnya" />
        </a>
    </div>
</x-card>
