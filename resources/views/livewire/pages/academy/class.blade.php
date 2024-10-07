<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};

?>

<div>
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link href="{{ route('academy') }}">Akademi</x-breadcumb-link>
            <x-breadcumb-link>Kelas</x-breadcumb-link>
        </x-breadcumb>
        <x-heading-one>Daftar Kelas</x-heading-one>
        <x-paragraph class="w-1/3">
            Diggity menyediakan kelas online terbaik dalam berbagai bidang IT seperti Desain, Pengembangan Perangkat
            Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital yang cocok untuk pemula.</x-paragraph>
        <div class="flex pb-5 border-b border-black/50 xl:gap-12 lg:gap-8 xl:pt-12 lg:pt-6">
            <x-heading-three class="text-primary">Terbaru</x-heading-three>
            <x-heading-three>Terpopuler</x-heading-three>
        </div>
        <div class="grid grid-cols-3 xl:gap-x-7 lg:gap-x-5 xl:gap-y-12 lg:gap-y-8">
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
        </div>
        <x-heading-one class="xl:pt-12 lg:pt-6">Jelajahi Kelas Sesuai dengan Minatmu</x-heading-one>
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <x-card class="flex items-center justify-center grow lg:gap-1 xl:gap-3">
                <img src="{{ asset('assets/icons/filter.png') }}" alt="filter icon" class="xl:size-8 lg:size-5">
                <x-heading-three>Filter</x-heading-three>
            </x-card>
            <x-card class="flex items-center justify-center grow lg:gap-1 xl:gap-3">
                <img src="{{ asset('assets/icons/sort.png') }}" alt="sort icon" class="xl:size-8 lg:size-5">
                <x-heading-three>Urutkan</x-heading-three>
            </x-card>
            <x-card class="flex col-span-2 xl:gap-7 grow lg:gap-5 justify-evenly">
                <x-button>Terbaru</x-button>
                <x-button>Terpopuler</x-button>
                <x-button>Peringkat Tertinggi</x-button>
            </x-card>
        </div>
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <div class="flex flex-col xl:gap-7 lg:gap-5">
                <x-card class="xl:space-y-6 lg:space-y-4">
                    <div class="flex items-center justify-between">
                        <x-heading-three>Kategori</x-heading-three>
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
                        <x-heading-three>Tingkat</x-heading-three>
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
                        <x-heading-three>Harga</x-heading-three>
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
            <x-breadcumb-link href="{{ route('academy') }}">Akademi</x-breadcumb-link>
            <x-breadcumb-link>Kelas</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
    <x-footer />
</div>
