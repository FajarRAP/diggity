<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {}; ?>

<div>
    <x-wrapper.transparent>
        <x-carousel carouselNum="1" />
    </x-wrapper.transparent>

    {{-- Service --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-fonts.heading-two text="Layanan Kami" />
        <x-fonts.paragraph
            text="Kami memotivasi diri kami untuk mengaplikasikan kreativitas dalam setiap
            proyek, termasuk dalam optimalisasi penggunaan anggaran dan waktu"
            class="w-2/3 mx-auto" />
        {{-- Card --}}
        <div class="grid grid-cols-3 lg:gap-5 xl:gap-7">
            <x-card.item-service title="Website Development"
                description="Dengan bantuan tim developer yang berpengalaman, kami selalu memperhitungkan
                    kesesuaian teknologi dengan kebutuhan masing-masing bisnis. Kami memastikan bahwa situs web yang kami bangun tidak hanya cepat, tetapi juga ramah terhadap SEO dan user-friendly." />
            <x-card.item-service title="Mobile App Development"
                description="Optimalkan mobilitas dan reputasi merek bisnis Anda melalui pengembangan aplikasi mobile (Android & iOS). Capai lebih banyak pelanggan dan persiapkan bisnis Anda untuk bersaing di era digital saat ini." />
            <x-card.item-service title="Digital Marketing"
                description="Mendukung beragam jenis bisnis Anda, mulai dari skala kecil seperti bisnis rumahan dan UMKM, hingga bisnis rintisan (startup) dan perusahaan besar, dalam menerapkan strategi pemasaran digital yang efektif." />
        </div>
        <a href="{{ route('service') }}" class="block font-medium ms-auto w-fit text-primary hover:underline"
            wire:navigate>
            <x-fonts.paragraph text="Lihat Semua Layanan" />
        </a>
    </x-wrapper.inverse-primary>

    {{-- Collab Type --}}
    <x-wrapper.transparent class="text-center">
        <x-fonts.heading-two text="Model Kerja Sama" />
        <x-fonts.paragraph
            text="Sesuaikanlah model proyek dengan kebutuhan yang Anda miliki untuk mencapai hasil yang optimal." />
        <div class="grid grid-cols-3 gap-7">
            <x-card.item-collaboration-type title="Project Based"
                description="Tenaga kerja yang dikhususkan untuk menangani proyek Anda." :href="route('project-based')"
                :benefits="[
                    'Tim eksklusif yang hanya bekerja untuk Anda.',
                    'Mengurangi biaya manajemen sumber daya manusia (SDM).',
                    'Menghilangkan kebutuhan untuk mengurus proses perekrutan.',
                    'Cocok untuk pengembangan platform digital yang dinamis.',
                ]" />
            <x-card.item-collaboration-type title="Dedicated Team"
                description="Tim ahli untuk mengembangkan platform
                digital bisnis perusahaan Anda."
                :href="route('dedicated-team')" :benefits="[
                    'Proyek disesuaikan dengan tujuan bisnis Anda.',
                    'Harga dan jadwal pengerjaan yang transparan.',
                    'Menawarkan garansi kualitas selama satu bulan.',
                    'Ideal untuk pengembangan platform digital baru.',
                ]" />
            <x-card.item-collaboration-type title="On Demand"
                description="Tim yang siap untuk menangani segala permasalahan dan kebutuhan platform digital Anda."
                :href="route('on-demand')" :benefits="[
                    'Lebih fleksibel dalam menanggapi kebutuhan Anda.',
                    'Pengerjaan didasarkan pada permintaan yang diajukan.',
                    'Menawarkan biaya yang lebih terjangkau.',
                    'Ideal untuk pengembangan fitur dan pemeliharaan platform.',
                ]" />
        </div>
    </x-wrapper.transparent>

    {{-- Portfolio --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-carousel carouselNum="2">
            <div class="lg:space-y-6 xl:space-y-12 xl:mb-24 lg:mb-16">
                <x-fonts.heading-two text="Portofolio" />
                <x-fonts.paragraph class="mx-auto lg:w-3/4 xl:w-1/2"
                    text="Dalam beberapa tahun terakhir, pengalaman kami telah membantu klien memulai langkahnya
                    dalam dunia digital. Lihatlah beberapa karya terbaik yang telah kami hasilkan." />
            </div>
        </x-carousel>
    </x-wrapper.inverse-primary>

    {{-- Products --}}
    <x-wrapper.transparent>
        <x-fonts.heading-two text="Produk Kami" class="text-center" />
        <x-fonts.paragraph
            text="Kami memotivasi diri kami untuk mengaplikasikan kreativitas dalam setiap proyek, termasuk dalam optimalisasi penggunaan anggaran dan waktu"
            class="w-2/3 mx-auto text-center" />
        <div class="xl:space-y-36 lg:space-y-24 xl:pt-12 lg:pt-8">
            <x-item-product :reversed="true" :src="asset('assets/images/products/pages/hr.jpg')" :href="route('product-hr')" :benefits="[
                'Platform HR berbasis cloud yang fleksibel, tanpa biaya implementasi dan pemeliharaan.',
                'Database HR yang aman, terintegrasi dengan berbagai modul manajemen.',
                'Skalabilitas tinggi, mudah dikonfigurasi, dan dapat disesuaikan dengan budaya serta kebijakan perusahaan.',
                'Otomatisasi proses HR untuk memperlancar operasional harian perusahaan.',
                'Integrasi strategis yang beragam untuk analisis, perencanaan, dan pengambilan keputusan HR yang lebih efektif.',
            ]"
                title="Software Manajemen Tenaga Kerja, HR, dan Payroll"
                description="Kami menyediakan satu solusi lengkap untuk kebutuhan Anda dalam manajemen tenaga kerja, serta operasional dan strategis HR guna meningkatkan efisiensi bisnis Anda." />
            <x-item-product :src="asset('assets/images/products/pages/crm.jpg')" :href="route('product-crm')" :benefits="[
                'Sistem CRM & omnichannel berbasis cloud yang fleksibel, tanpa biaya implementasi dan pemeliharaan.',
                'Pipeline data penjualan dan pelanggan yang aman, terintegrasi dengan berbagai modul manajemen.',
                'Pipeline data penjualan dan pelanggan yang aman, terintegrasi dengan berbagai modul manajemen.',
                'Dukungan teknologi AI & Bot otomatis untuk meningkatkan efisiensi operasional.',
                'Berbagai modul integrasi strategis untuk analisis, perencanaan, dan pengambilan keputusan.',
            ]"
                title="Software Omnichannel dan CRM"
                description="Kami menyediakan satu solusi lengkap untuk kebutuhan manajemen prospek dan layanan pelanggan, memperluas dan menginnovasi bidang penjualan, pemasaran, dan layanan pelanggan Anda." />
            <x-item-product :reversed="true" :src="asset('assets/images/products/pages/accountant.jpg')" :href="route('product-accountant')" :benefits="[
                'Pembukuan yang terbantu oleh automasi.',
                'Rekonsiliasi bank yang lebih mudah melalui integrasi.',
                'Pengelolaan inventaris dan stok barang yang komprehensif.',
                'Otomatisasi proses HR untuk memperlancar operasional harian perusahaan.',
                'Analisis performa dengan laporan real-time.',
            ]"
                title="Software Akuntansi Online"
                description="Mengatasi risiko kesalahan pencatatan dan memastikan data yang dapat diakses dengan mudah di berbagai lokasi." />
            <x-item-product :src="asset('assets/images/products/pages/sign.jpg')" :href="route('product-sign')" :benefits="[
                'Tanda tangan elektronik yang sah di indonesia dan global.',
                'Meterai elektronik resmi peruri yang dapat digunakan kapan saja.',
                'Pengiriman dan penandatanganan dokumen secara massal.',
                'Pemantauan status dokumen secara real-time.',
                'Penjadwalan kontrak otomatis dengan pengingat masa kontrak.',
            ]"
                title="Software Tanda Tangan dan Materai Online"
                description="Mengurangi waktu dan biaya administrasi dokumen digital dengan fitur eSignature dan eMeterai yang aman serta sah secara hukum." />
            <a href="#" class="block font-medium ms-auto w-fit text-primary hover:underline">
                <x-fonts.paragraph text="Lihat Semua Produk" />
            </a>
        </div>
    </x-wrapper.transparent>

    {{-- Products Price --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-fonts.heading-two text="Harga Produk" />
        <x-fonts.paragraph text="Telusuri berbagai pilihan paket harga yang cocok dengan kebutuhan bisnis Anda." />
        <div class="flex text-left xl:gap-24 lg:gap-16">
            <x-fonts.heading-two class="w-2/3 my-auto"
                text="Dengan klik masing-masing pilihan produk, Anda akan diarahkan ke halaman harga
                terpisah tiap produk." />
            <div class="grid grid-cols-2 xl:gap-x-7 lg:gap-x-5 xl:gap-y-12 lg:gap-y-8">
                <x-card.item-product-price :src="asset('assets/images/products/pages/hr-price.png')"
                    title="Software Manajemen Tenaga Kerja, HR, dan Payroll" />
                <x-card.item-product-price :src="asset('assets/images/products/pages/crm-price.png')" title="Software Omnichannel dan CRM" />
                <x-card.item-product-price :src="asset('assets/images/products/pages/accountant-price.png')" title="Software Akuntansi Online" />
                <x-card.item-product-price :src="asset('assets/images/products/pages/sign-price.png')" title="Software Tanda Tangan dan Materai Online" />
            </div>
        </div>
        <a href="#" class="block font-medium ms-auto w-fit text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Harga" />
        </a>
    </x-wrapper.inverse-primary>

    {{-- Classes --}}
    <x-wrapper.transparent class="text-center">
        <x-fonts.heading-two text="Kelas Kami" />
        <x-fonts.paragraph
            text="Kelas online terbaik dalam berbagai bidang IT seperti Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital."
            class="w-2/3 mx-auto" />
        <div class="grid grid-cols-3 xl:gap-x-7 lg:gap-x-5 xl:gap-y-12 lg:gap-y-8">
            <x-card.item-home-class title="UI/UX Design" />
            <x-card.item-home-class title="Website Development" />
            <x-card.item-home-class title="Mobile App Development" />
            <x-card.item-home-class title="Cyber Security" />
            <x-card.item-home-class title="Data Analysis" />
            <x-card.item-home-class title="Digital Marketing" />
        </div>
        <a href="#" class="block font-medium ms-auto w-fit text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Kelas" />
        </a>
    </x-wrapper.transparent>

    {{-- Learning Path --}}
    <x-wrapper.inverse-primary>
        <x-fonts.heading-two text="Alur Belajar" />
        <x-fonts.paragraph
            text="Meningkatkan fokus dalam mempelajari Desain, Pengembangan Perangkat Lunak, Keamanan Siber, Analisis Data, dan Pemasaran Digital dengan alur yang telah kami susun." />
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <x-card.item-learning-path :src="asset('assets/images/carousels/carousel1.jpeg')" title="UI/UX Design" classes="20" />
            <x-card.item-learning-path :src="asset('assets/images/carousels/carousel1.jpeg')" title="Website Development" classes="20" />
            <x-card.item-learning-path :src="asset('assets/images/carousels/carousel1.jpeg')" title="Mobile App Development" classes="20" />
            <x-card.item-learning-path :src="asset('assets/images/carousels/carousel1.jpeg')" title="Digital Marketing" classes="20" />
        </div>
    </x-wrapper.inverse-primary>

    {{-- Bootcamps --}}
    <x-wrapper.transparent class="text-center">
        <x-fonts.heading-two text="Bootcamp" />
        <x-fonts.paragraph
            text="Telusuri Bootcamp yang Sesuai dengan Jalur Karier Anda dan Mulailah Meningkatkan Diri Anda Sekarang" />
        <div class="flex overflow-x-auto xl:gap-12 lg:gap-8 container-snap xl:p-3 lg:p-2">
            <x-button class="shrink-0" text="Semua" />
            <x-button class="shrink-0" text="UI/UX Design" />
            <x-button class="shrink-0" text="Website Development" />
            <x-button class="shrink-0" text="Mobile App Development" />
            <x-button class="shrink-0" text="Cyber Security" />
            <x-button class="shrink-0" text="Data Analysis" />
            <x-button class="shrink-0" text="Digital Marketing" />
        </div>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-bootcamp :src="asset('assets/images/carousels/carousel1.jpeg')" title="Product Management Bootcmap" level="Level Pemula"
                description="Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX"
                date="1 Desember 2024" />
            <x-card.item-bootcamp :src="asset('assets/images/carousels/carousel1.jpeg')" title="Front End Enginering Bootcamp" level="Level Pemula"
                description="Belajar coding untuk sisi depan, laravel, bootsrap, html, css dan javascript"
                date="1 Desember 2024" />
            <x-card.item-bootcamp :src="asset('assets/images/carousels/carousel1.jpeg')" title="Back End Engineering Bootcamp" level="Level Pemula"
                description="Belajar coding untuk server, database, API dengan javascript" date="1 Desember 2024" />
        </div>
        <a href="#" class="block font-medium ms-auto w-fit text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Bootcamp" />
        </a>
    </x-wrapper.transparent>

    {{-- Webinar --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-fonts.heading-two text="Webinar" />
        <x-fonts.paragraph
            text="Tingkatkan Keterampilan Digital Anda dengan Webinar 2 Jam Bersama Pembicara Terkemuka dan Jadi Lebih Unggul dalam Dunia Digital"
            class="w-2/3 mx-auto" />
        <div class="flex overflow-x-auto xl:gap-12 lg:gap-8 container-snap xl:p-3 lg:p-2">
            <x-button class="shrink-0" text="Semua" />
            <x-button class="shrink-0" text="UI/UX Design" />
            <x-button class="shrink-0" text="Website Development" />
            <x-button class="shrink-0" text="Mobile App Development" />
            <x-button class="shrink-0" text="Cyber Security" />
            <x-button class="shrink-0" text="Data Analysis" />
            <x-button class="shrink-0" text="Digital Marketing" />
        </div>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-webinar title="Webinar Title" description="Webinar Description" price="Webinar Price"
                date="Webinar Held Date" />
            <x-card.item-webinar title="Webinar Title" description="Webinar Description" price="Webinar Price"
                date="Webinar Held Date" />
            <x-card.item-webinar title="Webinar Title" description="Webinar Description" price="Webinar Price"
                date="Webinar Held Date" />

        </div>
        <a href="#" class="block font-medium ms-auto w-fit text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Webinar" />
        </a>
    </x-wrapper.inverse-primary>

    {{-- Workshop --}}
    <x-wrapper.transparent>
        <x-fonts.heading-two class="w-1/2 mx-auto text-center"
            text="Program Pelatihan Keterampilan Digital untuk Universitas, Perusahaan dan Pemerintahan" />
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

    {{-- Learning Method --}}
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
            <x-card.item-training title="Ujian Sertifikasi"
                description="Buktikan kemampuan Anda sebagai mahasiswa dengan mengikuti ujian dan dapatkan sertifikat sebagai bukti penguasaan materi yang dipilih."
                :badges="['Durasi Fleksibel', 'Unlimited', 'Kelas Online']" />
            <x-card.item-training title="Psycho Test"
                description="Psikotes komprehensif mengungkap karakter, potensi diri, kecerdasan, dan kepribadian, lengkap dengan analisis mendalam dan pembahasannya."
                :badges="['Durasi Fleksibel', 'Unlimited', 'Kelas Online']" />
            <x-card.item-training title="English for Professionals"
                description="Kembangkan kemampuan berbahasa Inggris mahasiswa Anda mulai dari komunikasi, vocabulary, hingga etika bisnis."
                :badges="['Durasi Fleksibel', 'Unlimited', 'Kelas Online']" />
        </div>
    </x-wrapper.inverse-primary>

    {{-- Learning Program --}}
    <x-wrapper.transparent>
        <x-fonts.heading-two class="text-center" text="Ragam Program Pembelajaran yang Tersedia" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Temukan kurikulum terbaik yang sesuai dengan kebutuhan pembelajaran karyawan Anda melalui beragam pilihan program yang kami tawarkan." />
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

    {{-- Certification --}}
    <x-wrapper.inverse-primary>
        <x-fonts.heading-two class="text-center" text="Program Sertifikasi yang Tersedia" />
        <div class="flex p-3 overflow-x-auto container-snap xl:gap-12 lg:gap-8">
            <x-button class="shrink-0" text="Semua" />
            <x-button class="shrink-0" text="Meta Digital Marketing Associate" />
            <x-button class="shrink-0" text="Adobe Certified Professional" />
            <x-button class="shrink-0" text="App Development with Swift" />
            <x-button class="shrink-0" text="Cisco Certified Support Technician" />
            <x-button class="shrink-0" text="Communication Skills for Business" />
            <x-button class="shrink-0" text="Information Technology Specialist" />
            <x-button class="shrink-0" text="Intuit Certifications" />
            <x-button class="shrink-0" text="Microsoft Certified Educator" />
            <x-button class="shrink-0" text="Microsoft Certified Fundamentals" />
            <x-button class="shrink-0" text="Microsoft Office Specialist" />
            <x-button class="shrink-0" text="Autodesk Certified User" />
            <x-button class="shrink-0" text="Entrepreneurship and Small Business" />
            <x-button class="shrink-0" text="PMI Project Management Ready" />
            <x-button class="shrink-0" text="Unity Certified User" />
        </div>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-certification-program title="Certification Title" price="Certification Price" />
            <x-card.item-certification-program title="Certification Title" price="Certification Price" />
            <x-card.item-certification-program title="Certification Title" price="Certification Price" />
            <x-card.item-certification-program title="Certification Title" price="Certification Price" />
            <x-card.item-certification-program title="Certification Title" price="Certification Price" />
            <x-card.item-certification-program title="Certification Title" price="Certification Price" />
        </div>
        <a href="" class="block font-medium text-end text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Sertifikasi" />
        </a>
    </x-wrapper.inverse-primary>

    {{-- Certification Bundle --}}
    <x-wrapper.transparent>
        <x-fonts.heading-two class="text-center" text="Mulai Langkah Menjadi Spesialis dengan Paket Sertifikasi" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Tersedia berbagai pilihan paket sertifikasi untuk membantu Anda memulai perjalanan menjadi spesialis di
            bidang pilihan Anda." />
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

    {{-- About Us --}}
    <x-wrapper.inverse-primary>
        <div class="container grid grid-cols-2 mx-auto lg:gap-20 xl:gap-52">
            <div class="lg:space-y-8 xl:space-y-12">
                <x-fonts.heading-two text="Bergabunglah dengan Kami: Peluang Karier di Dunia IT" />
                <div class="xl:space-y-6 lg:space-y-4">
                    <x-fonts.paragraph
                        text="Kami bukan hanya sekedar perusahaan perangkat lunak saja, tapi juga sebuah keluarga yang saling mendukung dan menginspirasi. Berbasis di Yogyakarta, Indonesia, kami membangun lingkungan kerja yang penuh semangat dan kolaboratif. Ini adalah kesempatan Anda untuk bergabung dengan tim profesional kami. Kami mengundang Anda untuk berbagi keterampilan dan pengalaman Anda yang berharga." />
                    <x-fonts.paragraph
                        text="Sekarang, saatnya untuk beraksi! Kirimkan lamaran Anda sekarang dan mulailah petualangan karier Anda dengan Diggity. Ayo, mari jadikan mimpi Anda menjadi kenyataan bersama kami!" />
                </div>
                <x-outline-button text="Pelajari Selengkapnya" />
            </div>
            <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="image"
                class="self-center rounded-xl">
        </div>
    </x-wrapper.inverse-primary>

    {{-- Our Contribution --}}
    <x-wrapper.transparent>
        <div class="bg-secondary rounded-2xl xl:p-24 lg:p-16">
            <x-carousel carouselNum="3" />
        </div>
    </x-wrapper.transparent>

    {{-- Why Choose Our Service --}}
    <x-wrapper.transparent class="text-center">
        <x-fonts.heading-two text="Mengapa Memakai Layanan Diggity" />
        <x-fonts.paragraph
            text="Layanan Diggity Cocok untuk Memenuhi Kebutuhan Digitalisasi Bisnis Anda
            dengan Tepat" />
        <div class="grid grid-cols-3 text-start lg:gap-x-4 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
            <x-card.item-service-reason num="1" title="Inovasi Digital dengan Standar Internasional"
                description="Kami berbasis di Yogyakarta, Indonesia, telah berpengalaman bekerja dengan klien dari berbagai negara, memastikan bahwa kami terlatih untuk memenuhi standar internasional dalam setiap proyek kami." />
            <x-card.item-service-reason num="2" title="Keunggulan Tim Profesional"
                description="Diggity memiliki lebih dari 100 staf ahli yang profesional di setiap bidangnya sejak tahun 2019. Dengan keahlian yang terbukti, kami siap untuk mengatasi segala kebutuhan digital bisnis Anda." />

            <x-card.item-service-reason num="3" title="Beragam Layanan untuk Memenuhi Kebutuhan Anda"
                description="Kami berbasis di Yogyakarta, Indonesia, telah berpengalaman bekerja dengan klien dari berbagai negara, memastikan bahwa kami terlatih untuk memenuhi standar internasional dalam setiap proyek kami." />

            <x-card.item-service-reason num="4" title="Model Kerjasama yang Fleksibel"
                description="Diggity memahami bahwa setiap bisnis memiliki kebutuhan digital yang berbeda. Oleh karena itu, kami menyediakan model kerjasama yang bervariasi agar dapat menawarkan solusi yang tepat untuk setiap tantangan digitalisasi perusahaan Anda." />

            <x-card.item-service-reason num="5" title="Kepercayaan dari Perusahaan Terkemuka"
                description="Dengan dedikasi, integritas, dan profesionalisme kami, banyak perusahaan besar di Indonesia telah mempercayakan proyek digital mereka kepada kami." />

            <x-card.item-service-reason num="6" title="Pendekatan Personalisasi untuk Setiap Klien"
                description="Kami berbasis di Yogyakarta, Indonesia, telah berpengalaman bekerja dengan klien dari berbagai negara, memastikan bahwa kami terlatih untuk memenuhi standar internasional dalam setiap proyek kami." />
        </div>
    </x-wrapper.transparent>

    {{-- Why Choose Our Product --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-fonts.heading-two text="Mengapa Menggunakan Produk Diggity" />
        <x-fonts.paragraph text="Produk Diggity sudah Terintegrasi dengan Keamanan dan Skalabilitas yang Terjamin" />
        <div class="grid grid-cols-4 xl:gap-7 lg:gap-5">
            <x-item-product-reason title="Keamanan & Kepatuhan"
                description="Sistem kami memiliki sertifikasi standar regulasi dan ketentuan keamanan industri." />
            <x-item-product-reason title="Dukungan Purna Jual"
                description="Nikmati kepuasan menyeluruh dengan berbagai layanan purna jual terbaik dan terlengkap di kelasnya." />
            <x-item-product-reason title="Klien Kami"
                description="Puluhan ribu bisnis dari berbagai industri telah mempercayakan Diggity untuk mengoptimalkan proses operasional mereka." />
            <x-item-product-reason title="Partnership"
                description="Diggity memastikan setiap klien mendapatkan solusi untuk perkembangan dan strategi bisnis." />
        </div>
    </x-wrapper.inverse-primary>

    {{-- Why Choose Our Academy --}}
    <x-wrapper.transparent class="text-center">
        <x-fonts.heading-two text="Mengapa Bergabung dengan Akademi Online Diggity" />
        <x-fonts.paragraph text="Akademi Online Diggity Beragam dengan Mentor Ahli dan Panduan Belajar yang Terarah" />
        <div class="grid grid-cols-2 xl:gap-7 lg:gap-5">
            <x-card.item-reason-academy title="Akses Tak Terbatas ke Kelas Diggity"
                description="Nikmati akses tanpa batas ke semua kelas selamanya." />
            <x-card.item-reason-academy title="Proyek Dunia Nyata"
                description="Pengalaman praktis untuk mengasah keterampilan teknis Anda dan memahami tantangan yang ada di lapangan." />
            <x-card.item-reason-academy title="Materi Kelas yang Selalu Diperbarui Gratis"
                description="Peroleh pembaruan materi kelas secara gratis untuk mempersiapkan Anda dalam karier profesional." />
            <x-card.item-reason-academy title="Mentor Berpengalaman"
                description="Dapatkan pembelajaran yang mendalam dari mentor berpengalaman yang membagikan wawasan praktis." />
            <x-card.item-reason-academy title="Sertifikat Kelulusan Kelas"
                description="Dapatkan sertifikat setelah menyelesaikan semua materi dan kuis pembelajaran." />
            <x-card.item-reason-academy title="Bergabung dengan Komunitas Eksklusif"
                description="Ikuti diskusi dan berbagi pengetahuan dengan komunitas  khusus Diggity." />
            <x-card.item-reason-academy title="Konsultasi Tidak Terbatas"
                description="Berinteraksi dengan instruktur secara bebas untuk mendapatkan panduan yang Anda butuhkan." />
            <x-card.item-reason-academy title="Jadwal dan Waktu Pembelajaran Fleksibel"
                description="Nikmati fleksibilitas dalam menyesuaikan waktu belajar Anda dengan jadwal yang Anda miliki." />
        </div>
    </x-wrapper.transparent>

    {{-- Review --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-fonts.heading-two text="Apa Kata Mereka Tentang Diggity" />
    </x-wrapper.inverse-primary>

    {{-- Client, Alumni, News --}}
    <x-wrapper.transparent class="text-center">
        <x-fonts.heading-two text="Klien Kami" />
        <x-fonts.paragraph class="w-2/3 mx-auto"
            text="Kami telah dipercaya oleh ratusan klien dari berbagai macam industri. Kami sangat senang telah menjadi bagian dari perkembangan bisnis mereka." />
        <div class="flex justify-evenly">
            @for ($i = 0; $i < 6; $i++)
                <div class="bg-gray-300 rounded-lg xl:size-44 lg:size-28"></div>
            @endfor
        </div>
        <x-fonts.heading-two class="xl:pt-12 lg:pt-8" text="Latar Belakang Alumni Kami" />
        <x-fonts.paragraph class="w-2/3 mx-auto"
            text="Alumni kami telah menimba ilmu di lebih dari 100 universitas ternama dan kini bekerja di berbagai perusahaan multinasional terkemuka, membuktikan kualitas pendidikan dan pelatihan yang kami tawarkan." />
        <div class="flex justify-evenly">
            @for ($i = 0; $i < 6; $i++)
                <div class="bg-gray-300 rounded-lg xl:size-44 lg:size-28"></div>
            @endfor
        </div>
        <x-fonts.heading-two class="xl:pt-12 lg:pt-8" text="Kisah Sukses Almuni Kami" />
        <x-fonts.paragraph class="w-2/3 mx-auto"
            text="Temukan cerita-cerita inspiratif dari para alumni kami yang telah mencapai kesuksesan luar biasa di berbagai bidang, menunjukkan dampak positif dari pendidikan dan pelatihan yang mereka terima." />
        <div class="flex justify-evenly">
            @for ($i = 0; $i < 6; $i++)
                <div class="bg-gray-300 rounded-lg xl:size-44 lg:size-28"></div>
            @endfor
        </div>

        <div class="flex items-center justify-between xl:pt-24 lg:pt-16">
            <x-fonts.heading-two text="Berita Terbaru Hari Ini" />
            <x-outline-button text="Lihat Selengkapnya" />
        </div>
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-news title="News Title" highlight="News Highlight" topic="Sports" date="Apr 8, 2024" />
            <x-card.item-news title="News Title" highlight="News Highlight" topic="Sports" date="Apr 8, 2024" />
            <x-card.item-news title="News Title" highlight="News Highlight" topic="Sports" date="Apr 8, 2024" />
        </div>
    </x-wrapper.transparent>
</div>
