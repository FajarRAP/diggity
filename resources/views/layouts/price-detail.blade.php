@props(['name', 'title', 'description'])

<x-app-layout>
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link :href="route('price')" link="Harga" />
            <x-breadcumb-link :link="$name" />
        </x-breadcumb>

        <x-fonts.heading-two class="w-2/3 mx-auto text-center" :text="$title" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center" :text="$description" />
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        {{ $slot }}
    </x-wrapper.transparent>

    {{ $addOns }}

    <x-wrapper.transparent>
        <div class="lg:space-y-4 xl:space-y-6">
            <x-fonts.heading-four class="text-accent" text="Frequently Asked Questions" />
            <x-fonts.heading-two text="Pelajari Lebih Lanjut" />
        </div>
        <div class="flex flex-col lg:gap-4 xl:gap-6">
            {{ $faqs }}
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link :href="route('price')" link="Harga" />
            <x-breadcumb-link :link="$name" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</x-app-layout>
