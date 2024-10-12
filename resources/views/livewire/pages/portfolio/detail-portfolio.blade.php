<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {
    public string $id;
}; ?>

<div>
    {{-- Top Breadcumb & Portfolio --}}
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link :href="route('portfolio')" link="Portofolio" />
            <x-breadcumb-link link="Judul Proyek {{ $id }}" />
        </x-breadcumb>

        <x-fonts.heading-one class="text-center" text="Portofolio" />
        <div class="w-full bg-gray-300 h-96 rounded-2xl"></div>
        <x-card>
            <div class="flex">
                <x-item-portfolio-data header="Klien" content="Lorem Ipsum" />
                <x-item-portfolio-data header="Tahun" content="Lorem Ipsum" />
                <x-item-portfolio-data header="Layanan" content="Lorem Ipsum" />
                <x-item-portfolio-data header="Lokasi" content="Lorem Ipsum" />
                <x-item-portfolio-data header="Link" content="Lorem Ipsum" />
                <x-item-portfolio-data header="Device" content="Lorem Ipsum" />
            </div>
        </x-card>
    </x-wrapper.transparent>

    {{-- Project Detail --}}
    <x-wrapper.inverse-primary>
        <x-hero-header :src="asset('assets/images/portfolio/header-portfolio.jpeg')" title="Detail Proyek"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis augue imperdiet, volutpat augue sed, mollis arcu. Suspendisse libero ante, viverra quis sapien nec, aliquet semper tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus." />
    </x-wrapper.inverse-primary>

    {{-- Our Responsibility --}}
    <x-wrapper.transparent>
        <x-fonts.heading-one text="Tanggung Jawab Kami" />
        <x-fonts.paragraph
            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis augue imperdiet, volutpat augue sed, mollis arcu. Suspendisse libero ante, viverra quis sapien nec, aliquet semper tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In accumsan, sapien a scelerisque auctor, risus ligula efficitur libero, ac tincidunt metus nunc at dui." />
        <div class="w-3/4 mx-auto bg-gray-300 h-96 rounded-2xl"></div>
    </x-wrapper.transparent>

    {{-- Project Responsibility --}}
    <x-wrapper.inverse-primary>
        <x-fonts.heading-one text="Tanggung Jawab Proyek" />
        <div class="grid grid-cols-5 xl:mx-24 lg:mx-12 lg:gap-x-4 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
            @for ($i = 0; $i < 10; $i++)
                <div class="p-4 font-semibold text-center text-white rounded-full bg-primary">
                    <x-fonts.paragraph text="Lorem Ipsum" />
                </div>
            @endfor
        </div>
    </x-wrapper.inverse-primary>

    {{-- Technology and Gallery --}}
    <x-wrapper.transparent>
        <x-fonts.heading-one text="Teknologi yang Kami Gunakan" />
        <div class="grid grid-cols-5 lg:gap-4 xl:gap-7 lg:mx-12 xl:mx-24">
            @for ($i = 0; $i < 5; $i++)
                <div class="bg-gray-300 h-44 rounded-2xl"></div>
            @endfor
        </div>
        <x-fonts.heading-one text="Galeri" />
        <div class="grid grid-cols-3 lg:gap-x-4 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
            @for ($i = 0; $i < 9; $i++)
                <div class="bg-gray-300 h-60 rounded-2xl"></div>
            @endfor
        </div>
    </x-wrapper.transparent>

    {{-- Hubungi Kami --}}
    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    {{-- Bottom Breadcumb --}}
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link :href="route('portfolio')" link="Portofolio" />
            <x-breadcumb-link link="Judul Proyek {{ $id }}" />
        </x-breadcumb>
    </x-wrapper.transparent>
</div>
