<x-app-layout>
    {{-- Top Breadcumb & Header --}}
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link>
                Produk
            </x-breadcumb-link>
        </x-breadcumb>

        <x-carousel carouselNum="1" />
    </x-wrapper>

    {{-- Body --}}
    <x-wrapper spaces="lg:space-y-12 xl:space-y-24">
        <h2 class="w-1/2 mx-auto text-center heading-two">
            Optimalkan Kesempatan Bisnis Anda Dengan
            Teknologi Cloud-Based.
        </h2>
        <x-item-product class="gap-4" title="Software Manajemen Tenaga Kerja, HR, dan Payroll"
            description="Kami menyediakan satu solusi lengkap untuk kebutuhan Anda dalam manajemen tenaga kerja, serta operasional dan strategis HR guna meningkatkan efisiensi bisnis Anda."
            :src="asset('asset/images/products/pages/hr.jpg')" :href="route('p-hr')" :benefits="[
                'Platform HR berbasis cloud yang fleksibel, tanpa biaya implementasi dan pemeliharaan.',
                'Database HR yang aman, terintegrasi dengan berbagai modul manajemen.',
                'Skalabilitas tinggi, mudah dikonfigurasi, dan dapat disesuaikan dengan budaya serta kebijakan perusahaan.',
                'Otomatisasi proses HR untuk memperlancar operasional harian perusahaan.',
                'Integrasi strategis yang beragam untuk analisis, perencanaan, dan pengambilan keputusan HR yang lebih efektif.',
            ]" />
        <x-item-product reversed class="gap-4" title="Software Omnichannel dan CRM"
            description="Kami menyediakan satu solusi lengkap untuk kebutuhan manajemen prospek dan layanan pelanggan, memperluas dan menginnovasi bidang penjualan, pemasaran, dan layanan pelanggan Anda."
            :src="asset('asset/images/products/pages/crm.jpg')" :href="route('p-crm')" :benefits="[
                'Sistem CRM & omnichannel berbasis cloud yang fleksibel, tanpa biaya implementasi dan pemeliharaan.',
                'Pipeline data penjualan dan pelanggan yang aman, terintegrasi dengan berbagai modul manajemen.',
                'Pipeline data penjualan dan pelanggan yang aman, terintegrasi dengan berbagai modul manajemen.',
                'Dukungan teknologi AI & Bot otomatis untuk meningkatkan efisiensi operasional.',
                'Berbagai modul integrasi strategis untuk analisis, perencanaan, dan pengambilan keputusan.',
            ]" />
        <x-item-product class="gap-4" title="Software Akuntansi Online"
            description="Mengatasi risiko kesalahan pencatatan dan memastikan data yang dapat diakses dengan mudah di berbagai lokasi."
            :src="asset('asset/images/products/pages/accountant.jpg')" :href="route('p-accountant')" :benefits="[
                'Pembukuan yang terbantu oleh automasi.',
                'Rekonsiliasi bank yang lebih mudah melalui integrasi.',
                'Pengelolaan inventaris dan stok barang yang komprehensif.',
                'Otomatisasi proses HR untuk memperlancar operasional harian perusahaan.',
                'Analisis performa dengan laporan real-time.',
            ]" />
        {{-- <x-item-product reversed class="gap-4" title="Software Tanda Tangan dan Materai Online"
            description="Mengurangi waktu dan biaya administrasi dokumen digital dengan fitur eSignature dan eMeterai yang aman serta sah secara hukum."
            :src="asset('asset/images/products/pages/sign.jpg')" :benefits="[
                'Tanda tangan elektronik yang sah di indonesia dan global.',
                'Meterai elektronik resmi peruri yang dapat digunakan kapan saja.',
                'Pengiriman dan penandatanganan dokumen secara massal.',
                'Pemantauan status dokumen secara real-time.',
                'Penjadwalan kontrak otomatis dengan pengingat masa kontrak.',
            ]" />
        <x-item-product class="gap-4" title="Software Manajemen Pajak Karyawan dan Bisnis"
            description="Kami menawarkan solusi perangkat lunak yang aman dan andal untuk memenuhi kebutuhan perpajakan bisnis Anda, yang juga merupakan mitra resmi dari Direktorat Jenderal Pajak (DJP)."
            :src="asset('asset/images/products/pages/accountant.jpg')" :benefits="[
                'Pembayaran dan pelaporan pajak dapat dilakukan secara online dengan aman.',
                'Anda akan menerima bukti pelaporan pajak yang sah dan resmi.',
                'Riwayat pelaporan pajak tersimpan dengan rapi untuk referensi Anda.',
                'Menjamin kepatuhan dengan peraturan perpajakan yang berlaku.',
            ]" />
        <x-item-product reversed class="gap-4" title="Software Manajemen Benefit dan Dukungan Finansial Karyawan"
            description="Meningkatkan kesejahteraan dan keterlibatan karyawan dengan program benefit yang dapat disesuaikan dengan kebutuhan individu."
            :src="asset('asset/images/products/pages/sign.jpg')" :benefits="[
                'Administrasi benefit yang sesuai dengan anggaran perusahaan.',
                'Opsi akses gaji lebih cepat tersedia.',
                'Katalog vendor yang lengkap dan terpilih.',
                'Menjaga kepuasan dan retensi karyawan.',
            ]" />
        <x-item-product class="gap-4" title="Software Pengelolaan Pengeluaran dan Operasional"
            description="Memfasilitasi pengelolaan pengeluaran perusahaan secara efisien dengan fokus pada strategi bisnis yang lebih besar untuk mengendalikan biaya dan keuangan perusahaan."
            :src="asset('asset/images/products/pages/accountant.jpg')" :benefits="[
                'Kemudahan dalam pengajuan dan persetujuan reimbursement melalui aplikasi',
                'Notifikasi dan fitur persetujuan untuk memudahkan tim keuangan.',
                'Pencairan dana sesuai dengan jadwal yang telah ditentukan.',
                'Rekapan dan integrasi langsung dengan laporan pengeluaran otomatis.',
            ]" /> --}}
    </x-wrapper>

    {{-- Prices --}}
    <x-wrapper bg="bg-secondary" class="text-center">
        <h2 class="heading-two">Harga Produk</h2>
        <p class="paragraph">Telusuri berbagai pilihan paket harga yang cocok dengan kebutuhan bisnis Anda.</p>
        <div class="flex text-left xl:gap-24 lg:gap-12">
            <h2 class="my-auto xl:w-2/3 heading-two">
                Dengan klik masing-masing pilihan produk, Anda akan diarahkan ke halaman harga
                terpisah tiap produk.</h2>
            <div class="grid grid-cols-2 xl:gap-x-7 lg:gap-x-3.5 xl:gap-y-12 lg:gap-y-8">
                <x-item-price-card :src="asset('asset/images/products/pages/hr-price.png')" title="Software Manajemen Tenaga Kerja, HR, dan Payroll" />
                <x-item-price-card :src="asset('asset/images/products/pages/crm-price.png')" title="Software Omnichannel dan CRM" />
                <x-item-price-card :src="asset('asset/images/products/pages/accountant-price.png')" title="Software Akuntansi Online" />
                <x-item-price-card :src="asset('asset/images/products/pages/sign-price.png')" title="Software Tanda Tangan dan Materai Online" />
                <x-item-price-card :src="asset('asset/images/products/pages/sign-price.png')" title="Software Manajemen Pajak Karyawan dan Bisnis" />
                <x-item-price-card :src="asset('asset/images/products/pages/sign-price.png')"
                    title="Software Manajemen Benefit dan Dukungan Finansial Karyawan" />
                <x-item-price-card :src="asset('asset/images/products/pages/sign-price.png')" title="Software Pengelolaan Pengeluaran dan Operasional" />
            </div>
        </div>
    </x-wrapper>

    {{-- Technology --}}
    <x-wrapper>
        <div class="flex xl:gap-12 lg:gap-8">
            <div class="flex flex-col justify-center lg:w-3/4 xl:w-1/2 lg:gap-8 xl:gap-12">
                <h1 class="heading-one">100+ <br> Teknologi yang Kami Gunakan</h1>
                <p class="paragraph">
                    Perkembangan teknologi berkembang dengan cepat. Kami memastikan teknologi
                    yang kami gunakan dapat memenuhi kebutuhan digitalisasi bisnis Anda secara optimal.
                </p>
            </div>
            <div class="grid grid-cols-5 lg:gap-8 xl:gap-12 grow">
                <x-item-technology :src="asset('asset/icons/figma.png')" />
                <x-item-technology :src="asset('asset/icons/vue.png')" />
                <x-item-technology :src="asset('asset/icons/flutter.png')" />
                <x-item-technology :src="asset('asset/icons/python.png')" />
                <x-item-technology :src="asset('asset/icons/laravel.png')" />
                <x-item-technology :src="asset('asset/icons/react.png')" />
                <x-item-technology :src="asset('asset/icons/kotlin.png')" />
                <x-item-technology :src="asset('asset/icons/blender.png')" />
                <x-item-technology :src="asset('asset/icons/go.png')" />
                <x-item-technology :src="asset('asset/icons/msoffice.png')" />
            </div>
        </div>
    </x-wrapper>

    {{-- Contact Us --}}
    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    {{-- Bottom Breadcumb --}}
    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link>Produk</x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    {{-- Footer --}}
    <x-footer />
</x-app-layout>
