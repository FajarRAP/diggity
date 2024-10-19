<x-app-layout>
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link href="#" link="Harga" />
        </x-breadcumb>
        <x-fonts.heading-one class="text-center" text="Paket Harga" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Temukan paket harga yang sesuai. Telusuri beragam pilihan paket
            harga untuk menemukan solusi yang cocok dengan kebutuhan bisnis Anda." />
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <div class="grid grid-cols-3 lg:gap-16 xl:gap-24">
            <x-fonts.heading-one class="my-auto"
                text="Dengan klik masing-masing pilihan produk, Anda akan diarahkan ke halaman harga terpisah tiap produk." />
            <div class="grid grid-cols-2 col-span-2 lg:gap-x-5 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
                <x-card.item-product name="Software Manajemen Tenaga Kerja, HR, dan Payroll" :href="route('price-hr')" />
                <x-card.item-product name="Software Omnichannel dan CRM" :href="route('price-crm')" />
                <x-card.item-product name="Software Akuntansi Online" :href="route('price-accountant')" />
                <x-card.item-product name="Software Tanda Tangan dan Materai Online" :href="route('price-sign')" />
                <x-card.item-product name="Software Manajemen Pajak Karyawan dan Bisnis" :href="route('price-tax')" />
                <x-card.item-product name="Software Manajemen Benefit dan Dukungan Finansial Karyawan" href="" />
                <x-card.item-product name="Software Pengelolaan Pengeluaran dan Operasional" href="" />
            </div>
        </div>

        <x-fonts.heading-two class="w-2/3 mx-auto text-center xl:pt-16 lg:pt-24"
            text="Platform Bisnis Unggulan dalam Ekosistem yang Aman dan Terpercaya" />
        <x-fonts.paragraph class="w-2/3 mx-auto text-center"
            text="Temukan platform bisnis terunggul yang menawarkan keamanan terbaik di dalam ekosistem yang dapat diandalkan dan terpercaya." />
        <div class="grid grid-cols-3 lg:gap-x-5 xl:gap-x-7 lg:gap-y-8 xl:gap-y-12">
            <x-card.item-product-ecosystem title="Fleksibilitas dan Skalabilitas Bisnis yang Optimal"
                description="Produk dan layanan kami dirancang untuk menyesuaikan kebutuhan bisnis, dengan kemampuan kustomisasi dan integrasi Open API yang memungkinkan penyesuaian sesuai dengan kompleksitas yang dibutuhkan."
                :src="asset('assets/images/prices/pages/product-benefit.png')" />
            <x-card.item-product-ecosystem title="Kontrol Akses dan Keamanan Terjamin"
                description="Kami memastikan kontrol penuh atas setiap platform kami, serta menerapkan sistem keamanan yang telah tersertifikasi berdasarkan standar internasional, sehingga Anda dapat menjalankan bisnis dengan keyakinan dan aman."
                :src="asset('assets/images/prices/pages/product-benefit.png')" />
            <x-card.item-product-ecosystem title="Pemanfaatan Data dan Kecerdasan Buatan"
                description="Kami menyediakan sistem yang memungkinkan sentralisasi data dan pengembangan berkelanjutan, dilengkapi dengan keputusan yang mudah, cepat, dan akurat berkat adopsi kecerdasan buatan."
                :src="asset('assets/images/prices/pages/product-benefit.png')" />
            <x-card.item-product-ecosystem title="Dukungan Pelanggan Multichannel yang Handal"
                description="Nikmati layanan pelanggan terpercaya, termasuk dukungan after-sales service dan pelatihan produk, yang dapat diakses melalui berbagai channel komunikasi, memastikan kepuasan pelanggan Anda."
                :src="asset('assets/images/prices/pages/product-benefit.png')" />
            <x-card.item-product-ecosystem title="Program Komunitas yang Inspiratif"
                description="Bergabunglah dalam berbagai event, jaringan, dan kolaborasi dengan para ahli di Diggity Community dan Diggity Event untuk mendapatkan wawasan dan inspirasi yang berharga bagi bisnis Anda."
                :src="asset('assets/images/prices/pages/product-benefit.png')" />
            <x-card.item-product-ecosystem title="Tanpa Biaya Pemeliharaan dan Sesuai Regulasi"
                description="Platform berbasis cloud kami telah tersertifikasi oleh Kominfo, menawarkan fleksibilitas dalam menyesuaikan diri dengan regulasi bisnis yang berubah sesuai dengan peraturan perundangan yang berlaku, sehingga Anda dapat fokus pada pertumbuhan bisnis Anda tanpa khawatir tentang pemeliharaan dan kepatuhan."
                :src="asset('assets/images/prices/pages/product-benefit.png')" />
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link href="#" link="Harga" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>

    <x-footer />
</x-app-layout>
