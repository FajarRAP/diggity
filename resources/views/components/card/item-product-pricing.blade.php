@props(['type', 'description'])

{{-- , 'benefits', 'info', 'price', 'varians' --}}

<x-card class="flex flex-col xl:gap-6 lg:gap-4">
    <x-fonts.heading-four class="font-semibold" :text="$type" />
    <x-fonts.paragraph :text="$description" />
    {{-- <x-card class="!bg-ghost-white xl:space-y-3 lg:space-y-2">
        <x-fonts.paragraph class="font-semibold" text="Fitur Unggulan" />
        @foreach ($benefits as $benefit)
            <x-check-circle :benefit="$benefit" class="lg:ms-2 xl:ms-3" />
        @endforeach
    </x-card>
    <x-fonts.paragraph-small
        text="Dapatkan penawaran harga yang sesuai dengan kebutuhan Anda dengan berkonsultasi bersama kami." /> --}}
    <x-button text="Hubungi Kami" class="self-center mt-auto w-fit" />
</x-card>
