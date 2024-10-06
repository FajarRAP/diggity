<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-inter">
    <div class="min-h-screen bg-ghost-white dark:bg-gray-900">
        @auth
            <livewire:layout.auth-navigation />
        @else
            {{-- To Top Button --}}
            <div class="fixed z-50 flex flex-col items-center lg:gap-8 xl:gap-12 lg:right-16 xl:right-24 bottom-24">
                <div id="goToTopButton" class="p-2 border-4 border-white rounded-full hover:cursor-pointer">
                    <x-svgs.arrow class="text-white -rotate-90 lg:size-5 xl:size-8"></x-svgs.arrow>
                </div>
                <img src="{{ asset('assets/icons/whatsapp.png') }}" alt="whatsapp logo" class="lg:size-11 xl:size-14">
            </div>
            <livewire:layout.navigation />
        @endauth

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
