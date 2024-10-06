<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.dashboard')] class extends Component {
    //
}; ?>

<div>
    <x-slot:submenu>
        <div x-data="{ showSecond: false }" x-bind:class="showSecond ? 'w-36' : 'w-24'"
            class="flex flex-col gap-12 px-8 py-12 font-semibold text-center transition-all bg-primary/10">
            <x-paragraph x-show="showSecond" x-transition:enter="transition origin-left ease-out duration-150"
                x-transition:enter-start="scale-x-0" x-transition:enter-end="scale-x-100"
                x-transition:leave="transition origin-left ease-in duration-150" x-transition:leave-start="scale-x-100"
                x-transition:leave-end="scale-x-0"
                class="w-24 p-3 font-semibold rounded-xl bg-primary/25">Pesan</x-paragraph>
            <x-paragraph x-show="showSecond" x-transition:enter="transition origin-left ease-out duration-150"
                x-transition:enter-start="scale-x-0" x-transition:enter-end="scale-x-100"
                x-transition:leave="transition origin-left ease-in duration-150" x-transition:leave-start="scale-x-100"
                x-transition:leave-end="scale-x-0" class="w-full p-3 font-semibold">Portofolio</x-paragraph>
            <img x-on:click="showSecond=!showSecond" x-bind:class="showSecond ? 'rotate-0' : 'rotate-180'"
                src="{{ asset('assets/icons/double-arrow.png') }}" alt="Sidebar Icon"
                class="self-end mt-auto transition hover:cursor-pointer size-8">
        </div>
    </x-slot:submenu>
</div>
