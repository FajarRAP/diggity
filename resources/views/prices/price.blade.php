<x-app-layout>
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link>Harga</x-breadcumb-link>
        </x-breadcumb>
        <x-heading-one class="text-center">Paket Harga</x-heading-one>
        <x-paragraph class="mx-auto text-center xl:w-1/2">
            Temukan paket harga yang sesuai. Telusuri beragam pilihan paket
            harga untuk menemukan solusi yang cocok dengan kebutuhan bisnis Anda.
        </x-paragraph>
    </x-wrapper>

    <x-wrapper>
        <div class="grid grid-cols-2 gap-32">
            <x-heading-one class="my-auto">
                Dengan klik masing-masing pilihan produk, Anda akan diarahkan ke halaman harga terpisah tiap produk.
            </x-heading-one>
            <div class="grid grid-cols-2 lg:gap-x-4 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
                <x-card class="flex items-center gap-6">
                    <img src="{{ asset('asset/images/prices/pages/product-1.png') }}" alt="Product Icon" class="size-20">
                    <x-paragraph>Software Manajemen Tenaga Kerja, HR, dan Payroll</x-paragraph>
                </x-card>
                <x-card class="flex items-center gap-6">
                    <img src="{{ asset('asset/images/prices/pages/product-2.png') }}" alt="Product Icon"
                        class="size-20">
                    <x-paragraph>Software Omnichannel dan CRM</x-paragraph>
                </x-card>
                <x-card class="flex items-center gap-6">
                    <img src="{{ asset('asset/images/prices/pages/product-3.png') }}" alt="Product Icon"
                        class="size-20">
                    <x-paragraph>Software Akuntansi Online</x-paragraph>
                </x-card>
                <x-card class="flex items-center gap-6">
                    <img src="{{ asset('asset/images/prices/pages/product-4.png') }}" alt="Product Icon"
                        class="size-20">
                    <x-paragraph>Software Tanda Tangan dan Materai Online</x-paragraph>
                </x-card>
                <x-card class="flex items-center gap-6">
                    <img src="{{ asset('asset/images/prices/pages/product-4.png') }}" alt="Product Icon"
                        class="size-20">
                    <x-paragraph>Software Manajemen Pajak Karyawan dan Bisnis</x-paragraph>
                </x-card>
                <x-card class="flex items-center gap-6">
                    <img src="{{ asset('asset/images/prices/pages/product-4.png') }}" alt="Product Icon"
                        class="size-20">
                    <x-paragraph>Software Manajemen Benefit dan Dukungan Finansial Karyawan</x-paragraph>
                </x-card>
                <x-card class="flex items-center gap-6">
                    <img src="{{ asset('asset/images/prices/pages/product-4.png') }}" alt="Product Icon"
                        class="size-20">
                    <x-paragraph>Software Pengelolaan Pengeluaran dan Operasional</x-paragraph>
                </x-card>
            </div>
        </div>
    </x-wrapper>

    <div class="container mx-auto lg:pb-24 xl:pb-36 lg:space-y-8 xl:space-y-12">
        <x-heading-two class="mx-auto text-center xl:w-1/2">
            Platform Bisnis Unggulan dalam Ekosistem yang Aman dan Terpercaya
        </x-heading-two>
        <x-paragraph class="mx-auto text-center xl:w-1/2">
            Temukan platform bisnis terunggul yang menawarkan keamanan terbaik di dalam ekosistem yang dapat
            diandalkan dan terpercaya.
        </x-paragraph>
        <div class="grid grid-cols-3 lg:gap-x-4 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
            <x-card class="flex flex-col gap-3">
                <img src="{{ asset('asset/images/prices/pages/product-benefit.png') }}" alt="Product Benefit"
                    class="size-24">
                <x-paragraph class="font-semibold">
                    Fleksibilitas dan Skalabilitas Bisnis yang Optimal
                </x-paragraph>
                <x-paragraph-small>
                    Produk dan layanan kami dirancang untuk menyesuaikan kebutuhan bisnis, dengan kemampuan kustomisasi
                    dan
                    integrasi Open API yang memungkinkan penyesuaian sesuai dengan kompleksitas yang dibutuhkan.
                </x-paragraph-small>
            </x-card>
            <x-card class="flex flex-col gap-3">
                <img src="{{ asset('asset/images/prices/pages/product-benefit.png') }}" alt="Product Benefit"
                    class="size-24">
                <x-paragraph class="font-semibold">
                    Kontrol Akses dan Keamanan Terjamin
                </x-paragraph>
                <x-paragraph-small>
                    Kami memastikan kontrol penuh atas setiap platform kami, serta menerapkan sistem keamanan yang telah
                    tersertifikasi berdasarkan standar internasional, sehingga Anda dapat menjalankan bisnis dengan
                    keyakinan dan aman.
                </x-paragraph-small>
            </x-card>
            <x-card class="flex flex-col gap-3">
                <img src="{{ asset('asset/images/prices/pages/product-benefit.png') }}" alt="Product Benefit"
                    class="size-24">
                <x-paragraph class="font-semibold">
                    Pemanfaatan Data dan Kecerdasan Buatan
                </x-paragraph>
                <x-paragraph-small>
                    Kami menyediakan sistem yang memungkinkan sentralisasi data dan pengembangan berkelanjutan,
                    dilengkapi
                    dengan keputusan yang mudah, cepat, dan akurat berkat adopsi kecerdasan buatan.
                </x-paragraph-small>
            </x-card>
            <x-card class="flex flex-col gap-3">
                <img src="{{ asset('asset/images/prices/pages/product-benefit.png') }}" alt="Product Benefit"
                    class="size-24">
                <x-paragraph class="font-semibold">
                    Dukungan Pelanggan Multichannel yang Handal
                </x-paragraph>
                <x-paragraph-small>
                    Nikmati layanan pelanggan terpercaya, termasuk dukungan after-sales service dan pelatihan produk,
                    yang
                    dapat diakses melalui berbagai channel komunikasi, memastikan kepuasan pelanggan Anda.
                </x-paragraph-small>
            </x-card>
            <x-card class="flex flex-col gap-3">
                <img src="{{ asset('asset/images/prices/pages/product-benefit.png') }}" alt="Product Benefit"
                    class="size-24">
                <x-paragraph class="font-semibold">
                    Program Komunitas yang Inspiratif
                </x-paragraph>
                <x-paragraph-small>
                    Bergabunglah dalam berbagai event, jaringan, dan kolaborasi dengan para ahli di Diggity Community
                    dan
                    Diggity Event untuk mendapatkan wawasan dan inspirasi yang berharga bagi bisnis Anda.
                </x-paragraph-small>
            </x-card>
            <x-card class="flex flex-col gap-3">
                <img src="{{ asset('asset/images/prices/pages/product-benefit.png') }}" alt="Product Benefit"
                    class="size-24">
                <x-paragraph class="font-semibold">
                    Tanpa Biaya Pemeliharaan dan Sesuai Regulasi
                </x-paragraph>
                <x-paragraph-small>
                    Platform berbasis cloud kami telah tersertifikasi oleh Kominfo, menawarkan fleksibilitas dalam
                    menyesuaikan diri dengan regulasi bisnis yang berubah sesuai dengan peraturan perundangan yang
                    berlaku,
                    sehingga Anda dapat fokus pada pertumbuhan bisnis Anda tanpa khawatir tentang pemeliharaan dan
                    kepatuhan.
                </x-paragraph-small>
            </x-card>
        </div>
    </div>

    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link>Harga</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    <x-footer />
</x-app-layout>
