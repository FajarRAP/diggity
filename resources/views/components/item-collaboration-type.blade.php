@props(['benefits'])

<a {{ $attributes }} wire:navigate>
    <x-card
        class="flex flex-col h-full text-left transition duration-300 shadow-none lg:gap-4 xl:gap-6 rounded-xl hover:shadow-card hover:-translate-y-1">
        <img src="{{ asset('assets/images/collaboration_type/icon-' . Str::slug($title, '-') . '.png') }}"
            alt="collaboration type" class="lg:size-16 xl:size-24">
        <x-heading-three class="border-b lg:pb-2 xl:pb-3">{{ $title }}</x-heading-three>
        <x-paragraph>{{ $description }}</x-paragraph>
        @foreach ($benefits as $benefit)
            <x-check-circle :benefit="$benefit" />
        @endforeach
        <hr class="mt-auto">
    </x-card>
</a>
