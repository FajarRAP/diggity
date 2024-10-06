@props(['title', 'classes', 'src'])

<x-card class="lg:space-y-4 xl:space-y-6">
    <div class="flex items-center gap-2">
        <img src="{{ $src }}" alt="path image" class="rounded-full xl:size-20 lg:size-14">
        <div class="flex flex-col">
            <x-paragraph class="font-semibold">{{ $title }}</x-paragraph>
            <x-paragraph-small class="text-gray-500">Tersedia {{ $classes }} Kelas</x-paragraph-small>
        </div>
    </div>
    <x-button class="mx-auto">Lihat Alur Belajar</x-button>
</x-card>
