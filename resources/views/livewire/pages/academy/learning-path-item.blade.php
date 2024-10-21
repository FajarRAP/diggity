<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};
?>

<div>
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link :href="route('academy-learning-path')" link="Alur Belajar" />
            <x-breadcumb-link link="Judul Alur Belajar" />
        </x-breadcumb>
        <x-hero-header title="Alur Belajar Ful-Stack Website Developer"
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut"
            :src="asset('assets/images/carousels/carousel1.jpeg')" />
        <x-fonts.heading-two class="xl:pt-12 lg:pt-8"
            text="Mewujudkan Karir Impian Anda melalui Investasi dalam Keterampilan Baru" />
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            @for ($i = 0; $i < 3; $i++)
                <x-card class="grid grid-cols-2 items-center xl:gap-6 lg:gap-4 rounded-xl xl:!p-7 lg:!p-5">
                    <div class="bg-gray-300 h-28"></div>
                    <x-fonts.paragraph-small
                        text="Meningkatkan Nilai Anda sebagai Kandidat yang Dicari oleh Perusahaan" />
                </x-card>
            @endfor
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-fonts.heading-one class="text-center" text="Langkah Awal Menuju Karier Impian Anda" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Meningkatkan fokus dalam mempelajari Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital dengan alur yang telah kami susun." />

        @for ($i = 0; $i < 6; $i++)
            <div class="flex items-center xl:gap-12 lg:gap-8">
                <x-card.item-class-horizontal class="basis-3/4" />
                <x-card class="flex items-center rounded-full lg:size-10 xl:size-14">
                    <x-fonts.paragraph class="mx-auto" text="1" />
                </x-card>
                <x-card class="rounded-xl basis-1/3 xl:space-y-3 lg:space-y-2">
                    <x-fonts.paragraph class="font-semibold" text="Deskripsi Kelas" />
                    <x-fonts.paragraph-small
                        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..." />
                </x-card>
            </div>
        @endfor

    </x-wrapper.inverse-primary>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link :href="route('academy-learning-path')" link="Alur Belajar" />
            <x-breadcumb-link link="Judul Alur Belajar" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</div>
