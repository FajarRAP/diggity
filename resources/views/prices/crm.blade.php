<x-price-detail-layout name="Software Omnichannel dan CRM"
    title="Platform Terintegrasi untuk Pemasaran, Penjualan, dan Layanan Pelanggan Bisnis Anda"
    description="Platform yang menyatukan semua aspek pemasaran, penjualan, dan layanan pelanggan bisnis Anda dalam satu solusi terpadu untuk meningkatkan efisiensi dan kinerja."
    :isInverse="true">

    <div x-data="{ active: 0 }">
        <x-buttons.container-toggle-button>
            <x-buttons.inner-toggle-button
                x-bind:class="active == 0 ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                x-on:click="active = 0" text="Omnichannel" />
            <x-buttons.inner-toggle-button
                x-bind:class="active == 1 ? 'bg-white text-gray-900' : 'bg-transparent text-white'"
                x-on:click="active = 1" text="CRM" />
        </x-buttons.container-toggle-button>

        <div class="grid grid-cols-3 xl:mt-24 lg:mt-16 xl:gap-7 lg:gap-5" x-show="active == 0">
            <x-card.item-product-pricing type="Starter"
                description="Paket ini Starter kami hemat biaya yang memungkinkan perusahaan baru berkembang meningkatkan penjualan melalui saluran omnichannel."
                info="Paket terjangkau untuk perusahaan kecil dan menengah." price="Rp 199,000" />
            <x-card.item-product-pricing type="Reguler"
                description="Paket Reguler kami menyajikan solusi komprehensif bagi perusahaan yang menginginkan peningkatan pengalaman pelanggan melalui berbagai saluran. Didesain dengan fitur dan layanan yang dapat disesuaikan dengan kebutuhan bisnis dan operasional Anda."
                info="Fitur dan layanan yang disesuaikan dengan kebutuhan bisnis dan operasional khusus."
                price="Rp 199,000" />
            <x-card.item-product-pricing type="Pro"
                description="Paket Pro kami merupakan solusi yang dapat berkembang seiring dengan kebutuhan perusahaan Anda, dirancang khusus untuk menyediakan sistem omnichannel yang lebih canggih dan komprehensif."
                info="Fitur dan layanan yang disesuaikan dengan kebutuhan bisnis dan operasional khusus, memberikan penyesuaian dan fleksibilitas dalam menghadapi tantangan bisnis yang semakin kompleks."
                price="Rp 199,000" />
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

        <div class="grid grid-cols-2 xl:mt-24 lg:mt-16 xl:gap-7 lg:gap-5" x-show="active == 1">
            <x-card.item-product-pricing type="Reguler"
                description="Platform yang dapat diandalkan dan scalable, cocok untuk perusahaan yang mulai membutuhkan sistem CRM untuk meningkatkan produktivitas."
                info="Paket terjangkau untuk perusahaan kecil dan menengah." price="Rp 199,000" />
            <x-card.item-product-pricing type="Pro"
                description="Platform CRM yang menyeluruh, dirancang untuk memenuhi kebutuhan perusahaan global dengan operasi yang kompleks."
                info="Fitur dan layanan disesuaikan dengan kebutuhan bisnis dan operasional yang kompleks."
                price="Rp 199,000" />
            @for ($i = 0; $i < 2; $i++)
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
                    <x-fonts.heading-four text="Tingkatkan Pengelolaan Bisnis Anda dengan Add-ons" />
                    <x-fonts.paragraph
                        text="Dapatkan keunggulan dalam mengelola penjualan, pemasaran, dan dukungan pelanggan dengan berbagai fitur tambahan dan layanan yang kami tawarkan." />
                    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="add ons image"
                        class="rounded-lg">
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
        <x-item-faq question="Apa yang Membedakan Software Omnichannel dan CRM Diggity dengan Solusi Lainnya?"
            answer="Software Omnichannel dan CRM dari Diggity menonjol dengan pendekatannya yang menggabungkan fitur-fitur CRM tradisional dengan Chatpanel yang tangguh, kemampuan Chatbot, dan integrasi cerdas. Pendekatan ini memungkinkan pengelolaan interaksi pelanggan yang lebih holistik dan otomatis." />
        <x-item-faq question="Apakah Saya Bisa Mencoba dengan Gratis Sebelum Membeli?"
            answer="Ya, kami menawarkan periode uji coba gratis sehingga Anda bisa merasakan kemampuan software Omnichannel dan CRM dari Diggity sebelum membuat keputusan. Daftar untuk uji coba gratis atau berkonsultasi gratis dengan tim kami." />
        <x-item-faq question="Adakah Biaya Pengaturan atau Biaya Tersembunyi?"
            answer="Tidak ada biaya tambahan tersembunyi atau biaya pengaturan terkait dengan paket harga standar kami. Anda hanya membayar untuk paket yang Anda pilih, dan kami percaya pada transparansi dalam biaya." />
        <x-item-faq question="Bisakah Saya Upgrade Paket Kapan Saja dan Bagaimana Caranya?"
            answer="Anda bisa melakukan upgrade paket kapan saja dengan menghubungi tim Support kami. Jika bisnis Anda memerlukan paket yang lebih besar, kami siap membantu Anda." />
        <x-item-faq question="Apakah Data dan Privasi Saya Aman di Diggity?"
            answer="Kami serius dalam mengelola keamanan data dan privasi pengguna. Diggity menggunakan protokol keamanan standar industri, enkripsi, dan kontrol akses untuk memastikan kerahasiaan dan integritas data Anda." />
        <x-item-faq
            question="Seberapa Mudah Mengintegrasikan Software Omnichannel dan CRM Diggity dengan Sistem Lainnya?"
            answer="Software Omnichannel dan CRM dari Diggity dirancang untuk integrasi yang mudah. Kami menyediakan dokumentasi dan dukungan untuk membantu Anda mengintegrasikan dengan berbagai sistem dan aplikasi, termasuk aplikasi kecerdasan buatan (AI) dan pemrosesan bahasa alami (NLP)." />
        <x-item-faq question="Bisakah Saya Mengakses Software Omnichannel dan CRM Diggity Melalui Perangkat Seluler?"
            answer="Ya, software Omnichannel dan CRM dari Diggity dapat diakses dari berbagai perangkat seluler, termasuk ponsel dan tablet, dengan antarmuka responsif untuk pengalaman yang mulus pada berbagai ukuran layar." />
    </x-slot:faqs>
</x-price-detail-layout>
