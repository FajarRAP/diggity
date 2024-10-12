<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {}; ?>

<div>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link href="#" link="Portofolio" />
        </x-breadcumb>
        <x-hero-header :src="asset('assets/images/portfolio/header-portfolio.jpeg')" title="Portofolio"
            description="Sebagai perusahaan pengembang perangkat lunak yang beroperasi sejak tahun 2019, kami telah membangun reputasi yang kuat dalam merancang dan mengembangkan aplikasi web, aplikasi seluler, dan strategi pemasaran digital. Merupakan suatu kehormatan bagi kami untuk menampilkan karya terbaik kami." />
    </x-wrapper.inverse-primary>

    {{-- Portfolios --}}
    <x-wrapper.transparent>
        <div class="flex overflow-x-auto xl:gap-12 lg:gap-8 container-snap xl:p-3 lg:p-2">
            <x-button class="shrink-0" text="Semua" />
            <x-button class="shrink-0" text="UI/UX Design" />
            <x-button class="shrink-0" text="Website Development" />
            <x-button class="shrink-0" text="Mobile App Development" />
            <x-button class="shrink-0" text="Cyber Security" />
            <x-button class="shrink-0" text="Data Analysis" />
            <x-button class="shrink-0" text="Digital Marketing" />
        </div>
        <div class="grid grid-cols-3 lg:gap-x-5 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
            @for ($i = 1; $i <= 6; $i++)
                <x-card.item-portfolio :num="$i" :href="route('detail-portfolio', ['id' => $i])" />
            @endfor
        </div>
    </x-wrapper.transparent>

    {{-- Contact Us --}}
    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    {{-- Bottom Breadcumb --}}
    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link href="#" link="Portofolio" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</div>
