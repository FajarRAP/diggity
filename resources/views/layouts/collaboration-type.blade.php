@props(['prev', 'next'])

<x-app-layout>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link href="#">{{ $title }}</x-breadcumb-link>
        </x-breadcumb>

        <x-hero-header :src="asset('assets/images/collaboration_type/header-' . Str::slug($title, '-') . '.jpeg')">
            <x-slot:type>{{ $title }}</x-slot:type>
            <x-slot:description>{{ $description }}</x-slot:description>
        </x-hero-header>
    </x-wrapper>

    {{-- Benefits --}}
    <x-wrapper class="text-center">
        <x-heading-one>Benefit</x-heading-one>
        <x-paragraph>Manfaat yang Anda Dapatkan</x-paragraph>
        {{ $benefits }}
    </x-wrapper>

    {{-- FAQ --}}
    <x-wrapper bg="bg-secondary" :isFaq="true">
        <div class="lg:space-y-4 xl:space-y-6">
            <x-heading-four class="text-accent">Frequently Asked Question</x-heading-four>
            <x-heading-two>Pelajari Lebih Lanjut</x-heading-two>
        </div>
        <div class="flex flex-col lg:gap-4 xl:gap-6">
            {{ $faqs }}
        </div>
    </x-wrapper>

    {{-- Bottom Navigation --}}
    <x-wrapper>
        <x-bottom-navigation :prev="$prev" :next="$next" />
    </x-wrapper>

    {{-- Contact Us --}}
    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    {{-- Bottom Breadcumb --}}
    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link href="#">{{ $title }}</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    {{-- Footer --}}
    <x-footer />
</x-app-layout>
