@props(['prev', 'next'])

<x-app-layout>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link href="#">{{ $title }}</x-breadcumb-link>
        </x-breadcumb>

        <x-hero-header :src="asset('asset/images/collaboration_type/header-' . Str::slug($title, '-') . '.jpeg')">
            <x-slot:type>{{ $title }}</x-slot:type>
            <x-slot:description>
                {{ $description }}
            </x-slot:description>
        </x-hero-header>
    </x-wrapper>

    {{-- Benefits --}}
    <x-wrapper class="text-center">
        <h1 class="heading-one">Benefit</h1>
        <p class="paragraph">Manfaat yang Anda Dapatkan</p>
        {{ $benefits }}
    </x-wrapper>

    {{-- FAQ --}}
    <x-wrapper bg="bg-secondary" :isFaq="true">
        <h4 class="heading-four text-accent">Frequently Asked Question</h4>
        <h2 class="xl:mb-12 lg:mb-6 lg:mt-3 xl:mt-6 heading-two">Pelajari Lebih Lanjut</h2>
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
