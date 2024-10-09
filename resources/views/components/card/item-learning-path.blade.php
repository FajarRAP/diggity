@props(['title', 'classes', 'src'])

<x-card class="lg:space-y-4 xl:space-y-6">
    <div class="flex items-center gap-2">
        <img src="{{ $src }}" alt="path image" class="rounded-full xl:size-20 lg:size-14">
        <div class="flex flex-col">
            <x-fonts.paragraph class="font-semibold" :text="$title" />
            <x-fonts.paragraph-small class="text-gray-500" text="Tersedia {{ $classes }} Kelas" />
        </div>
    </div>
    <x-button class="mx-auto" text="Lihat Alur Belajar" />
</x-card>
