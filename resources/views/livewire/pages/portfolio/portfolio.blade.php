<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {}; ?>

<div>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link>
                Portofolio
            </x-breadcumb-link>
        </x-breadcumb>
        <x-hero-header :src="asset('asset/images/portfolio/header-portfolio.jpeg')">
            <x-slot:type>Portofolio</x-slot:type>
            <x-slot:description>
                Sebagai perusahaan pengembang perangkat lunak yang beroperasi sejak tahun 2019, kami
                telah membangun reputasi yang kuat dalam merancang dan mengembangkan aplikasi web, aplikasi seluler,
                dan strategi pemasaran digital. Merupakan suatu kehormatan bagi kami untuk menampilkan karya terbaik
                kami.
            </x-slot:description>
        </x-hero-header>
    </x-wrapper>

    {{-- Portfolios --}}
    <x-wrapper>
        <div class="grid grid-cols-3 lg:gap-x-3.5 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
            @for ($i = 1; $i <= 6; $i++)
                <x-item-portfolio :num="$i" :href="route('detail-portfolio', ['id' => $i])" />
            @endfor
        </div>
    </x-wrapper>

    {{-- Contact Us --}}
    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    {{-- Bottom Breadcumb --}}
    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link>
                Portofolio
            </x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    {{-- Footer --}}
    <x-footer />
</div>
