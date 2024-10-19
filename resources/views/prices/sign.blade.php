<x-price-detail-layout name="Software Tanda Tangan dan Materai Online"
    title="Temukan Solusi Penandatanganan Bisnis yang Tepat"
    description="Temukan solusi yang cocok untuk kebutuhan penandatanganan bisnis Anda dengan lebih tepat dan efisien.">

    <div x-data="{ active: 0 }">
        <x-buttons.container-toggle-button>
            <x-buttons.inner-toggle-button
                x-bind:class="active == 0 ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                x-on:click="active = 0" text="Per Tahun" />
            <x-buttons.inner-toggle-button
                x-bind:class="active == 1 ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                x-on:click="active = 1" text="Per 6 Bulan" />
        </x-buttons.container-toggle-button>

        <div class="grid grid-cols-3 xl:mt-24 lg:mt-16 xl:gap-7 lg:gap-5" x-show="active == 0">
            <x-card.item-product-pricing type="Starter"
                description="Cocok untuk bisnis baru atau yang sedang berkembang." price="Rp 199,000" :benefits="[
                    'Pencatatan Keuangan Digital',
                    'Otomasi Operasional Keuangan',
                    'Manajemen Inventori Sederhana',
                ]"
                :varians="2" />
            <x-card.item-product-pricing type="Reguler" description="Solusi untuk mendukung pertumbuhan bisnis."
                price="Rp 809,100" :benefits="[
                    'Transaksi Multinasional Fleksibel',
                    'Pengelolaan Gudang Efisien',
                    'Manajemen Produk Kompleks',
                ]" :varians="2" />
            <x-card.item-product-pricing type="Pro"
                description="Capai operasional optimal dan dapatkan insight keuangan berharga dengan Paket Pro dari kami."
                price="Rp 2,699,100" :benefits="[
                    'Pencatatan Keuangan Digital',
                    'Otomasi Operasional Keuangan',
                    'Manajemen Inventori Sederhana',
                ]" :varians="2" />
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
        <x-item-faq
            question="Apakah ada syarat minimum jumlah karyawan untuk menggunakan software Tanda Tangan dan Materai Online Diggity?"
            answer="Software Tanda Tangan dan Materai Online Diggity dapat digunakan oleh bisnis dari berbagai skala, tidak ada batasan minimum karyawan yang diperlukan." />
        <x-item-faq question="Apa fitur utama yang disediakan oleh software Tanda Tangan dan Materai Online Diggity?"
            answer="Software Tanda Tangan dan Materai Online Diggity menyediakan berbagai fitur unggulan seperti tanda tangan elektronik, e-Meterai, kontrak elektronik, dan jejak audit." />
        <x-item-faq
            question="Apakah pendaftaran diperlukan untuk menggunakan software Tanda Tangan dan Materai Online Diggity?"
            answer="Anda bisa mulai menggunakan fitur software Tanda Tangan dan Materai Online Diggity dengan mendaftar untuk Coba Gratis. Tidak ada keharusan pendaftaran untuk memanfaatkan layanan tersebut." />
        <x-item-faq
            question="Apakah ada persyaratan jumlah pengguna minimum untuk menggunakan software Tanda Tangan dan Materai Online Diggity?"
            answer="Tidak ada batasan jumlah pengguna yang dibutuhkan untuk menggunakan software Tanda Tangan dan Materai Online Diggity. Anda dapat memilih paket yang sesuai dengan kebutuhan bisnis Anda." />
    </x-slot:faqs>
</x-price-detail-layout>
