@props(['title', 'description', 'num', 'href'])

<x-card class="lg:space-y-4 xl:space-y-6 shadow-card-secondary">
    <img src="{{ asset("assets/images/portfolio/item$num-portfolio.png") }}" alt="item portfolio"
        class="object-cover w-full lg:h-32 xl:h-52 rounded-xl">
    <x-fonts.paragraph class="font-semibold" text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
    <x-fonts.paragraph
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor elementum dui
        feugiat fringilla. Praesent tortor magna, dignissim eu viverra a, efficitur eget sem. Donec quis
        molestie lacus. Donec at sem sit amet magna consequat hendrerit et eu eros. In quis molestie
        risus. Nulla bibendum tempor lacus, eu elementum odio commodo sed." />
    <a href="{{ $href }}" class="block w-fit" wire:navigate>
        <x-button text="Lihat Selengkapnya" />
    </a>
</x-card>
