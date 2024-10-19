<x-price-detail-layout name="Software Manajemen Pajak Karyawan dan Bisnis"
    title="Solusi Pajak Online Terpadu untuk Entitas Bisnis"
    description="Temukan platform bisnis terunggul yang menawarkan keamanan terbaik di dalam ekosistem yang dapat diandalkan dan terpercaya.">

    <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
        <x-card.item-product-pricing type="Starter"
            description="Cocok untuk bisnis yang sedang berkembang dan memerlukan manajemen pajak yang efektif."
            price="Rp 199,000" :benefits="['Pencatatan Keuangan Digital', 'Otomasi Operasional Keuangan', 'Manajemen Inventori Sederhana']" :varians="2" />
        <x-card.item-product-pricing type="Reguler"
            description="Dirancang untuk bisnis dengan aktivitas pajak badan yang tinggi setiap bulannya."
            price="Rp 809,100" :benefits="['Transaksi Multinasional Fleksibel', 'Pengelolaan Gudang Efisien', 'Manajemen Produk Kompleks']" :varians="2" />
        <x-card.item-product-pricing type="Pro"
            description="Ideal untuk bisnis dengan volume transaksi pajak yang tinggi dan membutuhkan otomasi."
            price="Rp 2,699,100" :benefits="['Pencatatan Keuangan Digital', 'Otomasi Operasional Keuangan', 'Manajemen Inventori Sederhana']" :varians="2" />
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

    <x-slot:add-ons>
        <div class="xl:space-y-12 lg:space-y-8">
            <x-fonts.heading-two class="text-center xl:pt-24 lg:pt-16" text="Pilihan Add-ons" />
            <x-fonts.paragraph class="w-2/3 mx-auto text-center"
                text="Kustomisasi paket harga Software Manajemen Tenaga Kerja, HR, dan Payroll Diggity dengan fitur tambahan yang sesuai dengan kebutuhan bisnis Anda." />
            <div class="grid grid-cols-2 mx-auto xl:gap-36 lg:gap-24 bg-secondary xl:p-24 lg:p-16">
                <div class="xl:space-y-6 lg:space-y-4">
                    <x-fonts.heading-four
                        text="Tingkatkan Efisiensi Administrasi dengan Add-ons Software Tanda Tangan dan Materai Online Diggity" />
                    <x-fonts.paragraph
                        text="Dapatkan fitur tambahan dan kuota tambahan untuk meningkatkan efisiensi proses administratif bisnis Anda dengan menggunakan add-ons dari Software Tanda Tangan dan Materai Online Diggity." />
                    <x-button text="Hubungi Kami" />
                </div>
                <div class="xl:space-y-6 lg:space-y-4">
                    @for ($i = 0; $i < 5; $i++)
                        <x-card class="xl:space-y-6 lg:space-y-4" x-data="{ expand: false }">
                            <div class="flex items-center justify-between border-b lg:pb-2 xl:pb-3 hover:cursor-pointer"
                                x-on:click="expand = !expand">
                                <x-fonts.paragraph text="Lorem ipsum dolor sit amet, consectetur adipiscing elit." />
                                <x-svgs.arrow class="transition xl:size-7 lg:size-5"
                                    x-bind:class="expand ? 'rotate-90' : '-rotate-90'" />
                            </div>
                            <div class="xl:space-y-6 lg:space-y-4" x-show="expand">
                                <x-fonts.paragraph
                                    text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
                                <div class="inline-flex items-center gap-2">
                                    <x-fonts.paragraph text="Mulai dari" />
                                    <x-fonts.heading-four class="text-accent" text="Rp 199,000" />
                                    <x-fonts.paragraph text="/bulan" />
                                </div>
                                <x-check-circle benefit="Header Title" />
                                <x-check-circle benefit="Header Title" />
                                <x-check-circle benefit="Header Title" />
                                <div class="border-t xl:pt-3 lg:pt-2">
                                    <x-button text="Hubungi Kami" />
                                </div>
                            </div>
                        </x-card>
                    @endfor
                </div>
            </div>
        </div>
    </x-slot:add-ons>

    <x-slot:faqs>
        <x-item-faq question="Bagaimana cara berlangganan software Manajemen Pajak Karyawan dan Bisnis Diggity?"
            answer="Anda dapat berlangganan melalui laman harga, pilih paket yang sesuai, dan hubungi tim sales kami melalui whatsapp atau form hubungi sales. Live chat juga tersedia untuk informasi lebih lanjut." />
        <x-item-faq
            question="Bagaimana cara meminta sales order / pembayaran untuk berlangganan di software Manajemen Pajak Karyawan dan Bisnis Diggity?"
            answer='Hubungi tim sales kami dengan menekan tombol "Hubungi Kami" atau menggunakan live chat support kami.' />
        <x-item-faq
            question="Bagaimana proses perhitungan kuota & billing aktivasi di e-Faktur / e-Bupot Unifikasi software Manajemen Pajak Karyawan dan Bisnis Diggity?"
            answer="Kuota terhitung dari awal hingga akhir bulan saat diaktifkan. Sebagai contoh, jika kuota diaktifkan pada tanggal 10 Oktober 2020, maka kuota untuk bulan Oktober akan langsung aktif." />
        <x-item-faq question="Apakah tersedia tim support?"
            answer="Ya, kami menyediakan layanan support melalui live chat di website maupun aplikasi kami." />
        <x-item-faq
            question="Apakah ada training untuk penggunaan awal software Manajemen Pajak Karyawan dan Bisnis Diggity yang gratis?"
            answer="Kami menyelenggarakan training online gratis untuk penggunaan software Manajemen Pajak Karyawan dan Bisnis Diggity, seperti e-Faktur, e-Bupot Unifikasi, e-Billing, dan e-Filling." />
    </x-slot:faqs>
</x-price-detail-layout>
