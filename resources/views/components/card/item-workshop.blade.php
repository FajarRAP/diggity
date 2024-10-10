@props(['title', 'description', 'targets'])

<x-card class="flex flex-col justify-between xl:gap-6 lg:gap-4 shadow-card-secondary">
    <x-fonts.paragraph class="font-semibold" :text="$title" />
    <x-fonts.paragraph-small class="pb-3 border-b" :text="$description" />
    <div class="lg:space-y-2 xl:space-y-3">
        <x-fonts.paragraph class="font-semibold" text="Target Partisipan" />
        @foreach ($targets as $target)
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/icons/check-circle.png') }}" alt="check circle" class="xl:size-6 lg:size-4">
                <x-fonts.paragraph-small :text="$target" />
            </div>
        @endforeach
    </div>
    <x-fonts.paragraph-small class="pt-3 border-t"
        text="Kami dapat menyesuaikan program, cara pengajaran, dan kursus ini sesuai
        dengan kebutuhan Anda." />
    <x-button class="ms-auto" text="Hubungi Kami" />
</x-card>
