@props(['contentType', 'href'])

<x-card class="flex items-center justify-between mt-auto">
    <div class="flex flex-col gap-2">
        <x-fonts.paragraph class="font-semibold" :text="$contentType . ' Selengkapnya'" />
        <x-fonts.paragraph-small :text="'Lihat selengkapnya tentang ' . Str::lower($contentType) . ' kami'" />
    </div>
    <a href="{{ $href }}" class="font-medium text-primary hover:underline hover:cursor-pointer" wire:navigate>
        <x-fonts.paragraph :text="'Lihat Semua ' . $contentType" />
    </a>
</x-card>
