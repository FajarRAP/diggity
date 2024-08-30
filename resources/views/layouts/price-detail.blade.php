<x-app-layout>
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link>Harga</x-breadcumb-link>
            <x-breadcumb-link>{{ $product }}</x-breadcumb-link>
        </x-breadcumb>

        <x-heading-two class="w-1/2 mx-auto text-center">{{ $title }}</x-heading-two>
        <x-paragraph class="w-1/2 mx-auto text-center">{{ $description }}</x-paragraph>
    </x-wrapper>

    <x-wrapper>
        <div class="space-y-6">
            <x-heading-four class="text-accent">Frequently Asked Questions</x-heading-four>
            <x-heading-two>Pelajari Lebih Lanjut</x-heading-two>
        </div>
        <div class="flex flex-col gap-6">
            {{ $faqs }}
        </div>
    </x-wrapper>

    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link>Harga</x-breadcumb-link>
            <x-breadcumb-link>{{ $product }}</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    <x-footer />
</x-app-layout>
