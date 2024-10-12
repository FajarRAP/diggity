@props(['name', 'description', 'definition'])

<x-app-layout>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link :href="route('service')" link="Layanan" />
            <x-breadcumb-link href="#" :link="$name" />
        </x-breadcumb>

        <x-fonts.heading-one class="text-center" :text="$name" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center" :text="$description" />

        <a href="{{ route('contact-us') }}" class="block mx-auto w-fit" wire:navigate>
            <x-button text="Hubungi Kami" />
        </a>
    </x-wrapper.inverse-primary>

    {{-- Service Details | Our First Solution --}}
    <x-wrapper.transparent>
        @if (!Route::is('s-digital-marketing'))
            <div class="grid grid-cols-2 xl:gap-24 lg:gap-16">
                <x-fonts.heading-one class="my-auto" text="Layanan {{ $name }} yang Kami Sediakan" />
                <div class="grid grid-cols-2 lg:gap-x-4 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
                    {{ $servicesProvided }}
                </div>
            </div>
        @else
            <div class="xl:space-y-24 lg:space-y-16">
                <x-fonts.heading-one class="mx-auto text-center heading-one"
                    text="Layanan {{ $name }} Kami Membantu Anda Membangun Berbagai Solusi" />

                <div class="flex xl:gap-36 lg:gap-24">
                    {{ $firstServiceSolutions }}
                </div>
            </div>
        @endif
    </x-wrapper.transparent>

    {{-- Our Solutions --}}
    <x-wrapper.inverse-primary>
        @if (!Route::is('s-digital-marketing'))
            <x-fonts.heading-two class="mx-auto text-center lg:w-3/5 xl:w-3/4"
                text="Layanan {{ $name }} Kami Membantu Anda Membangun Berbagai Solusi" />
            <div class="grid grid-cols-3 lg:gap-x-14 xl:gap-x-20 lg:gap-y-16 xl:gap-y-24">
                {{ $solutions }}
            </div>
        @else
            <div class="flex xl:gap-36 lg:gap-24">
                {{ $secondServiceSolutions }}
            </div>
        @endif
    </x-wrapper.inverse-primary>

    {{-- FAQs --}}
    <x-wrapper.transparent>
        <div class="grid grid-cols-2 xl:gap-24 lg:gap-16">
            <div class="lg:space-y-4 xl:space-y-6">
                <x-fonts.heading-three class="text-accent" text="Frequently Asked Questions" />
                <x-fonts.heading-two text="Apa itu layanan {{ $name }}?" />
                <x-fonts.paragraph :text="$definition" />
            </div>
            <div class="flex flex-col lg:gap-4 xl:gap-6">
                {{ $faqs }}
            </div>
        </div>
    </x-wrapper.transparent>

    {{-- Contact Us --}}
    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    {{-- Bottom Breadcumb --}}
    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link :href="route('service')" link="Layanan" />
            <x-breadcumb-link href="#" :link="$name" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</x-app-layout>
