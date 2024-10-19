@props(['name', 'href'])

<a href="{{ $href }}" wire:navigate>
    <x-card class="flex items-center lg:gap-4 xl:gap-6">
        <img src="{{ asset('assets/images/prices/pages/product-1.png') }}" alt="Product Icon" class="size-20">
        <x-fonts.paragraph :text="$name" />
    </x-card>
</a>
