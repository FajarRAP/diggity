@props(['benefits', 'href', 'reversed' => false])

<div class="grid grid-cols-2 lg:gap-16 xl:gap-32">
    <img {{ $attributes->class(['my-auto', 'rounded-2xl', 'order-1' => !$reversed, 'order-2' => !$reversed]) }}
        alt="body image">
    <div class="flex flex-col xl:gap-6 lg:gap-4">
        <x-heading-three>{{ $title }}</x-heading-three>
        <x-paragraph>{{ $description }}</x-paragraph>
        @foreach ($benefits as $benefit)
            <x-check-circle :benefit="$benefit" />
        @endforeach
        <a href="{{ $href }}" wire:navigate>
            <x-outline-button class="self-end lg:mt-3 xl:mt-6 w-fit">
                Pelajari Selengkapnya
            </x-outline-button>
        </a>
    </div>
</div>
