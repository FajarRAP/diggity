@props(['title', 'description', 'targets'])

<x-card class="flex flex-col justify-between xl:gap-6 lg:gap-4 shadow-card-secondary">
    <x-paragraph class="font-semibold">{{ $title }}</x-paragraph>
    <x-paragraph-small class="pb-3 border-b">{{ $description }}</x-paragraph-small>
    <div class="space-y-3">
        <x-paragraph class="font-semibold">Target Partisipan</x-paragraph>
        @foreach ($targets as $target)
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/icons/check-circle.png') }}" alt="check circle" class="xl:size-6 lg:size-4">
                <x-paragraph-small>{{ $target }}</x-paragraph-small>
            </div>
        @endforeach
    </div>
    <x-paragraph-small class="pt-3 border-t">
        Kami dapat menyesuaikan program, cara pengajaran, dan kursus ini sesuai
        dengan kebutuhan Anda.</x-paragraph-small>
    <x-button class="ms-auto">Hubungi Kami</x-button>
</x-card>
