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

        <x-heading-one class="text-center">{{ $name }}</x-heading-one>
        {{-- <p class="mx-auto text-center paragraph xl:w-3/4"> --}}
        <x-paragraph class="w-3/4 mx-auto text-center">{{ $description }}</x-paragraph>
        {{-- </p> --}}
        <a href="{{ route('contact-us') }}" class="block mx-auto w-fit" wire:navigate>
            <x-button>Hubungi Kami</x-button>
        </a>
    </x-wrapper>

    {{-- Service Details | Our First Solution --}}
    <x-wrapper>
        @if (!Route::is('s-digital-marketing'))
            <div class="grid grid-cols-2 xl:gap-24 lg:gap-16">
                <x-heading-one class="my-auto">Layanan {{ $name }} yang Kami Sediakan</x-heading-one>
                <div class="grid grid-cols-2 lg:gap-x-4 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
                    {{ $servicesProvided }}
                </div>
            </div>
        @else
            <div class="xl:space-y-24 lg:space-y-12">
                <h1 class="mx-auto text-center xl:w-3/4 heading-one">
                    Layanan {{ $name }} Kami Membantu Anda Membangun Berbagai Solusi
                </h1>
                <div class="flex xl:gap-36 lg:gap-24">
                    {{ $firstServiceSolutions }}
                </div>
            </div>
        @endif
    </x-wrapper>

    {{-- Our Solutions --}}
    <x-wrapper bg="bg-secondary">
        @if (!Route::is('s-digital-marketing'))
            <x-heading-two class="mx-auto text-center lg:w-3/5 xl:w-3/4">
                Layanan {{ $name }} Kami Membantu Anda Membangun Berbagai Solusi
            </x-heading-two>
            <div class="grid grid-cols-3 lg:gap-x-14 xl:gap-x-20 lg:gap-y-16 xl:gap-y-24">
                {{ $solutions }}
            </div>
        @else
            <div class="flex xl:gap-36 lg:gap-24">
                {{ $secondServiceSolutions }}
            </div>
        @endif
    </x-wrapper>

    {{-- FAQs --}}
    <x-wrapper>
        <div class="grid grid-cols-2 xl:gap-24 lg:gap-16">
            <div class="lg:space-y-4 xl:space-y-6">
                <x-heading-three class="text-accent">Frequently Asked Questions</x-heading-three>
                <x-heading-two>Apa itu layanan {{ $name }}?</x-heading-two>
                <x-paragraph>{{ $definition }}</x-paragraph>
            </div>
            <div class="flex flex-col lg:gap-4 xl:gap-6">
                {{ $faqs }}
            </div>
        </div>
    </x-wrapper>

    {{-- Contact Us --}}
    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    {{-- Bottom Breadcumb --}}
    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link :href="route('service')" wire:navigate>
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
