<x-app-layout>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link link="Produk" />
        </x-breadcumb>

        <x-carousel carouselNum="1" />
    </x-wrapper.inverse-primary>

    {{-- Body --}}
    <x-wrapper.transparent class="xl:!space-y-24 lg:!space-y-16">
        <x-fonts.heading-two class="w-2/3 mx-auto text-center"
            text="Optimalkan Kesempatan Bisnis Anda Dengan Teknologi Cloud-Based." />
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
            'Skalabilitas tinggi, konfigurasi yang mudah, dan penyesuaian aturan dan pengawasan akses kontrol.',
            'Dukungan teknologi AI & Bot otomatis untuk meningkatkan efisiensi operasional.',
            'Berbagai modul integrasi strategis untuk analisis, perencanaan, dan pengambilan keputusan.',
        ]" title="Software Omnichannel dan CRM"
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
            description="Mengurangi waktu dan biaya dokumen digital dengan fitur eSignature dan eMeterai yang aman serta sah secara hukum." />
        <x-item-product :reversed="true" :src="asset('assets/images/products/pages/accountant.jpg')" :href="route('product-tax')" :benefits="[
            'Pembayaran dan pelaporan pajak dapat dilakukan secara online dengan aman.',
            'Anda akan menerima bukti pelaporan pajak yang sah dan resmi.',
            'Riwayat pelaporan pajak tersimpan dengan rapi untuk referensi Anda.',
            'Menjamin kepatuhan dengan peraturan perpajakan yang berlaku.',
        ]"
            title="Software Manajemen Pajak Karyawan dan Bisnis"
            description="Kami menawarkan solusi perangkat lunak yang aman dan andal untuk memenuhi kebutuhan perpajakan bisnis Anda, yang juga merupakan mitra resmi dari Direktorat Jenderal Pajak (DJP)." />
        <x-item-product :src="asset('assets/images/products/pages/sign.jpg')" :href="route('product-benefit-management')" :benefits="[
            'Administrasi benefit yang sesuai dengan anggaran perusahaan.',
            'Opsi akses gaji lebih cepat tersedia.',
            'Katalog vendor yang lengkap dan terpilih.',
            'Menjaga kepuasan dan retensi karyawan.',
        ]"
            title="Software Manajemen Benefit dan Dukungan Finansial Karyawan"
            description="Meningkatkan kesejahteraan dan keterlibatan karyawan dengan program benefit yang dapat disesuaikan dengan kebutuhan individu." />
        <x-item-product :reversed="true" :src="asset('assets/images/products/pages/accountant.jpg')" :href="route('product-expense')" :benefits="[
            'Kemudahan dalam pengajuan dan persetujuan reimbursement melalui aplikasi',
            'Notifikasi dan fitur persetujuan untuk memudahkan tim keuangan.',
            'Pencairan dana sesuai dengan jadwal yang telah ditentukan.',
            'Rekapan dan integrasi langsung dengan laporan pengeluaran otomatis.',
        ]"
            title="Software Pengelolaan Pengeluaran dan Operasional"
            description="Memfasilitasi pengelolaan pengeluaran perusahaan secara efisien dengan fokus pada strategi bisnis yang lebih besar untuk mengendalikan biaya dan keuangan perusahaan." />
    </x-wrapper.transparent>

    {{-- Prices --}}
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
                <x-card.item-product-price :src="asset('assets/images/products/pages/sign-price.png')" title="Software Manajemen Pajak Karyawan dan Bisnis" />
                <x-card.item-product-price :src="asset('assets/images/products/pages/sign-price.png')"
                    title="Software Manajemen Benefit dan Dukungan Finansial Karyawan" />
                <x-card.item-product-price :src="asset('assets/images/products/pages/sign-price.png')"
                    title="Software Pengelolaan Pengeluaran dan Operasional" />
            </div>
        </div>
    </x-wrapper.inverse-primary>

    {{-- Technology --}}
    <x-wrapper.transparent>
        <div class="flex xl:gap-12 lg:gap-8">
            <div class="flex flex-col justify-center lg:w-3/4 xl:w-1/2 lg:gap-8 xl:gap-12">
                <x-fonts.heading-one text="100+ Teknologi yang Kami Gunakan" />
                <x-fonts.paragraph
                    text="Perkembangan teknologi berkembang dengan cepat. Kami memastikan teknologi
                    yang kami gunakan dapat memenuhi kebutuhan digitalisasi bisnis Anda secara optimal." />
            </div>
            <div class="grid grid-cols-5 lg:gap-7 xl:gap-12 grow">
                <x-item-technology :src="asset('assets/icons/figma.png')" />
                <x-item-technology :src="asset('assets/icons/vue.png')" />
                <x-item-technology :src="asset('assets/icons/flutter.png')" />
                <x-item-technology :src="asset('assets/icons/python.png')" />
                <x-item-technology :src="asset('assets/icons/laravel.png')" />
                <x-item-technology :src="asset('assets/icons/react.png')" />
                <x-item-technology :src="asset('assets/icons/kotlin.png')" />
                <x-item-technology :src="asset('assets/icons/blender.png')" />
                <x-item-technology :src="asset('assets/icons/go.png')" />
                <x-item-technology :src="asset('assets/icons/msoffice.png')" />
            </div>
        </div>
    </x-wrapper.transparent>

    {{-- Contact Us --}}
    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    {{-- Bottom Breadcumb --}}
    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link link="Produk" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</x-app-layout>
