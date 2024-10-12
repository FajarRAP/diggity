@props(['name', 'title'])

<x-app-layout>
    <x-wrapper.transparent>
        {{-- Top Breadcumb --}}
        <x-breadcumb>
            <x-breadcumb-link :href="route('product')" link="Produk" />
            <x-breadcumb-link href="#" :link="$name" />
        </x-breadcumb>

        {{-- Header --}}
        <div class="grid grid-cols-2 xl:gap-24 lg:gap-16">
            <div class="flex flex-col xl:gap-6 lg:gap-4">
                <x-fonts.heading-two :text="$title" />
                {{ $description }}
                <a href="{{ route('contact-us') }}" class="w-fit" wire:navigate>
                    <x-button text="Hubungi Kami" />
                </a>
            </div>
            <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="header image"
                class="my-auto rounded-2xl">
        </div>

        {{-- Benefits --}}
        {{ $benefits }}

        {{-- FAQS --}}
        {{ $faqs }}
    </x-wrapper.transparent>

    {{-- Contact Us --}}
    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    {{-- Bottom Breadcumb --}}
    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link :href="route('product')" link="Produk" />
            <x-breadcumb-link href="#" :link="$name" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</x-app-layout>
