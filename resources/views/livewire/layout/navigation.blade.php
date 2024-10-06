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
};

?>

{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block w-auto text-gray-800 fill-current h-9 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none">
                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                            <div class="ms-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')" wire:navigate>
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </button>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800 dark:text-gray-200" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <button wire:click="logout" class="w-full text-start">
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </button>
        </div>
        </div>
    </div>
</nav> --}}
<nav x-data="{
    services: false,
    products: false,
    courses: false,
    guides: false,
    about: false,
    langs: false,
    isActive(navlink) { return navlink ? 'md:border-primary' : 'md:border-transparent'; },
}" class="sticky top-0 z-50 bg-white">
    <div class="container flex justify-between mx-auto lg:py-3 xl:py-4">
        <a href="{{ route('home') }}" class="flex space-x-3">
            <img src="{{ asset('assets/logo.png') }}" class="size:8 lg:size-10 xl:size-14" alt="Diggity Logo" />
            <x-heading-two class="self-center whitespace-nowrap dark:text-white">
                Diggity
            </x-heading-two>
        </a>
        <div class="flex items-center justify-between w-auto font-medium">
            <ul class="flex items-center lg:gap-8 xl:gap-12">
                <li>
                    <x-nav-link x-on:click="services=!services" x-bind:class="isActive(services)">
                        <x-paragraph>Layanan</x-paragraph>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="products=!products" x-bind:class="isActive(products)"
                        x-on:click.outside="products=false">
                        <x-paragraph>Produk</x-paragraph>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="courses=!courses" x-bind:class="isActive(courses)"
                        x-on:click.outside="courses=false">
                        <x-paragraph>Kelas</x-paragraph>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="guides=!guides" x-bind:class="isActive(guides)"
                        x-on:click.outside="guides=false">
                        <x-paragraph>Panduan</x-paragraph>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="about=!about" x-bind:class="isActive(about)"
                        x-on:click.outside="about=false">
                        <x-paragraph>Tentang</x-paragraph>
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="langs=!langs" x-bind:class="isActive(langs)"
                        x-on:click.outside="langs=false">
                        <div class="flex items-center">
                            <x-svgs.globe class="me-2 xl:size-6 lg:size-4" />
                            <x-paragraph>ID</x-paragraph>
                        </div>
                    </x-nav-link>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="block" wire:navigate>
                        <x-outline-button>Sign In</x-outline-button>
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="block" wire:navigate>
                        <x-button>Sign Up</x-button>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Mega Menu Service --}}
    <x-mega-menu x-show="services" x-on:click.outside="services=false" x-data="{ active: 0 }">
        <x-slot:link>
            <li>
                <x-mega-menu-link @click="active = 0" num="0">
                    <x-slot:title>Layanan Utama</x-slot:title>
                    <x-slot:description>
                        Layanan terbaik yang diformulasikan untuk menjawab kebutuhan Anda akan
                        teknologi dan digitalisasi produk.
                    </x-slot:description>
                </x-mega-menu-link>
            </li>
            <li>
                <x-mega-menu-link @click="active = 1" num="1">
                    <x-slot:title>Model Kerja Sama</x-slot:title>
                    <x-slot:description>
                        Project model yang sesuai dengan kebutuhan Anda
                    </x-slot:description>
                </x-mega-menu-link>
            </li>
            <li>
                <x-mega-menu-link @click="active = 2" num="2">
                    <x-slot:title>Portfolio</x-slot:title>
                    <x-slot:description>
                        Merupakan suatu kehormatan bagi kami untuk menampilkan karya terbaik kami
                    </x-slot:description>
                </x-mega-menu-link>
            </li>
        </x-slot:link>
        <x-slot:content>
            <x-mega-menu-content x-show="active === 0">
                <x-slot:title>Layanan Utama</x-slot:title>
                <x-slot:items>
                    <x-mega-menu-content-item title="Website Development"
                        description="Bangun website yang cepat, efektif, dan mudah digunakan" />
                    <x-mega-menu-content-item title="Mobile App Development"
                        description="Tingkatkan mobilitas dan brand bisnis dengan membangun aplikasi mobile (Android & iOS)" />
                    <x-mega-menu-content-item title="MVP Development"
                        description="Ketahui peluang bisnis dari setiap ide dan gagasan dengan mengembangkan produk MVP" />
                    <x-mega-menu-content-item title="Custom Software Development"
                        description="Percepat laju bisnis dengan membangun platform digital yang tepat dan sesuai kebutuhan bisnis perusahaan." />
                    <x-mega-menu-content-item title="UI/UX Design"
                        description="Desain komunikasi visual merupakan satu hal penting" />
                    <x-mega-menu-content-item title="Digital Marketing"
                        description="Pemasaran digital untuk berbagai tahapan bisnis Anda" />
                </x-slot:items>
                <x-slot:more>
                    <x-mega-menu-content-more contentType="Layanan" />
                </x-slot:more>
            </x-mega-menu-content>
            <x-mega-menu-content x-show="active === 1">
                <x-slot:title>Model Kerja Sama</x-slot:title>
                <x-slot:items></x-slot:items>
                <x-slot:more>
                    <x-mega-menu-content-more contentType="Model Kerja Sama" />
                </x-slot:more>
            </x-mega-menu-content>
            <x-mega-menu-content x-show="active === 2">
                <x-slot:title>Portofolio</x-slot:title>
                <x-slot:items></x-slot:items>
                <x-slot:more>
                    <x-mega-menu-content-more :href="route('portfolio')" contentType="Portofolio" />
                </x-slot:more>
            </x-mega-menu-content>
        </x-slot:content>
    </x-mega-menu>
</nav>
