<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};

?>

<div>
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link :href="route('academy')">Akademi</x-breadcumb-link>
            <x-breadcumb-link :href="route('academy-class')">Kelas</x-breadcumb-link>
            <x-breadcumb-link>Kategori Kelas</x-breadcumb-link>
        </x-breadcumb>
        <x-heading-one>Category Class Title</x-heading-one>
        <x-paragraph>Category Class Description</x-paragraph>
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
            <x-breadcumb-link :href="route('academy')">Akademi</x-breadcumb-link>
            <x-breadcumb-link :href="route('academy-class')">Kelas</x-breadcumb-link>
            <x-breadcumb-link>Kategori Kelas</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
    <x-footer />
</div>
