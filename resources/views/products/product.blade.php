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
        <x-heading-two class="w-1/2 mx-auto text-center">
            Optimalkan Kesempatan Bisnis Anda Dengan
            Teknologi Cloud-Based.
        </x-heading-two>
        <x-item-product :src="asset('assets/images/products/pages/hr.jpg')" :href="route('product-hr')" :benefits="[
            'Platform HR berbasis cloud yang fleksibel, tanpa biaya implementasi dan pemeliharaan.',
            'Database HR yang aman, terintegrasi dengan berbagai modul manajemen.',
            'Skalabilitas tinggi, mudah dikonfigurasi, dan dapat disesuaikan dengan budaya serta kebijakan perusahaan.',
            'Otomatisasi proses HR untuk memperlancar operasional harian perusahaan.',
            'Integrasi strategis yang beragam untuk analisis, perencanaan, dan pengambilan keputusan HR yang lebih efektif.',
        ]">
            <x-slot:title>
                Software Manajemen Tenaga Kerja, HR, dan Payroll
            </x-slot:title>
            <x-slot:description>
                Kami menyediakan satu solusi lengkap untuk kebutuhan Anda dalam manajemen tenaga kerja, serta
                operasional dan strategis HR guna meningkatkan efisiensi bisnis Anda.
            </x-slot:description>
        </x-item-product>
        <x-item-product :reversed="true" :src="asset('assets/images/products/pages/crm.jpg')" :href="route('p-crm')" :benefits="[
            'Sistem CRM & omnichannel berbasis cloud yang fleksibel, tanpa biaya implementasi dan pemeliharaan.',
            'Pipeline data penjualan dan pelanggan yang aman, terintegrasi dengan berbagai modul manajemen.',
            'Pipeline data penjualan dan pelanggan yang aman, terintegrasi dengan berbagai modul manajemen.',
            'Dukungan teknologi AI & Bot otomatis untuk meningkatkan efisiensi operasional.',
            'Berbagai modul integrasi strategis untuk analisis, perencanaan, dan pengambilan keputusan.',
        ]">
            <x-slot:title>
                Software Omnichannel dan CRM
            </x-slot:title>
            <x-slot:description>
                Kami menyediakan satu solusi lengkap untuk kebutuhan manajemen prospek dan layanan pelanggan, memperluas
                dan menginnovasi bidang penjualan, pemasaran, dan layanan pelanggan Anda.
            </x-slot:description>
        </x-item-product>
        <x-item-product :src="asset('assets/images/products/pages/accountant.jpg')" :href="route('p-accountant')" :benefits="[
            'Pembukuan yang terbantu oleh automasi.',
            'Rekonsiliasi bank yang lebih mudah melalui integrasi.',
            'Pengelolaan inventaris dan stok barang yang komprehensif.',
            'Otomatisasi proses HR untuk memperlancar operasional harian perusahaan.',
            'Analisis performa dengan laporan real-time.',
        ]">
            <x-slot:title>
                Software Akuntansi Online
            </x-slot:title>
            <x-slot:description>
                Mengatasi risiko kesalahan pencatatan dan memastikan data yang dapat diakses dengan mudah di berbagai
                lokasi.
            </x-slot:description>
        </x-item-product>
        <x-item-product :reversed="true" :src="asset('assets/images/products/pages/sign.jpg')" :href="route('p-sign')" :benefits="[
            'Tanda tangan elektronik yang sah di indonesia dan global.',
            'Meterai elektronik resmi peruri yang dapat digunakan kapan saja.',
            'Pengiriman dan penandatanganan dokumen secara massal.',
            'Pemantauan status dokumen secara real-time.',
            'Penjadwalan kontrak otomatis dengan pengingat masa kontrak.',
        ]">
            <x-slot:title>
                Software Tanda Tangan dan Materai Online
            </x-slot:title>
            <x-slot:description>
                Mengurangi waktu dan biaya administrasi dokumen digital dengan fitur eSignature dan eMeterai yang aman
                serta sah secara hukum.
            </x-slot:description>
        </x-item-product>
        <x-item-product :src="asset('assets/images/products/pages/accountant.jpg')" :href="route('p-tax')" :benefits="[
            'Pembayaran dan pelaporan pajak dapat dilakukan secara online dengan aman.',
            'Anda akan menerima bukti pelaporan pajak yang sah dan resmi.',
            'Riwayat pelaporan pajak tersimpan dengan rapi untuk referensi Anda.',
            'Menjamin kepatuhan dengan peraturan perpajakan yang berlaku.',
        ]">
            <x-slot:title>
                Software Manajemen Pajak Karyawan dan Bisnis
            </x-slot:title>
            <x-slot:description>
                Kami menawarkan solusi perangkat lunak yang aman dan andal untuk memenuhi kebutuhan perpajakan bisnis
                Anda, yang juga merupakan mitra resmi dari Direktorat Jenderal Pajak (DJP).
            </x-slot:description>
        </x-item-product>
        <x-item-product :reversed="true" :src="asset('assets/images/products/pages/sign.jpg')" :href="route('p-benefit-management')" :benefits="[
            'Administrasi benefit yang sesuai dengan anggaran perusahaan.',
            'Opsi akses gaji lebih cepat tersedia.',
            'Katalog vendor yang lengkap dan terpilih.',
            'Menjaga kepuasan dan retensi karyawan.',
        ]">
            <x-slot:title>
                Software Manajemen Benefit dan Dukungan Finansial Karyawan
            </x-slot:title>
            <x-slot:description>
                Meningkatkan kesejahteraan dan keterlibatan karyawan dengan program benefit yang dapat disesuaikan
                dengan kebutuhan individu.
            </x-slot:description>
        </x-item-product>
        <x-item-product :src="asset('assets/images/products/pages/accountant.jpg')" :href="route('p-expense')" :benefits="[
            'Kemudahan dalam pengajuan dan persetujuan reimbursement melalui aplikasi',
            'Notifikasi dan fitur persetujuan untuk memudahkan tim keuangan.',
            'Pencairan dana sesuai dengan jadwal yang telah ditentukan.',
            'Rekapan dan integrasi langsung dengan laporan pengeluaran otomatis.',
        ]">
            <x-slot:title>
                Software Pengelolaan Pengeluaran dan Operasional
            </x-slot:title>
            <x-slot:description>
                Memfasilitasi pengelolaan pengeluaran perusahaan secara efisien dengan fokus pada strategi bisnis yang
                lebih besar untuk mengendalikan biaya dan keuangan perusahaan.
            </x-slot:description>
        </x-item-product>
    </x-wrapper>

    {{-- Prices --}}
    <x-wrapper bg="bg-secondary" class="text-center">
        <x-heading-two>Harga Produk</x-heading-two>
        <p class="paragraph">Telusuri berbagai pilihan paket harga yang cocok dengan kebutuhan bisnis Anda.</p>
        <div class="flex text-left xl:gap-24 lg:gap-12">
            <x-heading-two class="w-2/3 my-auto">
                Dengan klik masing-masing pilihan produk, Anda akan diarahkan ke halaman harga
                terpisah tiap produk.
            </x-heading-two>
            <div class="grid grid-cols-2 xl:gap-x-7 lg:gap-x-4 xl:gap-y-12 lg:gap-y-8">
                <x-item-price-card :src="asset('assets/images/products/pages/hr-price.png')">
                    <x-slot:title>
                        Software Manajemen Tenaga Kerja, HR, dan Payroll
                    </x-slot:title>
                </x-item-price-card>
                <x-item-price-card :src="asset('assets/images/products/pages/crm-price.png')">
                    <x-slot:title>
                        Software Omnichannel dan CRM
                    </x-slot:title>
                </x-item-price-card>
                <x-item-price-card :src="asset('assets/images/products/pages/accountant-price.png')">
                    <x-slot:title>
                        Software Akuntansi Online
                    </x-slot:title>
                </x-item-price-card>
                <x-item-price-card :src="asset('assets/images/products/pages/sign-price.png')">
                    <x-slot:title>
                        Software Tanda Tangan dan Materai Online
                    </x-slot:title>
                </x-item-price-card>
                <x-item-price-card :src="asset('assets/images/products/pages/sign-price.png')">
                    <x-slot:title>
                        Software Manajemen Pajak Karyawan dan Bisnis
                    </x-slot:title>
                </x-item-price-card>
                <x-item-price-card :src="asset('assets/images/products/pages/sign-price.png')">
                    <x-slot:title>
                        Software Manajemen Benefit dan Dukungan Finansial Karyawan
                    </x-slot:title>
                </x-item-price-card>
                <x-item-price-card :src="asset('assets/images/products/pages/sign-price.png')">
                    <x-slot:title>
                        Software Pengelolaan Pengeluaran dan Operasional
                    </x-slot:title>
                </x-item-price-card>
            </div>
        </div>
    </x-wrapper>

    {{-- Technology --}}
    <x-wrapper>
        <div class="flex xl:gap-12 lg:gap-8">
            <div class="flex flex-col justify-center lg:w-3/4 xl:w-1/2 lg:gap-8 xl:gap-12">
                <x-heading-one>100+ <br> Teknologi yang Kami Gunakan</x-heading-one>
                <x-paragraph>
                    Perkembangan teknologi berkembang dengan cepat. Kami memastikan teknologi
                    yang kami gunakan dapat memenuhi kebutuhan digitalisasi bisnis Anda secara optimal.
                </x-paragraph>
            </div>
            <div class="grid grid-cols-5 lg:gap-8 xl:gap-12 grow">
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
