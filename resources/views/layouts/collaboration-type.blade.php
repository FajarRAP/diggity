@props(['prev', 'next', 'title', 'description'])

<x-app-layout>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link href="#" :link="$title" />
        </x-breadcumb>

        <x-hero-header :src="asset('assets/images/collaboration_type/header-' . Str::slug($title, '-') . '.jpeg')" :title="$title" :description="$description" />
    </x-wrapper.inverse-primary>

    {{-- Benefits --}}
    <x-wrapper.transparent class="text-center">
        <x-fonts.heading-one text="Benefit" />
        <x-fonts.paragraph text="Manfaat yang Anda Dapatkan" />
        {{ $benefits }}
    </x-wrapper.transparent>

    {{-- FAQ --}}
    <x-wrapper.inverse-primary>
        <div class="lg:space-y-4 xl:space-y-6">
            <x-fonts.heading-four class="text-accent" text="Frequently Asked Question" />
            <x-fonts.heading-two text="Pelajari Lebih Lanjut" />
        </div>
        <div class="flex flex-col lg:gap-4 xl:gap-6">
            {{ $faqs }}
        </div>
    </x-wrapper.inverse-primary>

    {{-- Bottom Navigation --}}
    <x-wrapper.transparent>
        <x-bottom-navigation :prev="$prev" :next="$next" />
    </x-wrapper.transparent>

    {{-- Contact Us --}}
    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    {{-- Bottom Breadcumb --}}
    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link href="#" :link="$title" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</x-app-layout>
