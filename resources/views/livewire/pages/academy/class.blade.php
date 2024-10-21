<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};

?>

<div>
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link href="{{ route('academy') }}" link="Akademi" />
            <x-breadcumb-link link="Kelas" />
        </x-breadcumb>
        <x-fonts.heading-one text="Daftar Kelas" />
        <x-fonts.paragraph class="w-1/3"
            text="Diggity menyediakan kelas online terbaik dalam berbagai bidang IT seperti Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital yang cocok untuk pemula." />
        <div class="flex pb-5 border-b border-black/50 xl:gap-12 lg:gap-8 xl:pt-12 lg:pt-6">
            <x-fonts.heading-three class="text-primary" text="Terbaru" />
            <x-fonts.heading-three text="Terpopuler" />
        </div>
        <div class="grid grid-cols-3 xl:gap-x-7 lg:gap-x-5 xl:gap-y-12 lg:gap-y-8">
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
        </div>
        <x-fonts.heading-one class="xl:pt-12 lg:pt-6" text="Jelajahi Kelas Sesuai dengan Minatmu" />
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <x-card class="flex items-center justify-center grow lg:gap-1 xl:gap-3">
                <img src="{{ asset('assets/icons/filter.png') }}" alt="filter icon" class="xl:size-8 lg:size-5">
                <x-fonts.heading-three text="Filter" />
            </x-card>
            <x-card class="flex items-center justify-center grow lg:gap-1 xl:gap-3">
                <img src="{{ asset('assets/icons/sort.png') }}" alt="sort icon" class="xl:size-8 lg:size-5">
                <x-fonts.heading-three text="Urutkan" />
            </x-card>
            <x-card class="flex col-span-2 xl:gap-7 grow lg:gap-5 justify-evenly">
                <x-button text="Terbaru" />
                <x-button text="Terpopuler" />
                <x-button text="Peringkat Tertinggi" />
            </x-card>
        </div>
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <div class="flex flex-col xl:gap-7 lg:gap-5">
                <x-card class="xl:space-y-6 lg:space-y-4">
                    <div class="flex items-center justify-between">
                        <x-fonts.heading-three text="Kategori" />
                        <x-svgs.arrow class="lg:size-2.5 rotate-90" />
                    </div>
                    <div class="xl:space-y-3 lg:space-y-2">
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">UI/UX Design</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Website Development</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Mobile App Development</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Data Analysis</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Cyber Security</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Digital Marketing</label>
                        </div>
                    </div>
                </x-card>
                <x-card class="xl:space-y-6 lg:space-y-4">
                    <div class="flex items-center justify-between">
                        <x-fonts.heading-three text="Tingkat" />
                        <x-svgs.arrow class="lg:size-2.5 rotate-90" />
                    </div>
                    <div class="xl:space-y-3 lg:space-y-2">
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Pemula</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Menengah</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Ahli</label>
                        </div>
                    </div>
                </x-card>
                <x-card class="xl:space-y-6 lg:space-y-4">
                    <div class="flex items-center justify-between">
                        <x-fonts.heading-three text="Harga" />
                        <x-svgs.arrow class="lg:size-2.5 rotate-90" />
                    </div>
                    <div class="xl:space-y-3 lg:space-y-2">
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Gratis</label>
                        </div>
                        <div class="">
                            <input type="checkbox" name="" id="">
                            <label for="">Berbayar</label>
                        </div>
                    </div>
                </x-card>
            </div>
            <div class="flex flex-col col-span-3 xl:gap-7 lg:gap-5">
                <x-card.item-class-horizontal />
                <x-card.item-class-horizontal />
                <x-card.item-class-horizontal />
                <x-card.item-class-horizontal />
                <x-card.item-class-horizontal />
            </div>
        </div>
    </x-wrapper.transparent>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link href="{{ route('academy') }}" link="Akademi" />
            <x-breadcumb-link link="Kelas" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</div>
