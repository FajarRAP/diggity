@props(['title', 'description', 'badges'])

<x-card class="lg:space-y-2 xl:space-y-3">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="custom training image"
        class="rounded-full xl:size-16 lg:size-10">
    <x-fonts.paragraph class="font-semibold" :text="$title" />
    <x-fonts.paragraph-small class="pb-3 border-b" :text="$description" />
    <div class="flex flex-wrap gap-3">
        @foreach ($badges as $badge)
            <x-badges.primary :text="$badge" />
        @endforeach
    </div>
</x-card>
