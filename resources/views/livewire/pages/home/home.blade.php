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
        <a href="#" class="block font-medium ms-auto w-fit text-primary hover:underline">
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
            <x-card.item-webinar />
            <x-card.item-webinar />
            <x-card.item-webinar />
        </div>
        <a href="#" class="block font-medium ms-auto w-fit text-primary hover:underline">
            <x-fonts.paragraph text="Lihat Semua Webinar" />
        </a>
    </x-wrapper.inverse-primary>
</div>
