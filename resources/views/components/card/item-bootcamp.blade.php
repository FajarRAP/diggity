@props(['title', 'description', 'level', 'date', 'src'])

<x-card class="flex flex-col justify-between text-left xl:gap-6 lg:gap-4">
    <img src="{{ $src }}" alt="bootcamp image" class="rounded-lg">
    <div class="flex items-center justify-between">
        <x-fonts.paragraph class="font-semibold basis-2/3" :text="$title" />
        <x-badges.primary :text="$level" />
    </div>
    <x-fonts.paragraph-small :text="$description" />
    <div class="flex items-start justify-between">
        <div class="flex flex-col lg:gap-2 xl:gap-3">
            <x-fonts.paragraph-small text="Batch Terdekat" />
            <x-fonts.paragraph-small class="font-semibold" :text="$date" />
        </div>
        <x-button text="Daftar Bootcamp" />
    </div>
</x-card>
