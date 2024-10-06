<x-app-layout>
    <div class="flex min-h-screen">
        {{-- Sidebar --}}
        <div x-data="{ show: false }" class="flex min-h-screen">
            <div class="relative flex flex-col gap-12 px-8 py-12 bg-secondary">
                <x-item-sidebar-dashboard :href="route('dashboard')" :active="Route::is('dashboard')" wire:navigate>
                    <x-slot:icon>
                        <x-svgs.dashboard class="size-8 hover:cursor-pointer" :active="Route::is('dashboard')" />
                    </x-slot:icon>
                    <x-slot:title>
                        Dashboard
                    </x-slot:title>
                </x-item-sidebar-dashboard>

                <x-item-sidebar-dashboard :href="route('dashboard-service')" :active="Route::is('dashboard-service')" wire:navigate>
                    <x-slot:icon>
                        <x-svgs.service class="size-8 hover:cursor-pointer" :active="Route::is('dashboard-service')" />
                    </x-slot:icon>
                    <x-slot:title>
                        Layanan
                    </x-slot:title>
                </x-item-sidebar-dashboard>

                <img x-on:click="show=!show" x-bind:class="show ? 'rotate-180' : ''"
                    src="{{ asset('assets/icons/slide.png') }}" alt="Sidebar Icon"
                    class="mt-auto transition hover:cursor-pointer size-8">
            </div>
            <div x-bind:class="show ? 'px-8 py-12  w-36' : ' p-0 w-0'"
                class="transition-all duration-150 ease-in origin-left bg-secondary">
            </div>

            {{ $submenu }}
        </div>

        {{-- Content --}}
        <div class="flex flex-col w-full">
            {{ $slot }}

            {{-- Footer --}}
            {{-- <div class="flex flex-col grow"> --}}
            <div class="mt-auto font-semibold text-center text-white lg:p-2 xl:p-4 bg-tertiary">
                <x-paragraph-small>&copy; Copyright 2024 CV Sinergi Cita Digital</x-paragraph-small>
            </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
