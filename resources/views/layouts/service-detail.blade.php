<x-app-layout>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link :href="route('service')" wire:navigate>
                Layanan
            </x-breadcumb-link>
            <x-breadcumb-link>
                {{ $name }}
            </x-breadcumb-link>
        </x-breadcumb>

        <h1 class="text-center heading-one">{{ $name }}</h1>
        <p class="mx-auto text-center paragraph xl:w-3/4">
            {{ $description }}
        </p>
        <a href="{{ route('contact-us') }}" class="block mx-auto w-fit" wire:navigate>
            <x-button>Hubungi Kami</x-button>
        </a>
    </x-wrapper>

    {{-- Service Details --}}
    <x-wrapper>
        <div class="grid grid-cols-2 xl:gap-24 lg:gap-12">
            <h1 class="my-auto heading-one">Layanan {{ $name }} yang Kami Sediakan</h1>
            <div class="grid grid-cols-2 lg:gap-x-3.5 xl:gap-x-7 lg:gap-y-6 xl:gap-y-12">
                {{ $servicesProvided }}
            </div>
        </div>
    </x-wrapper>

    {{-- Our Solutions --}}
    <x-wrapper bg="bg-secondary">
        <h2 class="mx-auto text-center xl:w-3/4 heading-two">
            Layanan Website Development Kami Membantu Anda
            Membangun Berbagai Solusi
        </h2>
        <div class="grid grid-cols-3 lg:gap-x-10 xl:gap-x-20 lg:gap-y-12 xl:gap-y-24">
            {{ $solutions }}
        </div>
    </x-wrapper>

    {{-- FAQs --}}
    <x-wrapper>
        <div class="grid grid-cols-2 xl:gap-24 lg:gap-12">
            {{ $faqs }}
        </div>
    </x-wrapper>

    {{-- Contact Us --}}
    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    {{-- Bottom Breadcumb --}}
    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link>
                Layanan
            </x-breadcumb-link>
            <x-breadcumb-link>
                {{ $name }}
            </x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    {{-- Footer --}}
    <x-footer />
</x-app-layout>
