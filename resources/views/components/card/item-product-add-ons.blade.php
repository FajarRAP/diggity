@props(['num'])

<x-card {{ $attributes->merge(['class' => 'text-center xl:space-y-6 lg:space-y-4']) }}>
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="add ons icon"
        class="mx-auto xl:size-24 lg:size-16">
    <x-fonts.paragraph class="font-semibold" text="Lorem Ipsum Dolor Sit Amet {{ $num }}" />
    <x-fonts.paragraph-small text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
    <div class="flex items-center lg:gap-2 xl:gap-4">
        <img src="{{ asset('assets/icons/check-circle.png') }}" class="lg:size-4 xl:size-6">
        <div class="text-left">
            <x-fonts.paragraph class="font-semibold" text="Lorem Ipsum" />
            <x-fonts.paragraph-small text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
        </div>
    </div>
    <x-button class="mx-auto" text="Hubungi Kami" />
</x-card>
