<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect(route('home', absolute: false), navigate: true);
    }
}; ?>

<nav class="bg-white shadow-navigation">
    <div x-data="{ search: false }"
        class="container flex items-center justify-between gap-12 mx-auto min-h-20 lg:py-3 xl:py-4">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
            <img src="{{ asset('assets/logo.png') }}" class="size:8 lg:size-10 xl:size-14" alt="Diggity Logo" />
            <x-heading-two>Diggity</x-heading-two>
        </a>
        <div x-show="search" x-transition:enter="transition transform ease-out duration-150"
            x-transition:enter-start="scale-x-0" x-transition:enter-end="scale-x-100"
            x-transition:leave="transition transform origin-right ease-in duration-150"
            x-transition:leave-start="scale-x-100" x-transition:leave-end="scale-x-0"
            class="flex items-center w-full gap-12">
            <div class="relative w-full rounded-md shadow-card">
                <label for="search">
                    <img src="{{ asset('assets/icons/search.png') }}" alt="Search"
                        class="absolute top-0 translate-y-1/2 size-5 left-6">
                </label>
                <x-text-input placeholder="Cari sesuatu" id="search" class="w-full border-0 ps-16" />
            </div>
            <img x-on:click="search=false" src="{{ asset('assets/icons/close.png') }}" alt="Close"
                class="size-5 hover:cursor-pointer">
        </div>
        <div x-show="!search" class="flex gap-6 ms-auto hover:cursor-pointer">
            <div x-on:click="search=true" class="rounded-full lg:p-3 xl:p-4 shadow-card">
                <img src="{{ asset('assets/icons/search.png') }}" alt="Search Icon" class="lg:size-4 xl:size-5">
            </div>
            <div x-data="{ notifications: false }" x-on:click="notifications=true"
                class="relative rounded-full lg:p-3 xl:p-4 shadow-card hover:cursor-pointer">
                <img src="{{ asset('assets/icons/bell.png') }}" alt="Search Icon" class="lg:size-4 xl:size-5">
                <div x-show="notifications" x-on:click.outside="notifications=false"
                    x-transition:enter="transition transform origin-top ease-out duration-150"
                    x-transition:enter-start="scale-y-0" x-transition:enter-end="scale-y-100"
                    x-transition:leave="transition transform origin-top ease-in duration-150"
                    x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                    class="absolute py-5 px-2.5 space-y-2.5 translate-y-1/2 -translate-x-1/2 left-1/2 bg-white rounded-xl shadow-card hover:cursor-default w-72 top-0">
                    <x-paragraph-small class="font-bold px-2.5">Notifikasi</x-paragraph-small>
                    <x-paragraph-small class="p-2.5">Anda belum mendapatkan notifikasi apa pun.</x-paragraph-small>
                </div>
            </div>
        </div>
        <div x-data="{ profile: false }" x-show="!search" x-on:click="profile=true"
            class="relative flex items-center gap-6 rounded-full shadow-card hover:cursor-pointer">
            <div class="rounded-full lg:size-12 xl:size-14 bg-primary"></div>
            <div class="space-y-1">
                <x-paragraph-small class="font-bold">Nama Lengkap</x-paragraph-small>
                <x-paragraph-small>Posisi Anda</x-paragraph-small>
            </div>
            <x-svgs.arrow x-bind:class="profile ? '-rotate-90' : 'rotate-90'" class="transition me-6 lg:size-2.5" />
            <div x-show="profile" x-on:click.outside="profile=false"
                x-transition:enter="transition transform origin-top ease-out duration-150"
                x-transition:enter-start="scale-y-0" x-transition:enter-end="scale-y-100"
                x-transition:leave="transition transform origin-top ease-in duration-150"
                x-transition:leave-start="scale-y-100" x-transition:leave-end="scale-y-0"
                class="absolute w-full py-5 px-2.5 space-y-2.5 translate-y-1/2 bg-white rounded-xl shadow-card hover:cursor-default -top-3/4">
                <x-paragraph-small class="font-bold px-2.5">Akun</x-paragraph-small>
                <button class="flex items-center w-full gap-5 hover:bg-gray-100 p-2.5 rounded-lg">
                    <img src="{{ asset('assets/icons/user.png') }}" alt="Profile" class="size-4">
                    <x-paragraph-small>Lihat Profil</x-paragraph-small>
                </button>
                <button class="flex items-center w-full gap-5 hover:bg-gray-100 p-2.5 rounded-lg">
                    <img src="{{ asset('assets/icons/key.png') }}" alt="Privacy" class="size-4">
                    <x-paragraph-small>Pengaturan & Privasi</x-paragraph-small>
                </button>
                <button class="flex items-center w-full gap-5 hover:bg-gray-100 p-2.5 rounded-lg" wire:click="logout">
                    <img src="{{ asset('assets/icons/logout.png') }}" alt="Logout" class="size-4">
                    <x-paragraph-small>Keluar</x-paragraph-small>
                </button>
            </div>
        </div>
    </div>
</nav>
