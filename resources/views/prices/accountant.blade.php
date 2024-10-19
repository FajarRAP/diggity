<x-price-detail-layout name="Software Akuntansi Online"
    title="Temukan Solusi Akuntansi Online yang Cocok untuk Bisnis Anda"
    description="Dapatkan solusi akuntansi online yang sesuai dengan kebutuhan bisnis Anda, lengkap dengan pelatihan gratis tanpa biaya tambahan.">

    <div x-data="{ active: 0 }">
        <x-buttons.container-toggle-button>
            <x-buttons.inner-toggle-button
                x-bind:class="active == 0 ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                x-on:click="active = 0" text="Per Tahun" />
            <x-buttons.inner-toggle-button
                x-bind:class="active == 1 ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                x-on:click="active = 1" text="Per Quarter" />
        </x-buttons.container-toggle-button>

        <div class="grid grid-cols-3 xl:mt-24 lg:mt-16 xl:gap-7 lg:gap-5" x-show="active == 0">
            <x-card.item-product-pricing type="Starter"
                description="Dapatkan kontrol yang lebih besar atas keuangan bisnis Anda dengan solusi manajemen keuangan digital kami. Paket ini dirancang untuk meningkatkan visibilitas keuangan Anda dan memberikan efisiensi operasional yang lebih tinggi."
                price="Rp 199,000" :benefits="[
                    'Pencatatan Keuangan Digital',
                    'Otomasi Operasional Keuangan',
                    'Manajemen Inventori Sederhana',
                ]" :varians="1" />
            <x-card.item-product-pricing type="Reguler"
                description="Optimalkan profitabilitas bisnis Anda dengan mengelola operasional yang kompleks dengan mudah. Paket Reguler kami dirancang khusus untuk membantu bisnis Anda mencapai efisiensi yang lebih tinggi dan meningkatkan produktivitas."
                price="Rp 809,100" :benefits="[
                    'Transaksi Multinasional Fleksibel',
                    'Pengelolaan Gudang Efisien',
                    'Manajemen Produk Kompleks',
                ]" :varians="1" />
            <x-card.item-product-pricing type="Pro"
                description="Capai operasional optimal dan dapatkan insight keuangan berharga dengan Paket Pro dari kami."
                price="Rp 2,699,100" :benefits="[
                    'Pencatatan Keuangan Digital',
                    'Otomasi Operasional Keuangan',
                    'Manajemen Inventori Sederhana',
                ]" :varians="1" />
            @for ($i = 0; $i < 3; $i++)
                <x-card class="!p-0 h-fit" x-data="{ active: false }">
                    <x-card class="!bg-shadow-card-secondary flex justify-between hover:cursor-pointer"
                        x-on:click="active = !active">
                        <x-fonts.paragraph class="font-semibold" text="Anda Akan Memperoleh" />
                        <x-svgs.arrow class="transition xl:size-7 lg:size-5"
                            x-bind:class="active ? 'rotate-90' : '-rotate-90'" />
                    </x-card>
                    <div class="xl:mx-7 lg:mx-5 xl:my-12 lg:my-8 xl:space-y-12 lg:space-y-8" x-show="active">
                        <div class="xl:space-y-6 lg:space-y-4">
                            <x-fonts.heading-two text="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                        </div>
                        <div class="xl:space-y-6 lg:space-y-4">
                            <x-fonts.heading-two text="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                        </div>
                        <div class="xl:space-y-6 lg:space-y-4">
                            <x-fonts.heading-two text="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                            <x-check-circle benefit="Lorem Ipsum" />
                        </div>
                    </div>
                </x-card>
            @endfor
        </div>
    </div>

    <x-slot:add-ons>
        <div class="container mx-auto xl:space-y-12 lg:space-y-8">
            <x-fonts.heading-two class="text-center xl:pt-24 lg:pt-16" text="Pilihan Add-ons" />
            <x-fonts.paragraph class="w-2/3 mx-auto text-center"
                text="Kustomisasi paket harga Software Manajemen Tenaga Kerja, HR, dan Payroll Diggity dengan fitur tambahan yang sesuai dengan kebutuhan bisnis Anda." />

            <div class="grid grid-cols-2 xl:gap-x-7 lg:gap-x-5 xl:gap-y-12 lg:gap-y-8">
                @for ($i = 0; $i < 4; $i++)
                    <x-card class="xl:space-y-6 lg:space-y-4">
                        <div class="flex justify-between border-b xl:pb-3 lg:pb-2">
                            <x-fonts.heading-three text="Pilihan Add Ons" />
                            <x-svgs.arrow class="xl:size-7 lg:size-5" />
                        </div>
                        <x-fonts.paragraph text="Optimalkan produksi Anda dengan integrasi akuntansi yang canggih." />
                        <x-fonts.paragraph text="Rp1.599.200/bulan (diskon 20% dari Rp1.999.000)" />
                    </x-card>
                @endfor
            </div>
        </div>
    </x-slot:add-ons>

    <x-slot:faqs>
        <x-item-faq question="Bagaimana Cara Berlangganan Software Akuntansi Online Diggity?"
            answer="Anda bisa memilih paket software yang sesuai dengan kebutuhan bisnis Anda dan berlangganan melalui pendaftaran akun baru. Hubungi tim penjualan kami atau gunakan live chat untuk informasi lebih lanjut tentang proses berlangganan." />
        <x-item-faq question="Apa yang Terjadi Ketika Masa Uji Coba Software Akuntansi Online Diggity Saya Berakhir?"
            answer="Kami akan mengingatkan Anda sebelum masa uji coba berakhir dan membimbing Anda untuk memilih dan melakukan pembayaran paket langganan yang Anda inginkan. Jika Anda memutuskan untuk tidak melanjutkan berlangganan, data Anda akan tetap aman di sistem kami." />
        <x-item-faq question="Apa yang Diperlukan untuk Memulai Menggunakan Software Akuntansi Online Diggity?"
            answer="Anda hanya memerlukan perangkat komputer atau mobile yang terhubung ke internet dan memiliki browser. Pastikan koneksi internet Anda stabil untuk pengalaman penggunaan yang optimal." />
        <x-item-faq question="Apa Paket yang Tersedia di Software Akuntansi Online Diggity?"
            answer="Diggity menyediakan berbagai paket langganan yang disesuaikan dengan kebutuhan bisnis, mulai dari versi Pro untuk bisnis mikro hingga paket Enterprise dan Enterprise+ untuk perusahaan berskala medium hingga besar." />
        <x-item-faq question="Apakah Harga Sudah Termasuk Pajak?"
            answer="Ya, harga paket software Akuntansi Online dari Diggity sudah termasuk PPN." />
        <x-item-faq question="Bagaimana Metode Pembayarannya?"
            answer="Anda dapat melakukan pembayaran melalui transfer bank, kartu kredit, atau menggunakan layanan cicilan bank melalui tokopedia." />
        <x-item-faq question="Apakah Ada Penalti Jika Saya Memutus Kontrak di Tengah Jalan?"
            answer="Tidak ada penalti dalam bentuk biaya tambahan, tetapi pembayaran yang sudah dilakukan tidak dapat dikembalikan." />
    </x-slot:faqs>
</x-price-detail-layout>
