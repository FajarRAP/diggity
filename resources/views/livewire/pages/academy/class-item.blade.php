<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};
?>

<div>
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link :href="route('academy')">Akademi</x-breadcumb-link>
            <x-breadcumb-link :href="route('academy-class')">Kelas</x-breadcumb-link>
            <x-breadcumb-link>Kategori Kelas</x-breadcumb-link>
            <x-breadcumb-link>Judul Kelas</x-breadcumb-link>
        </x-breadcumb>
        <div class="grid grid-cols-3">
            <div class="flex flex-col col-span-2 xl:gap-12 lg:gap-8">
                <x-heading-one>Class Item Title</x-heading-one>
                <div class="flex xl:gap-12 lg:gap-8 ">
                    <div class="flex items-center xl:gap-4 lg:gap-2">
                        <img src="{{ asset('assets/icons/person-many.png') }}" alt="user registered icon"
                            class="xl:size-10 lg:size-7">
                        <div>
                            <x-heading-five>Member</x-heading-five>
                            <x-paragraph-small>N Registered</x-paragraph-small>
                        </div>
                    </div>
                    <div class="flex items-center xl:gap-4 lg:gap-2">
                        <img src="{{ asset('assets/icons/signal.png') }}" alt="level icon" class="xl:size-10 lg:size-7">
                        <div>
                            <x-heading-five>Level</x-heading-five>
                            <x-paragraph-small>Ahli</x-paragraph-small>
                        </div>
                    </div>
                </div>
                <div class="flex xl:gap-5 lg:gap-4 xl:-mt-6 lg:-mt-4">
                    <div class="flex items-center xl:gap-4 lg:gap-2">
                        <x-svgs.globe class="xl:size-5 lg:size-3.5" />
                        <x-paragraph-small>Tanggal Rilis Januari 2020</x-paragraph-small>
                    </div>
                    <div class="flex items-center xl:gap-4 lg:gap-2">
                        <img src="{{ asset('assets/icons/update.png') }}" alt="last updated icon"
                            class="xl:size-5 lg:size-3.5">
                        <x-paragraph-small>Terakhir Diperbarui November 2023</x-paragraph-small>
                    </div>
                </div>
                <div class="flex xl:gap-7 lg:gap-5">
                    <x-button>Tentang</x-button>
                    <x-button>Pelajaran</x-button>
                    <x-button>Alat</x-button>
                    <x-button>Ulasan</x-button>
                    <x-button>Hasil Karya</x-button>
                </div>
                <x-heading-two>Deskripsi Kelas</x-heading-two>
                <x-paragraph class="xl:-mt-6 lg:-mt-4">Class Description</x-paragraph>
            </div>
            <div class="flex flex-col justify-between bg-white shadow-card">
                <div class="w-full bg-gray-300 h-44 rounded-t-xl"></div>
                <div class="xl:p-6 lg:p-4 xl:space-y-7 lg:space-y-4">
                    <x-heading-five>Pembayaran untuk Akses Kelas Online</x-heading-five>
                    <x-paragraph>
                        Nikmati akses seumur hidup ke kelas online dan mulai membangun projek nyata.</x-paragraph>
                    <div class="flex items-center xl:gap-4 lg:gap-3">
                        <img src="{{ asset('assets/icons/check-circle-2.png') }}" alt="check cirle icon"
                            class="xl:size-5 lg:size-3">
                        <x-paragraph>Akses kelas tanpa batas</x-paragraph>
                    </div>
                    <div class="flex items-center xl:gap-4 lg:gap-3">
                        <img src="{{ asset('assets/icons/check-circle-2.png') }}" alt="check cirle icon"
                            class="xl:size-5 lg:size-3">
                        <x-paragraph>Konsultasi Karir</x-paragraph>
                    </div>
                    <div class="flex items-center xl:gap-4 lg:gap-3">
                        <img src="{{ asset('assets/icons/check-circle-2.png') }}" alt="check cirle icon"
                            class="xl:size-5 lg:size-3">
                        <x-paragraph>Konsultasi kelompok dan aset</x-paragraph>
                    </div>
                    <div class="flex items-center xl:gap-4 lg:gap-3">
                        <img src="{{ asset('assets/icons/check-circle-2.png') }}" alt="check cirle icon"
                            class="xl:size-5 lg:size-3">
                        <x-paragraph>Sertifikat kelulusan</x-paragraph>
                    </div>
                    <div class="flex items-center xl:gap-4 lg:gap-3">
                        <img src="{{ asset('assets/icons/check-circle-2.png') }}" alt="check cirle icon"
                            class="xl:size-5 lg:size-3">
                        <x-paragraph>Kesempatan magang dan pekerjaan</x-paragraph>
                    </div>
                    <x-heading-two class="text-accent">Class Item Price</x-heading-two>
                </div>
                <button class="text-white rounded-b-xl bg-primary xl:py-10 lg:py-7">
                    <x-heading-two>Gabung Kelas</x-heading-two>
                </button>
            </div>
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-heading-two>Materi Pelajaran</x-heading-two>
        <div class="w-1/2">
            <x-card x-data="{ open: false }">
                <div class="flex items-center xl:gap-6 lg:gap-4" x-on:click="open=!open">
                    <x-badges.primary text="0" class="!text-gray-900 font-semibold" />
                    <x-heading-four>Section One</x-heading-four>
                    <x-svgs.arrow class="transition xl:size-9 lg:size-6 ms-auto"
                        x-bind:class="open ? 'rotate-90' : '-rotate-90'" />
                </div>
                <div class="xl:space-y-6 lg:space-y-4 xl:mt-6 lg:mt-4" x-show="open">
                    @for ($i = 0; $i < 3; $i++)
                        <x-card
                            class="flex items-center !bg-secondary rounded-xl xl:px-6 lg:px-4 xl:py-4 lg:py-3 xl:gap-6 lg:gap-4">
                            <img src="{{ asset('assets/icons/play-button.png') }}" alt=""
                                class="xl:size-5 lg:size-3">
                            <x-paragraph>Subject {{ $i }}</x-paragraph>
                            <x-paragraph class="ms-auto">N Mins</x-paragraph>
                        </x-card>
                    @endfor
                </div>
            </x-card>
        </div>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <div class="xl:space-y-6 lg:space-y-4">
            <x-heading-two>Alat</x-heading-two>
            <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
                <x-card>
                    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="tools image"
                        class="xl:mb-6 lg:mb-4 xl:size-24 lg:size-16">
                    <x-heading-three>Tools Name</x-heading-three>
                    <x-heading-four class="!font-normal">Software Gratis</x-heading-four>
                </x-card>
            </div>
        </div>
        <div class="flex flex-col xl:space-y-6 lg:space-y-4">
            <x-heading-two>Ulasan</x-heading-two>
            <div class="flex xl:gap-7 lg:gap-5">
                <x-button>Semua</x-button>
                <x-button>Terbaru</x-button>
                <x-button>Tertinggi</x-button>
                <x-button>Terendah</x-button>
            </div>
            <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
                <x-card class="xl:space-y-7 lg:space-y-5">
                    <div class="flex items-center xl:gap-3 lg:gap-1">
                        <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="user avatar"
                            class="rounded-full xl:size-12 lg:size-8">
                        <div>
                            <x-paragraph class="font-semibold">User Name</x-paragraph>
                            <x-fonts.paragraph-extra-small text="User Ability" />
                        </div>
                    </div>
                    <x-paragraph>User Review</x-paragraph>
                    <div class="flex gap-1.5">
                        <img src="{{ asset('assets/icons/star-filled.png') }}" alt="user rating"
                            class="xl:size-5 lg:size-3">
                    </div>
                </x-card>
            </div>
            <x-outline-button class="self-center">Lebih Banyak</x-outline-button>
        </div>
        <div class="flex flex-col xl:space-y-6 lg:space-y-4">
            <x-heading-two>Hasil Karya</x-heading-two>
            <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
                <x-card class="xl:space-y-7 lg:space-y-5">
                    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="result icon">
                    <div class="flex items-center xl:gap-3 lg:gap-1">
                        <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="user avatar"
                            class="rounded-full xl:size-12 lg:size-8">
                        <x-paragraph class="font-semibold">User Name</x-paragraph>
                    </div>
                </x-card>
            </div>
            <x-outline-button class="self-center">Lebih Banyak</x-outline-button>
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-faqs title="Question" description="Description">
            <x-item-faq question="Apakah kelas ini cocok untuk Pemula?"
                answer="Tingkatan kelas online yang kami sediakan adalah untuk semua tingkatan (All Levels), sehingga cocok untuk semua orang. Kami juga merekomendasikan kepada calon peserta untuk memulai dengan kelas Starter (gratis) sebagai langkah awal." />
            <x-item-faq question="Bagaimana cara belajar IT dengan optimal?"
                answer="Kami menyediakan kelas yang terstruktur dan dirancang dengan baik oleh mentor berpengalaman, sehingga mudah dipahami oleh siapa pun." />
            <x-item-faq question="Bagaimana cara mendapatkan sertifikat kelas?"
                answer="Sertifikat kelulusan hanya tersedia untuk kelas online. Untuk mendapatkannya, peserta harus menyelesaikan seluruh materi kelas dan menjawab kuis yang disediakan oleh mentor." />
            <x-item-faq question="Bagaimana cara berkonsultasi dengan mentor?"
                answer="Salah satu keuntungan kami adalah grup konsultasi yang diberikan sebagai bonus untuk peserta yang mengikuti kelas online di platform kami. Silakan hubungi Admin untuk mendapatkan akses ke grup tersebut." />
            <x-item-faq question="Apakah projek kelas boleh dijual?"
                answer="Peserta yang telah mengikuti kelas online diizinkan untuk menjual kembali projek kelas kepada klien atau perusahaan. Namun, modifikasi minimal 30% dari proyek asli yang dibuat oleh mentor diperlukan." />
            <x-item-faq question="Apakah boleh dipelajari bersama-sama?"
                answer="Kami melarang peserta untuk menjual atau membagikan akses kelas online kepada orang lain yang tidak terdaftar. Kami mendukung para pencipta dengan membeli kelas secara resmi, dengan satu akun untuk satu pengguna." />
            <x-item-faq question="Apakah boleh menjual kembali kelasnya?"
                answer="Kami tidak memperbolehkan peserta untuk menjual kembali materi kelas kami. Kami akan melanjutkan ke langkah hukum jika ditemukan penjualan kelas secara ilegal." />
        </x-faqs>
    </x-wrapper.inverse-primary>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link :href="route('academy')">Akademi</x-breadcumb-link>
            <x-breadcumb-link :href="route('academy-class')">Kelas</x-breadcumb-link>
            <x-breadcumb-link>Kategori Kelas</x-breadcumb-link>
            <x-breadcumb-link>Judul Kelas</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
    <x-footer />
</div>
