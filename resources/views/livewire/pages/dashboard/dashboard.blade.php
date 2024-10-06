<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.dashboard')] class extends Component {
    //
}; ?>

<div class="px-8 py-12 ">
    <x-slot:submenu>
        <div x-data="{ showSecond: false }" x-bind:class="showSecond ? 'w-36' : 'w-24'"
            class="flex flex-col gap-12 px-8 py-12 font-semibold text-center transition-all bg-primary/10">
            <img x-on:click="showSecond=!showSecond" x-bind:class="showSecond ? 'rotate-0' : 'rotate-180'"
                src="{{ asset('assets/icons/double-arrow.png') }}" alt="Sidebar Icon"
                class="self-end mt-auto transition hover:cursor-pointer size-8">
        </div>
    </x-slot:submenu>

    <x-heading-five>Dashboard</x-heading-five>

    <x-card class="rounded-lg lg:mt-6 xl:mt:10 w-fit">
        <div class="flex lg:gap-5 xl:gap-8">
            <div class="flex flex-col justify-between">
                <x-paragraph-small>Pesan Layanan Masuk</x-paragraph-small>
                <x-heading-three>1234</x-heading-three>
            </div>
            <div class="bg-gray-300 rounded-lg size-20 "></div>
        </div>
    </x-card>

    <x-paragraph class="xl:mt-12 lg:mt-8">Jumlah Pengunjung</x-paragraph>

    <x-card class="w-full lg:mt-4 xl:mt-6">

    </x-card>
</div>
