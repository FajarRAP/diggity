<x-card class="flex items-center justify-between">
    <div class="flex flex-col gap-2">
        <x-paragraph class="font-semibold">{{ $contentType }} Selengkapnya</x-paragraph>
        <x-paragraph-small>Lihat selengkapnya tentang {{ Str::lower($contentType) }} kami</x-paragraph-small>
    </div>
    <a {{ $attributes }} class="font-medium text-primary hover:underline paragraph" wire:navigate>
        Lihat Semua {{ $contentType }}
    </a>
</x-card>
