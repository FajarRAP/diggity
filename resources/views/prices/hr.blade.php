<x-price-detail-layout name="Software Manajemen Tenaga Kerja, HR, dan Payroll"
    title="Platform Bisnis Unggulan dalam Ekosistem yang Aman dan Terpercaya"
    description="Temukan platform bisnis terunggul yang menawarkan keamanan terbaik di dalam ekosistem yang dapat diandalkan dan terpercaya.">

    <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
        <x-card.item-product-pricing type="Starter"
            description="Paket Starter kami menyediakan sistem HR dasar dengan beragam fitur esensial untuk meningkatkan efisiensi dan menyederhanakan proses manajemen sumber daya manusia (SDM) dan bisnis Anda."
            :benefits="['Sistem Penggajian Terintegrasi', 'Kalkulasi Pajak Otomatis', 'Absensi Langsung Karyawan']" />
        <x-card.item-product-pricing type="Reguler"
            description="Paket Reguler kami menawarkan teknologi HR tingkat lanjut dengan berbagai fitur untuk meningkatkan produktivitas, fleksibilitas, dan optimalisasi operasional HR & bisnis Anda."
            :benefits="['Sistem Penggajian Mingguan', 'Manajemen Kerja Shift', 'Pengelolaan Multi Cabang']" />
        <x-card.item-product-pricing type="Pro"
            description="Paket Pro kami merupakan solusi terbaik untuk bisnis besar, dirancang untuk menangani kompleksitas operasional dan mendukung pengembangan serta strategi bisnis yang lebih matang."
            :benefits="[
                'Manajemen Pengeluaran Terpadu',
                'Perencanaan Tenaga Kerja Efisien',
                'Analisis Bisnis Mendalam',
            ]" />
    </div>

    <x-fonts.heading-two class="w-2/3 mx-auto text-center xl:pt-12 lg:pt-8"
        text="Platform Bisnis Unggulan dalam Ekosistem yang Aman dan Terpercaya" />
    <x-fonts.paragraph class="w-2/3 mx-auto text-center"
        text="Temukan platform bisnis terunggul yang menawarkan keamanan terbaik di dalam ekosistem yang dapat diandalkan dan terpercaya." />

    <x-slot:add-ons>
        <div class="container mx-auto xl:space-y-12 lg:space-y-8">
            <x-fonts.heading-two class="w-2/3 mx-auto text-center xl:pt-12 lg:pt-8" text="Pilihan Add-ons" />
            <x-fonts.paragraph class="w-2/3 mx-auto text-center"
                text="Kustomisasi paket harga Software Manajemen Tenaga Kerja, HR, dan Payroll Diggity dengan fitur tambahan yang sesuai dengan kebutuhan bisnis Anda." />
            <div x-data="{ show: 0 }" class="grid grid-cols-2 xl:gap-7 lg:gap-5">
                <x-card class="xl:space-y-6 lg:space-y-4 h-fit">
                    <x-card.item-product-add-ons-option x-bind:class="show == 0 ? '!bg-secondary' : '!bg-white'"
                        x-on:click="show = 0" />
                    <x-card.item-product-add-ons-option x-bind:class="show == 1 ? '!bg-secondary' : '!bg-white'"
                        x-on:click="show = 1" />
                </x-card>
                <x-card.item-product-add-ons num="0" x-show="show == 0" />
                <x-card.item-product-add-ons num="1" x-show="show == 1" />
            </div>
        </div>
    </x-slot:add-ons>

    <x-slot:faqs>
        <x-item-faq
            question="Apakah bisa mencoba software Manajemen Tenaga Kerja, HR, dan Payroll dari Diggity dengan gratis?"
            answer="Tentu saja. Anda dapat mengakses software Manajemen Tenaga Kerja, HR, dan Payroll dari Diggity selama 14 hari tanpa kontrak dan kartu kredit. Anda juga akan mendapatkan dukungan gratis untuk mengkonfigurasi akun Anda." />
        <x-item-faq question="Apa perbedaan antara paket Starter, Reguler, dan Pro?"
            answer="Paket Starter adalah sistem HRIS dasar dengan fitur esensial untuk menyederhanakan proses HR. Paket Reguler merupakan sistem HR tingkat lanjut dengan berbagai fitur untuk meningkatkan produktivitas. Paket Pro dirancang untuk bisnis dengan kebutuhan pengembangan strategis dan operasional yang kompleks." />
        <x-item-faq question="Apa itu fitur tambahan (add-on) dan bagaimana cara membelinya?"
            answer="Fitur tambahan adalah fitur ekstra yang dapat ditambahkan ke paket langganan Anda, baik secara individu atau dalam bundel. Saat ini, terdapat 3 bundel add-on yang tersedia, yaitu Rewarding and Recognizing, Strategic Planning, dan Insight and Connectivity." />
        <x-item-faq question="Bagaimana cara mengupgrade paket langganan atau menambahkan fitur tambahan?"
            answer='Jika Anda sudah berlangganan, Anda dapat mengupgrade paket langganan atau menambahkan fitur tambahan dengan menghubungi tim dukungan pelanggan kami atau melalui WhatsApp. Jika Anda calon klien, cukup tekan tombol "Hubungi Kami" untuk bantuan lebih lanjut.' />
        <x-item-faq question="Apakah ada periode uji coba gratis untuk paket langganan atau fitur tambahan?"
            answer="Kami menawarkan periode uji coba gratis untuk paket langganan kami. Untuk informasi lebih lanjut tentang periode uji coba dan ketersediaan uji coba untuk fitur tambahan, silakan hubungi tim dukungan kami." />
        <x-item-faq question="Bagaimana Diggity menjaga keamanan data pelanggan?"
            answer="Kami menggunakan teknologi enkripsi canggih dan praktek keamanan terbaik untuk melindungi data pelanggan kami. Selain itu, kami secara rutin mengaudit sistem kami dan bekerja dengan ahli keamanan eksternal untuk memastikan keamanan data yang optimal." />
        <x-item-faq question="Apakah Diggity mematuhi peraturan perlindungan data?"
            answer="Ya, kami mematuhi peraturan perlindungan data yang berlaku di berbagai yurisdiksi di Indonesia untuk menjaga privasi dan keamanan data pelanggan kami." />
        <x-item-faq
            question="Apakah ada dukungan pelanggan yang tersedia jika saya mengalami masalah atau memiliki pertanyaan tentang produk?"
            answer="Kami menyediakan dukungan pelanggan responsif dan efisien melalui 6 channel komunikasi, termasuk Email, Obrolan Langsung Web, Obrolan WhatsApp, Media Sosial (Instagram), Dukungan Telepon, dan channel khusus Premium*. Tim dukungan kami siap membantu Anda dengan pertanyaan atau masalah apa pun yang mungkin Anda temui." />
        <x-item-faq
            question="Apakah software Manajemen Tenaga Kerja, HR, dan Payroll dari Diggity mudah diintegrasikan dengan sistem yang sudah ada di perusahaan saya?"
            answer="Ya, software kami dirancang untuk mudah diintegrasikan dengan sistem yang sudah ada di perusahaan Anda. Kami menyediakan API dan dukungan teknis untuk membantu Anda mengintegrasikannya." />
        <x-item-faq
            question="Apakah ada pelatihan yang tersedia untuk membantu tim saya memahami dan menggunakan software secara efektif?"
            answer="Kami menyediakan pelatihan dan sumber daya pendidikan untuk membantu tim Anda memahami dan menggunakan software kami secara efektif melalui pelatihan online, webinar, dan panduan pengguna." />
    </x-slot:faqs>
</x-price-detail-layout>
