@props(['title', 'description', 'badges'])

<x-card class="space-y-3">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="custom training image"
        class="rounded-full xl:size-16 lg:size-10">
    <x-paragraph class="font-semibold">{{ $title }}</x-paragraph>
    <x-paragraph-small class="pb-3 border-b">{{ $description }}</x-paragraph-small>
    <div class="flex flex-wrap gap-3">
        @foreach ($badges as $badge)
            <x-badges.primary :text="$badge" />
        @endforeach
    </div>
</x-card>
