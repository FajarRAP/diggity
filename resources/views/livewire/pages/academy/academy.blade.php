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
            <x-breadcumb-link link="Akademi" />
        </x-breadcumb>
        <div class="grid grid-cols-2 gap-24 mx-auto">
            <div class="flex flex-col justify-center lg:gap-8 xl:gap-12">
                <x-fonts.heading-one text="Akademi" />
                <x-fonts.paragraph
                    text="Diggity menyediakan kelas online, bootcamp, webinar dan pelatihan terbaik dalam berbagai bidang IT seperti Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital yang cocok untuk pemula." />
            </div>
            <img src={{ asset('assets/images/carousels/carousel1.jpeg') }}
                class="object-cover w-full lg:h-80 xl:h-96 rounded-3xl">
        </div>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-fonts.heading-two class="text-center" text="Kelas Kami" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Kelas online terbaik dalam berbagai bidang IT seperti Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital." />
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-class />
            <x-card.item-class />
            <x-card.item-class />
        </div>
        <a href="{{ route('academy-class') }}" class="block font-medium text-end text-primary hover:underline"
            wire:navigate>
            <x-fonts.paragraph text="Lihat Semua Kelas" />
        </a>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-fonts.heading-two class="text-center" text="Alur Belajar" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Meningkatkan fokus dalam mempelajari Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital dengan alur yang telah kami susun." />
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <x-card.item-learning-path title="UI/UX Design" classes="20" :src="asset('assets/images/academy/uiux.png')" />
            <x-card.item-learning-path title="Website Development" classes="20" :src="asset('assets/images/academy/web-dev.png')" />
            <x-card.item-learning-path title="Mobile Development" classes="20" :src="asset('assets/images/academy/mobile-dev.png')" />
            <x-card.item-learning-path title="Digital Marketing" classes="20" :src="asset('assets/images/academy/digital-marketing.png')" />
        </div>
        <a href="{{ route('academy-learning-path') }}" class="block font-medium text-end text-primary hover:underline"
            wire:navigate>
            <x-fonts.paragraph text="Lihat Semua Alur Belajar" />
        </a>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-fonts.heading-two class="text-center" text="Bootcamp" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text=
            "Telusuri Bootcamp yang Sesuai dengan Jalur Karier Anda dan Mulailah Meningkatkan Diri Anda Sekarang" />
        <ul class="flex p-3 overflow-x-auto lg:gap-8 xl:gap-12 container-snap">
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 0" wire:click="filterBootcamp(0)" text="Semua" />
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 1" wire:click="filterBootcamp(1)" text="UI/UX Design" />
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 2" wire:click="filterBootcamp(2)" text="Website Development" />
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 3" wire:click="filterBootcamp(3)" text="Mobile App Development" />
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 4" wire:click="filterBootcamp(4)" text="Cyber Security" />
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 5" wire:click="filterBootcamp(5)" text="Data Analysis" />
            </li>
            <li class="shrink-0">
                <x-button :isActive="$bootcampIndex == 6" wire:click="filterBootcamp(6)" text="Digital Marketing" />
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
            <x-fonts.paragraph text="Lihat Semua Bootcamp" />
        </a>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-fonts.heading-two class="text-center" text="Webinar" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Tingkatkan Keterampilan Digital Anda dengan Webinar 2 Jam Bersama Pembicara Terkemuka dan Jadi Lebih Unggul dalam Dunia Digital" />
        <ul class="flex p-3 overflow-x-auto lg:gap-8 xl:gap-12 container-snap">
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 0" wire:click="filterWebinar(0)" text="Semua" /></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 1" wire:click="filterWebinar(1)" text="UI/UX Design" /></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 2" wire:click="filterWebinar(2)"
                    text="Website Development" /></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 3" wire:click="filterWebinar(3)"
                    text="Mobile App Development" /></li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 4" wire:click="filterWebinar(4)" text="Cyber Security" />
            </li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 5" wire:click="filterWebinar(5)" text="Data Analysis" />
            </li>
            <li class="shrink-0"><x-button :isActive="$webinarIndex == 6" wire:click="filterWebinar(6)" text="Digital Marketing" />
            </li>
        </ul>
        <div class="grid grid-cols-3">
            <x-card class="xl:space-y-6 lg:space-y-4">
                <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="webinar image" class="rounded-lg">
                <x-fonts.paragraph-small class="font-semibold" text="Date of Webinar Held" />
                <x-fonts.paragraph class="font-semibold" text="Webinar Title" />
                <x-fonts.paragraph-small text="Webinar Description" />
                <div class="flex items-center justify-between">
                    <x-fonts.heading-three class="text-accent" text="Rp. 199.000" />
                    <x-button text="Daftar Webinar" />
                </div>
            </x-card>
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Webinar" />
        </a>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-fonts.heading-two class="w-1/2 mx-auto text-center"
            text="Program Pelatihan Keterampilan Digital untuk Universitas,
            Perusahaan dan Pemerintahan" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Temukan Program Pelatihan yang Tepat untuk Kebutuhan Anda dengan Tim yang Ahli dalam Merancang dan Mengadakan Program yang Didedikasikan kepada Perusahaan, Pemerintah, dan Universitas." />
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
        <x-fonts.heading-two class="w-2/3 mx-auto text-center"
            text="Kustomisasi Pelatihan Kemampuan Digital Institusi Anda dengan
            Beragam Metode Pembelajaran dari Diggity" />
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
        <x-fonts.heading-two class="text-center" text="Ragam Program Pembelajaran yang Tersedia" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Temukan kurikulum terbaik yang sesuai dengan kebutuhan pembelajaran karyawan Anda melalui beragam pilihan
            program yang kami tawarkan." />
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
        <x-fonts.heading-two class="text-center" text="Program Sertifikasi yang Tersedia" />
        <div class="flex p-3 overflow-x-auto container-snap xl:gap-12 lg:gap-8">
            <x-button class="shrink-0" text="Semua" />
            <x-button class="shrink-0" text="Meta Digital Marketing Associate" />
            <x-button class="shrink-0" text="Adobe Certified Professional" />
            <x-button class="shrink-0" text="App Development with Swift" />
            <x-button class="shrink-0" text="Cisco Certified Support Technician" />
        </div>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-certification-program title="Certification Title" price="Certification Price" />

        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Sertifikasi" />
        </a>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <x-fonts.heading-two class="text-center" text="Mulai Langkah Menjadi Spesialis dengan Paket Sertifikasi" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Tersedia berbagai pilihan paket sertifikasi untuk membantu Anda memulai perjalanan menjadi spesialis di bidang pilihan Anda." />
        <div class="grid grid-cols-2 xl:gap-7 lg:gap-5">
            <x-card.item-certification-bundle title="Certification Bundle Title" totalProgram="10 Program" />
            <x-card.item-certification-bundle title="Certification Bundle Title" totalProgram="10 Program" />
            <x-card.item-certification-bundle title="Certification Bundle Title" totalProgram="10 Program" />
            <x-card.item-certification-bundle title="Certification Bundle Title" totalProgram="10 Program" />
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Sertifikasi" />
        </a>
    </x-wrapper.transparent>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link link="Akademi" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</div>
