<x-app-layout>
    <div class="flex min-h-screen">
        <div x-data="{ show: false }" class="flex min-h-screen">
            <div class="relative flex flex-col gap-12 px-8 py-12 bg-secondary">
                @for ($i = 0; $i < 8; $i++)
                    <div class="flex items-center gap-12">
                        <img src="{{ asset('asset/icons/key.png') }}" alt="Sidebar Icon" class="size-7">
                        <x-paragraph x-show="show" x-transition:enter="transition origin-left ease-out duration-150"
                            x-transition:enter-start="scale-x-0" x-transition:enter-end="scale-x-100"
                            x-transition:leave="transition origin-left ease-in duration-150"
                            x-transition:leave-start="scale-x-100" x-transition:leave-end="scale-x-0"
                            class="absolute z-10 px-6 left-full">Dashboard</x-paragraph>
                    </div>
                @endfor
                <img x-on:click="show=!show" x-bind:class="show ? 'rotate-180' : ''"
                    src="{{ asset('asset/icons/slide.png') }}" alt="Sidebar Icon" class="mt-auto transition size-8">
            </div>
            <div x-bind:class="show ? 'px-8 py-12  w-36' : ' p-0 w-0'"
                class="transition-all duration-150 ease-in origin-left bg-secondary">
            </div>
            <div x-data="{ showSecond: false }" x-bind:class="showSecond ? 'w-36' : 'w-24'"
                class="flex flex-col gap-12 px-8 py-12 font-semibold text-center transition-all bg-primary/10">
                <x-paragraph x-show="showSecond" x-transition:enter="transition origin-left ease-out duration-150"
                    x-transition:enter-start="scale-x-0" x-transition:enter-end="scale-x-100"
                    x-transition:leave="transition origin-left ease-in duration-150"
                    x-transition:leave-start="scale-x-100" x-transition:leave-end="scale-x-0">Pesan</x-paragraph>
                <x-paragraph x-show="showSecond" x-transition:enter="transition origin-left ease-out duration-150"
                    x-transition:enter-start="scale-x-0" x-transition:enter-end="scale-x-100"
                    x-transition:leave="transition origin-left ease-in duration-150"
                    x-transition:leave-start="scale-x-100" x-transition:leave-end="scale-x-0">Portofolio</x-paragraph>
                <img x-on:click="showSecond=!showSecond" x-bind:class="showSecond ? 'rotate-0' : ''"
                    src="{{ asset('asset/icons/double-arrow.png') }}" alt="Sidebar Icon"
                    class="self-end mt-auto transition rotate-180 size-8">
            </div>
        </div>
        <div class="flex flex-col grow">
            <div class="p-4 mt-auto font-semibold text-center text-white bg-catalina-blue">
                <x-paragraph-small>&copy; Copyright 2024 CV Sinergi Cita Digital</x-paragraph-small>
            </div>
        </div>
    </div>
</x-app-layout>
