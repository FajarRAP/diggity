<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Reactive;

new #[Layout('layouts.app')] class extends Component {
    public int $bootcampIndex = 0;
    public int $webinarIndex = 0;

    public function filterBootcamp(int $bootcampIndexed)
    {
        $this->bootcampIndex = $bootcampIndexed;
    }

    public function filterWebinar(int $bootcampIndexed)
    {
        $this->webinarIndex = $bootcampIndexed;
    }

    public function with(): array
    {
        return [
            'bootcamps' => [
                [
                    'title' => 'Product Management Bootcamp',
                    'description' => 'Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX',
                    'date' => '1 Desember 2024',
                    'level' => 'Level Pemula',
                    'category' => 1,
                ],
                [
                    'title' => 'UI/UX Design Bootcamp',
                    'description' => 'Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX',
                    'date' => '1 Desember 2024',
                    'level' => 'Level Pemula',
                    'category' => 2,
                ],
                [
                    'title' => 'Website Development Bootcamp',
                    'description' => 'Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX',
                    'date' => '1 Desember 2024',
                    'level' => 'Level Pemula',
                    'category' => 3,
                ],
                [
                    'title' => 'Mobile App Development Bootcamp',
                    'description' => 'Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX',
                    'date' => '1 Desember 2024',
                    'level' => 'Level Pemula',
                    'category' => 4,
                ],
                [
                    'title' => 'Cyber Security Bootcamp',
                    'description' => 'Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX',
                    'date' => '1 Desember 2024',
                    'level' => 'Level Pemula',
                    'category' => 5,
                ],
                [
                    'title' => 'Digital Marketing Bootcamp',
                    'description' => 'Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX',
                    'date' => '1 Desember 2024',
                    'level' => 'Level Pemula',
                    'category' => 6,
                ],
            ],
        ];
    }
};

?>

<div>
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link>Akademi</x-breadcumb-link>
        </x-breadcumb>
        <div class="grid grid-cols-2 gap-24 mx-auto">
            <div class="flex flex-col justify-center lg:gap-8 xl:gap-12">
                <x-heading-one>Akademi</x-heading-one>
                <x-paragraph>Diggity menyediakan kelas online, bootcamp, webinar dan pelatihan terbaik dalam berbagai
                    bidang IT seperti Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran
                    Digital yang cocok untuk pemula.</x-paragraph>
            </div>
            <img src={{ asset('assets/images/carousels/carousel1.jpeg') }}
                class="object-cover w-full lg:h-80 xl:h-96 rounded-3xl">
        </div>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-heading-two class="text-center">Kelas Kami</x-heading-two>
        <x-paragraph class="w-2/3 mx-auto text-center">Kelas online terbaik dalam berbagai bidang IT seperti Desain,
            Pengembangan Perangkat Lunak,
            Keamanan Siber, Analisis Data, dan Pemasaran Digital.</x-paragraph>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
        </div>
        <a href="{{ route('academy-class') }}" class="block font-medium text-end text-primary hover:underline"
            wire:navigate>
            <x-paragraph>Lihat Semua Kelas</x-paragraph>
        </a>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-heading-two class="text-center">Alur Belajar</x-heading-two>
        <x-paragraph class="w-2/3 mx-auto text-center">
            Meningkatkan fokus dalam mempelajari Desain, Pengembangan
            Perangkat Lunak, Keamanan Siber, Analisis
            Data, dan Pemasaran Digital dengan alur yang telah kami susun.
        </x-paragraph>
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <x-card.item-learning-path title="UI/UX Design" classes="20" :src="asset('assets/images/academy/uiux.png')" />
            <x-card.item-learning-path title="Website Development" classes="20" :src="asset('assets/images/academy/web-dev.png')" />
            <x-card.item-learning-path title="Mobile Development" classes="20" :src="asset('assets/images/academy/mobile-dev.png')" />
            <x-card.item-learning-path title="Digital Marketing" classes="20" :src="asset('assets/images/academy/digital-marketing.png')" />
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-paragraph>Lihat Semua Alur Belajar</x-paragraph>
        </a>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-heading-two class="text-center">Bootcamp</x-heading-two>
        <x-paragraph class="w-2/3 mx-auto text-center">
            Telusuri Bootcamp yang Sesuai dengan Jalur Karier Anda dan Mulailah Meningkatkan Diri Anda Sekarang
        </x-paragraph>
        <ul class="flex p-3 overflow-x-auto lg:gap-8 xl:gap-12 container-snap">
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 0" wire:click="filterBootcamp(0)">Semua</x-button>
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 1" wire:click="filterBootcamp(1)">UI/UX
                    Design</x-button>
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 2" wire:click="filterBootcamp(2)">Website
                    Development</x-button>
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 3" wire:click="filterBootcamp(3)">Mobile
                    App Development</x-button>
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 4" wire:click="filterBootcamp(4)">Cyber
                    Security</x-button>
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 5" wire:click="filterBootcamp(5)">Data
                    Analysis</x-button>
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 6" wire:click="filterBootcamp(6)">Digital
                    Marketing</x-button>
            </li>
        </ul>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            @foreach ($bootcamps as $e)
                @if ($e['category'] == $bootcampIndex)
                    <x-card.item-bootcamp :title="$e['title']" :description="$e['description']" :date="$e['date']" :level="$e['level']"
                        :src="asset('assets/images/carousels/carousel1.jpeg')" />
                @elseif ($bootcampIndex == 0)
                    <x-card.item-bootcamp :title="$e['title']" :description="$e['description']" :date="$e['date']" :level="$e['level']"
                        :src="asset('assets/images/carousels/carousel1.jpeg')" />
                @endif
            @endforeach
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-paragraph>Lihat Semua Bootcamp</x-paragraph>
        </a>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-heading-two class="text-center">Webinar</x-heading-two>
        <x-paragraph class="w-2/3 mx-auto text-center">
            Tingkatkan Keterampilan Digital Anda dengan Webinar 2 Jam Bersama Pembicara Terkemuka dan Jadi Lebih Unggul
            dalam Dunia Digital
        </x-paragraph>
        <ul class="flex p-3 overflow-x-auto lg:gap-8 xl:gap-12 container-snap">
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 0" wire:click="filterWebinar(0)">Semua</x-button></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 1" wire:click="filterWebinar(1)">UI/UX Design</x-button></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 2" wire:click="filterWebinar(2)">Website
                    Development</x-button></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 3" wire:click="filterWebinar(3)">Mobile App
                    Development</x-button></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 4" wire:click="filterWebinar(4)">Cyber Security</x-button>
            </li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 5" wire:click="filterWebinar(5)">Data Analysis</x-button>
            </li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 6" wire:click="filterWebinar(6)">Digital Marketing</x-button>
            </li>
        </ul>
        <div class="grid grid-cols-3">
            <x-card class="xl:space-y-6 lg:space-y-4">
                <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="webinar image" class="rounded-lg">
                <x-paragraph-small class="font-semibold">Date of Webinar Held</x-paragraph-small>
                <x-paragraph class="font-semibold">Webinar Title</x-paragraph>
                <x-paragraph-small>Webinar Description</x-paragraph-small>
                <div class="flex items-center justify-between">
                    <x-heading-three class="text-accent">Rp. 199.000</x-heading-three>
                    <x-button>Daftar Webinar</x-button>
                </div>
            </x-card>
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-paragraph>Lihat Semua Webinar</x-paragraph>
        </a>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-heading-two class="w-1/2 mx-auto text-center">
            Program Pelatihan Keterampilan Digital untuk Universitas,
            Perusahaan dan Pemerintahan</x-heading-two>
        <x-paragraph class="w-2/3 mx-auto text-center">
            Temukan Program Pelatihan yang Tepat untuk Kebutuhan Anda dengan Tim yang Ahli dalam Merancang dan
            Mengadakan Program yang Didedikasikan kepada Perusahaan, Pemerintah, dan Universitas.</x-paragraph>
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <x-card.item-workshop title="Program Peningkatan Keterampilan Internal"
                description="Solusi yang tepat bagi perusahaan dan lembaga pemerintahan yang menginginkan transformasi digital."
                :targets="[
                    'Manajemen Tingkat Atas',
                    'Manajemen Tingkat Menengah',
                    'Manajemen Tingkat Pertama',
                    'Manajemen Tingkat Atas',
                    'Karyawan Staff',
                ]" />
            <x-card.item-workshop title="CSR untuk Menciptakan Talenta Digital dengan Visi Jangka Panjang"
                description="Program ini dirancang untuk institusi yang berkomitmen pada penciptaan talen digital dengan nilai-nilai yang berkelanjutan."
                :targets="['Masyarakat Umum (disesuaikan dengan target program CSR)', 'Karyawan Staff']" />
            <x-card.item-workshop title="Program Manajemen Trainee dan OJT"
                description="Program ini bertujuan untuk merekrut tim yang memiliki keahlian dalam tech stack yang sesuai dengan kebutuhan Anda, sehingga dapat mendukung kesuksesan institusi Anda."
                :targets="['Lulusan Baru', 'Karyawan Staff']" />
            <x-card.item-workshop title="Program Pendidikan Institusi"
                description="Program ini dirancang khusus untuk universitas/perguruan tinggi yang ingin meningkatkan kemampuan digital mereka dari tingkat mandiri hingga skala nasional melalui program magang dan pelatihan."
                :targets="['Mahasiswa melalui program MSIB dan MBKM', 'Dosen/tenaga pendidik']" />
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-heading-two class="w-2/3 mx-auto text-center">
            Kustomisasi Pelatihan Kemampuan Digital Institusi Anda dengan
            Beragam Metode Pembelajaran dari Diggity</x-heading-two>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-training title="Bootcamp"
                description="Kelas Intensif untuk Memperluas Pengetahuan dan Keterampilan Peserta dalam Mengembangkan Prototipe Produk Digital."
                :badges="['Durasi: 108 jam*', '20 Peserta', 'Kelas Online']" />
            <x-card.item-training title="Workshop"
                description="Pelatihan Singkat untuk Meningkatkan Pengetahuan dan Keterampilan Digital Talenta atau Peserta dari Institusi Anda."
                :badges="['Durasi Fleksibel', '50 Peserta', 'Kelas Online']" />
            <x-card.item-training title="Kelas Online"
                description="Pembelajaran Berbasis Video yang Dapat Dimonitor oleh Tim Pemimpin Secara Langsung Melalui Dasbor yang Terhubung dengan Kemajuan Belajar."
                :badges="['Durasi Fleksibel', 'Unlimited', 'Kelas Online']" />
        </div>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-heading-two class="text-center">Ragam Program Pembelajaran yang Tersedia</x-heading-two>
        <x-paragraph class="w-2/3 mx-auto text-center">
            Temukan kurikulum terbaik yang sesuai dengan kebutuhan pembelajaran karyawan Anda melalui beragam pilihan
            program yang kami tawarkan.</x-paragraph>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-learning-program title="Transformasi & Kepemimpinan Digital"
                description="Topik ini akan membantu Anda memahami strategi dan pola pikir saat melakukan transformasi digital di perusahaan."
                :topics="[
                    'Transformasi Digital',
                    'Keterampilan & Pola Pikir Kepemimpinan Digital',
                    'Persiapan Karir',
                ]" :interests="[
                    'Pemimpin yang Sadar & Transformasi di Era Digital',
                    'Mengembangkan Roadmap Transformasi Digital',
                    'Menjadi Pemimpin Digital yang Efektif',
                ]" />
            <x-card.item-learning-program title="Pengembangan Produk"
                description="Topik ini berkaitan dengan pengembangan produk yang berfokus pada pengguna/user-centric, baik dalam bisnis digital maupun non-digital."
                :topics="[
                    'Design Thinking & Desain Produk Berbasis Data',
                    'Ide Produk, Riset Pengguna, Pengujian, dan Pembuatan Prototipe',
                    'Persiapan Karir',
                ]" :interests="[
                    'Cara Membangun Produk yang Disukai Orang',
                    'Pemikiran Desain & Ide Produk',
                    'Kerangka Pengembangan Produk',
                ]" />
            <x-card.item-learning-program title="Teknologi"
                description="Topik ini mencakup teknologi pendukung untuk mengembangkan produk digital."
                :topics="[
                    'Pengembangan Perangkat Lunak & Aplikasi',
                    'Keamanan Cyber & Ethical Hacking',
                    'Kecerdasan Buatan, Blockchain, & Komputasi Awan',
                ]" :interests="[
                    'Selenium & Appium untuk Jaminan Kualitas',
                    'Kesadaran Keamanan Siber',
                    'SCRUM dan Pengembangan Web Full Stack',
                ]" />
            <x-card.item-learning-program title="Data"
                description="Topik ini mencakup teknologi pendukung untuk mengembangkan produk digital."
                :topics="[
                    'Pembelajaran Mesin & NLP',
                    'Data Mining, Data Warehouse, Big Data',
                    'Visualisasi Data menggunakan Google Data Studio/PowerBI/Tableau',
                ]" :interests="[
                    'Buat Dasbor Google Data Studio/PowerBI/Tableau',
                    'Ubah Data menjadi Wawasan untuk Ditindaklanjuti',
                ]" />
            <x-card.item-learning-program title="Bisnis Digital"
                description="Topik ini berkaitan dengan dukungan bisnis dalam digitalisasi, mulai dari level operasional hingga strategi."
                :topics="['Consumer Insights, CRM, & CXM', 'SEO, SEM & Growth Hacking', 'People Analytics']" :interests="['Dasar-dasar Kampanye Pemasaran Digital', 'Strategi Menuju Pasar']" />
            <x-card.item-learning-program title="Pengembangan Karir & Profesional"
                description="Topik ini berkaitan dengan keterampilan dan pengetahuan untuk menavigasi perkembangan sebagai talenta digital."
                :topics="[
                    'Kepemimpinan Pribadi',
                    'Menavigasi Kesehatan Mental di Tempat Kerja',
                    'Komunikasi & Kolaborasi yang Efektif di Era Digital',
                ]" :interests="[
                    'Navigasi Kesehatan Mental di Tempat Kerja',
                    'Mengembangkan Merek Pribadi Anda di Tempat Kerja',
                ]" />
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-heading-two class="text-center">Program Sertifikasi yang Tersedia</x-heading-two>
        <div class="flex p-3 overflow-x-auto container-snap xl:gap-12 lg:gap-8">
            <x-button class="shrink-0">Semua</x-button>
            <x-button class="shrink-0">Meta Digital Marketing Associate</x-button>
            <x-button class="shrink-0">Adobe Certified Professional</x-button>
            <x-button class="shrink-0">App Development with Swift</x-button>
            <x-button class="shrink-0">Cisco Certified Support Technician</x-button>
        </div>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-certification-program />
            <x-card.item-certification-program />
            <x-card.item-certification-program />
            <x-card.item-certification-program />
            <x-card.item-certification-program />
            <x-card.item-certification-program />
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-paragraph>Lihat Semua Sertifikasi</x-paragraph>
        </a>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-heading-two class="text-center">
            Mulai Langkah Menjadi Spesialis dengan Paket Sertifikasi</x-heading-two>
        <x-paragraph class="w-2/3 mx-auto text-center">
            Tersedia berbagai pilihan paket sertifikasi untuk membantu Anda memulai perjalanan menjadi spesialis di
            bidang pilihan Anda.</x-paragraph>
        <div class="grid grid-cols-2 xl:gap-7 lg:gap-5">
            <x-card.item-certification-bundle />
            <x-card.item-certification-bundle />
            <x-card.item-certification-bundle />
            <x-card.item-certification-bundle />
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-paragraph>Lihat Semua Sertifikasi</x-paragraph>
        </a>
    </x-wrapper.transparent>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link>Akademi</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>

    <x-footer />
</div>
