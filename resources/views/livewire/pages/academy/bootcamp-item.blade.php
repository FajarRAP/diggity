<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};

?>

<div>
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link :href="route('academy-bootcamp')" link="Bootcamp" />
            <x-breadcumb-link link="Judul Bootcamp" />
        </x-breadcumb>
        <x-hero-header title="Bootcamp Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit."
            description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
            :src="asset('assets/images/carousels/carousel1.jpeg')" />
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <div class="flex xl:gap-7 lg:gap-5">
            <div class="flex flex-col xl:gap-12 lg:gap-8">
                <x-fonts.heading-five text="Bootcamp Lorem Ipsum Dolor Sit Amet" />
                <div>
                    <x-item-active-link-scroll text="Gambaran Umum Program" :is-active="true" />
                    <x-item-active-link-scroll text="Jadwal Bootcamp" />
                    <x-item-active-link-scroll text="Manfaat Bootcamp" />
                    <x-item-active-link-scroll text="Kurikulum Bootcamp" />
                    <x-item-active-link-scroll text="Mentor" />
                    <x-item-active-link-scroll text="Alur Bootcamp" />
                    <x-item-active-link-scroll text="Tools" />
                    <x-item-active-link-scroll text="Testimoni Alumni" />
                    <x-item-active-link-scroll text="Biaya Pendidikan" />
                </div>
                <x-button text="Daftar Sekarang" />
            </div>
            <x-card class="basis-3/4 rounded-3xl xl:!p-12 lg:!p-8 xl:space-y-6 lg:space-y-4">
                <x-fonts.heading-four class="text-accent" text="Gambaran Umum Program" />
                <x-fonts.heading-two text="Kenapa Memilih Kami" />
                <x-fonts.paragraph
                    text="Program pembelajaran intensif ini mencakup berbagai materi di bidang digital. Peserta akan mendapatkan pemahaman menyeluruh tentang dunia digital, baik dari sisi teori maupun praktik, sehingga siap menghadapi tantangan di industri ini." />
                <x-check-circle
                    benefit="Langsung praktik dengan proyek nyata dan klien sesungguhnya, bukan sekadar teori!" />
                <x-check-circle
                    benefit="Setiap langkahmu didampingi oleh fasilitator ahli yang selalu siap membantu." />
                <x-check-circle benefit="Kapan pun butuh, kamu bisa mengulang pembelajaran tanpa biaya tambahan." />
                <x-check-circle benefit="Nikmati akses tak terbatas ke materi dan rekaman kelas selamanya!" />
                <x-check-circle benefit="Peluang kerja nyata menantimu, dengan bantuan penyaluran dari Diggity." />
                <x-check-circle benefit="Dapatkan bimbingan dari mentor profesional yang berpengalaman di industri." />
                <x-check-circle
                    benefit="Gabung komunitas Digital Learners untuk memperluas koneksi dan peluangmu di dunia digital." />

                <x-fonts.heading-four class="text-accent" text="Jadwal Bootcamp" />
                <x-fonts.heading-two text="Jadwal Bootcamp Yang Dapat Kamu Ikuti" />
                <x-fonts.paragraph
                    text="Bootcamp Diggity akan berlangsung selama 8 - 16 minggu, dengan berbagai jenis kegiatan menarik." />
                <x-card class="rounded-xl !p-0">
                    <div class="xl:p-6 lg:p-4">
                        <x-fonts.heading-four text="Batch 1" />
                        <div class="flex justify-between">
                            <img src="{{ asset('assets/icons/time.png') }}" alt="bootcamp schedule icon"
                                class="xl:size-7 lg:size-5">
                            <x-fonts.paragraph text="Mei 2025" />
                            <img src="{{ asset('assets/icons/time.png') }}" alt="bootcamp schedule icon"
                                class="xl:size-7 lg:size-5">
                            <x-fonts.paragraph text="16 Minggu" />
                            <img src="{{ asset('assets/icons/time.png') }}" alt="bootcamp schedule icon"
                                class="xl:size-7 lg:size-5">
                            <x-fonts.paragraph text="3x Pertemuan / Minggu" />
                            <img src="{{ asset('assets/icons/time.png') }}" alt="bootcamp schedule icon"
                                class="xl:size-7 lg:size-5">
                            <x-fonts.paragraph text="Online (19:00 - 22:00)" />
                        </div>
                    </div>
                    <div class="rounded-b-xl bg-secondary xl:p-6 lg:p-4">
                        <x-fonts.paragraph>
                            <x-slot:text>
                                Ada diskon <span class="font-semibold">Up to 30%</span> jika ambil batch ini sekarang
                            </x-slot:text>
                        </x-fonts.paragraph>
                    </div>
                </x-card>
                <x-fonts.paragraph text="Terdapat tiga tipe kelas yang bisa diikuti, yaitu:" />
                <x-fonts.paragraph class="font-semibold" text="Kelas Wajib" />
                <x-fonts.paragraph
                    text="Kelas ini diadakan secara online, biasanya setiap Selasa dan Kamis pukul 19.00 WIB atau Sabtu pagi pukul 09.30/10.00 WIB, dengan durasi 2 hingga 2,5 jam." />
                <x-fonts.paragraph class="font-semibold" text="Kelas Recorded" />
                <x-fonts.paragraph
                    text="Materi kelas ini akan dibagikan setiap hari Senin atau H+1 setelah kelas yang relevan berlangsung, sehingga kamu bisa belajar ulang sesuai jadwalmu." />
                <x-fonts.paragraph class="font-semibold" text="Community Event" />
                <x-fonts.paragraph
                    text="Acara komunitas seperti networking session dan expert session diadakan di luar jadwal kelas wajib. Informasi lebih lengkap mengenai acara ini bisa dilihat di platform komunitas kami." />

                <x-fonts.heading-four class="text-accent" text="Manfaat Bootcamp" />
                <x-fonts.heading-two text="Berbagai Manfaat Menarik di Bootcamp" />
                <x-fonts.paragraph
                    text="Nikmati berbagai keuntungan hebat dari Bootcamp kami yang dirancang untuk memajukan keterampilan dan karier Anda." />
                <div class="grid grid-cols-2 xl:gap-7 lg:gap-5">
                    @for ($i = 0; $i < 6; $i++)
                        <x-card.item-product-benefit :src="asset('assets/images/carousels/carousel1.jpeg')" title="Live Class"
                            description="Semua sesi dilakukan secara langsung, bukan rekaman, sehingga peserta bisa berinteraksi dengan instructor dan fasilitator secara real-time." />
                    @endfor
                </div>

                <x-fonts.heading-four class="text-accent" text="Kurikulum Bootcamp" />
                <x-fonts.heading-two text="Materi Yang Akan Kamu Pelajari di Bootcamp" />
                <x-fonts.paragraph
                    text="Pelajari berbagai topik penting dengan kurikulum terlengkap yang dirancang untuk memberikan pengalaman praktik yang nyata. Selama bootcamp, kamu akan mendapatkan:" />
                <x-item-faq question="Lorem Ipsum Dolor Sit Amet"
                    answer="Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur" />
                <x-item-faq question="Lorem Ipsum Dolor Sit Amet"
                    answer="Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur" />
                <x-item-faq question="Lorem Ipsum Dolor Sit Amet"
                    answer="Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur" />
                <x-outline-button text="Lebih Banyak" />

                <x-fonts.heading-four class="text-accent" text="Mentor" />
                <x-fonts.heading-two text="Dibimbing Oleh Praktisi Berpengalaman di Bidangnya" />
                <x-fonts.paragraph
                    text="Belajar langsung dari pengalaman mentor yang telah bekerja dan menjadi spesialis di startup unicorn dan korporat." />
                <div class="grid grid-cols-2 xl:gap-7 lg:gap-5">
                    <x-card>
                        <div class="flex">
                            <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="mentor image"
                                class="object-cover xl:h-40 lg:h-24 xl:w-32 lg:w-20">
                            <div class="flex flex-col basis-3/4">
                                <x-fonts.heading-five text="Fajar Riansyah" />
                                <x-fonts.heading-five text="Mobile Developer" />
                                <x-fonts.heading-five text="Alphaworks" />
                            </div>
                        </div>
                        <x-fonts.paragraph-small
                            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." />
                    </x-card>
                </div>

                <x-fonts.heading-four class="text-accent" text="Alur Bootcamp" />
                <x-fonts.heading-two text="Proses Belajar dari Nol hingga Mahir!" />
                <x-fonts.paragraph
                    text="Bootcamp ini memberikan pengalaman belajar menyeluruh, dari persiapan hingga siap kerja, dengan pendekatan terstruktur dan bimbingan mentor berpengalaman untuk mengembangkan skill teknis dan profesional yang sesuai industri." />
                <div>
                    @for ($i = 0; $i < 4; $i++)
                        <div class="flex justify-between">
                            <x-card class="rounded-full xl:size-12 lg:size-8 !p-0 flex items-center justify-center">
                                <x-fonts.paragraph text="1" />
                            </x-card>
                            <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="bootcamp plot"
                                class="xl:size-20 lg:size-14">
                            <div class="basis-3/4">
                                <x-fonts.heading-five text="Pre-Bootcamp" />
                                <x-fonts.paragraph
                                    text="Tahap ini adalah fase persiapan sebelum bootcamp resmi dimulai. Kamu akan belajar mandiri melalui modul yang telah dirancang untuk memperkenalkan dasar-dasar skill yang akan kamu butuhkan. Ini juga menjadi kesempatan untuk mulai mengeksplorasi hard skill yang relevan." />
                            </div>
                        </div>
                    @endfor
                </div>

                <x-fonts.heading-four class="text-accent" text="Tools" />
                <x-fonts.heading-two
                    text="Menggunakan alat yang tepat secara langsung adalah cara terbaik untuk belajar." />
                <div class="grid grid-cols-3 xl:gap-x-7 lg:gap-x-5 xl:gap-y-12 lg:gap-y-8">
                    @for ($i = 0; $i < 6; $i++)
                        <x-card.item-product-benefit class="object-cover" :src="asset('assets/icons/figma.png')" title="Figma"
                            description="Software Gratis" />
                    @endfor
                </div>

                <x-fonts.heading-four class="text-accent" text="Testimoni Alumni" />
                <x-fonts.heading-two text="10.000+ Alumni Telah Sukses Mencapai Karir Impian" />
                <x-fonts.paragraph
                    text="Lulusan Bootcamp Diggity berasal dari berbagai background pendidikan, mulai dari lulusan SMA sampai Professional. Ayo gabung jadi salah satunya!" />
                <div class="grid grid-cols-2 xl:gap-12 lg:gap-8">
                    <x-card>
                        <x-fonts.paragraph class="font-semibold" text="Project Based" />
                        <x-fonts.paragraph
                            text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur." />
                        <div class="flex">
                            <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="user's avatar"
                                class="rounded-full xl:size-12 lg:size-8">
                            <div class="flex flex-col">
                                <x-fonts.paragraph class="font-semibold" text="Fajar" />
                                <x-fonts.paragraph-extra-small text="Project Manager" />
                            </div>
                        </div>
                    </x-card>
                </div>

                <x-fonts.heading-four class="text-accent" text="Biaya Pendidikan" />
                <x-fonts.heading-two text="Investasi Cerdas untuk Masa Depan Gemilang." />
                <x-fonts.paragraph
                    text="Bootcamp Diggity menawarkan biaya terjangkau dengan manfaat jangka panjang. Ini adalah investasi terbaik untuk mengembangkan keterampilan dan membangun karier sukses. Bersama Diggity, masa depan cerah menantimu!" />
                <div>
                    <div class="grid grid-cols-2">
                        <x-fonts.heading-five
                            class="text-center border-b-4 border-primary bg-secondary xl:py-5 lg:py-3.5 text-primary"
                            text="Pembayaran Langsung" />
                        <x-fonts.heading-five class="text-center border-b-4 xl:py-5 lg:py-3.5 text-gray-300"
                            text="Pembayaran Cicilan" />
                    </div>
                    <div class="grid grid-cols-2">
                        <x-card>
                            <x-fonts.paragraph text="Program Percepatan Karier" />
                            <x-fonts.paragraph-small
                                text="Program intensif yang membantu peserta mengembangkan keterampilan praktis dan portofolio melalui bimbingan mentor, proyek nyata, dan materi pembelajaran lengkap." />
                            <x-fonts.heading-two class="text-accent" text="Rp 4,999,000" />
                            <x-fonts.paragraph-small text="17 - 19 September 2024" />
                            <x-fonts.paragraph-small class="font-semibold"
                                text="Hari ini adalah kesempatan terakhir untuk mendapatkan harga spesial ini!" />
                            <x-button class="w-full" text="Daftar Sekarang" />
                            <x-fonts.paragraph class="font-semibold" text="Fasilitas" />
                            <x-check-circle
                                benefit="Career Preparation Service: Layanan review CV & LinkedIn, serta kelas persiapan karier" />
                            <x-check-circle benefit="30+ Live Class bersama mentor ahli" />
                            <x-check-circle
                                benefit="Self-Paced Learning: Akses modul untuk mempelajari hard skill sebelum kelas dimulai" />
                            <x-check-circle
                                benefit="Akses Seumur Hidup: Nikmati materi online, video pembelajaran, dan rekaman kelas tanpa batas waktu" />
                            <x-check-circle benefit="Final Project Berbasis Masalah Nyata" />
                            <x-check-circle benefit="10+ Studi Kasus Nyata untuk membangun portofolio" />
                            <x-check-circle benefit="Proyek Mingguan untuk mengembangkan portofolio" />
                        </x-card>
                    </div>
                </div>
            </x-card>
        </div>
    </x-wrapper.transparent>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link :href="route('academy-bootcamp')" link="Bootcamp" />
            <x-breadcumb-link link="Judul Bootcamp" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</div>
