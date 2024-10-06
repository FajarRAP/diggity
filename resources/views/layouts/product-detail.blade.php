<x-app-layout>
    <x-wrapper bg="bg-ghost-white">
        {{-- Top Breadcumb --}}
        <x-breadcumb>
            <x-breadcumb-link :href="route('product')" wire:navigate>
                Produk
            </x-breadcumb-link>
            <x-breadcumb-link>
                {{ $name }}
            </x-breadcumb-link>
        </x-breadcumb>

        {{-- Header --}}
        <div class="grid grid-cols-2 xl:gap-24 lg:gap-16">
            <div class="flex flex-col xl:gap-6 lg:gap-4">
                <x-heading-two>{{ $title }}</x-heading-two>
                {{ $description }}
                <a href="{{ route('contact-us') }}" class="w-fit" wire:navigate>
                    <x-button>Hubungi Kami</x-button>
                </a>
            </div>
            <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="header image"
                class="my-auto rounded-2xl">
        </div>

        {{-- Benefits --}}
        {{ $benefits }}

        {{-- FAQS --}}
        {{ $faqs }}
    </x-wrapper>

    {{-- Contact Us --}}
    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    {{-- Bottom Breadcumb --}}
    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link :href="route('product')">
                Produk
            </x-breadcumb-link>
            <x-breadcumb-link>
                {{ $name }}
            </x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    {{-- Footer --}}
    <x-footer />
</x-app-layout>
