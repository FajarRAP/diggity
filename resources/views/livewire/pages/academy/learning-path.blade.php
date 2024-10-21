<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};
?>

<div>
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link link="Alur Belajar" />
        </x-breadcumb>
        <x-fonts.heading-one class="text-center" text="Alur Belajar" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Meningkatkan fokus dalam mempelajari Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital dengan alur yang telah kami susun." />
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            @for ($i = 0; $i < 25; $i++)
                <x-card class="flex flex-col rounded-xl xl:gap-3 lg:gap-2">
                    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="image learning path"
                        class="xl:size-20 lg:size-14">
                    <x-fonts.paragraph class="font-semibold" text="Fullstack Web Developer" />
                    <x-fonts.paragraph-small text="Tersedia 20 Kelas" />
                    <a href="{{ route('academy-learning-path-item', ['slug' => 'fullstack-web-developer']) }}"
                        class="mx-auto xl:mt-3 lg:mt-2 w-fit">
                        <x-button text="Mulai Belajar" />
                    </a>
                </x-card>
            @endfor
        </div>
    </x-wrapper.inverse-primary>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link link="Alur Belajar" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</div>
