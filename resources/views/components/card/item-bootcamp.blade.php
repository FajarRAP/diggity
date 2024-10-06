@props(['title', 'description', 'level', 'date', 'src'])

<x-card class="flex flex-col justify-between xl:gap-6 lg:gap-4">
    <img src="{{ $src }}" alt="bootcamp image" class="rounded-lg">
    <div class="flex items-center justify-between">
        <x-paragraph class="font-semibold basis-2/3">{{ $title }}</x-paragraph>
        <x-badges.primary :text="$level" />
    </div>
    <x-paragraph-small>{{ $description }}</x-paragraph-small>
    <div class="flex items-start justify-between">
        <div class="flex flex-col lg:gap-2 xl:gap-3">
            <x-paragraph-small>Batch Terdekat</x-paragraph-small>
            <x-paragraph-small class="font-semibold">{{ $date }}</x-paragraph-small>
        </div>
        <x-button>Daftar Bootcamp</x-button>
    </div>
</x-card>
