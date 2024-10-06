<x-service-detail-layout>
    <x-slot:name>
        Digital Marketing
    </x-slot:name>

    <x-slot:description>
        Mendukung beragam jenis bisnis Anda, mulai dari skala kecil seperti bisnis rumahan dan UMKM, hingga bisnis
        rintisan (startup) dan perusahaan besar, dalam menerapkan strategi pemasaran digital yang efektif.
    </x-slot:description>

    <x-slot:firstServiceSolutions>
        <x-service-solution-card :src="asset('assets/images/services/digital-marketing/creative.png')" :header="true">
            <x-slot:title>Creative Content Studio</x-slot:title>
            <x-slot:description>
                Temukan solusi kreatif dan berkualitas tinggi untuk mencapai tujuan Anda di Creative Content
                Studio.
            </x-slot:description>
        </x-service-solution-card>
        <div class="grid grid-cols-2 xl:gap-12 lg:gap-8">
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/product-photo.jpg')">
                <x-slot:title>Product Photography</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/live.jpg')">
                <x-slot:title>Online Shop Live Studio</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/graphic-design.jpg')">
                <x-slot:title>Graphic Design</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/commercial.jpg')">
                <x-slot:title>Video Commercial</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/social-media.jpg')">
                <x-slot:title>Video Social Media</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/animation.jpg')">
                <x-slot:title>Video Animasi</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/article.jpg')">
                <x-slot:title>Penulis Artikel</x-slot:title>
            </x-service-solution-card>
        </div>
    </x-slot:firstServiceSolutions>

    <x-slot:secondServiceSolutions>
        <x-service-solution-card :src="asset('assets/images/services/digital-marketing/strategy.png')" :header="true">
            <x-slot:title>Marketing Management Hub</x-slot:title>
            <x-slot:description>
                Dapatkan beragam solusi terkait manajemen pemasaran untuk mendukung pertumbuhan bisnis Anda.
            </x-slot:description>
        </x-service-solution-card>
        <div class="grid grid-cols-2 xl:gap-12 lg:gap-8">
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/influencer.jpg')">
                <x-slot:title>Influencer Marketing</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/seo.jpg')">
                <x-slot:title>Search Optimization</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/advertising.jpg')">
                <x-slot:title>Paid Advertising</x-slot:title>
            </x-service-solution-card>
            <x-service-solution-card :src="asset('assets/images/services/digital-marketing/social-media-management.jpg')">
                <x-slot:title>Social Media Management</x-slot:title>
            </x-service-solution-card>
        </div>
    </x-slot:secondServiceSolutions>

    {{-- Definition --}}
    <x-slot:definition>
        Layanan Digital Marketing adalah strategi promosi produk, layanan, atau bisnis Anda secara online.
        Mencakup berbagai strategi seperti SEO, iklan PPC, pemasaran media sosial, dan konten berkualitas.
        Penting untuk memiliki tim pemasaran yang memahami tujuan Anda dan dapat merancang strategi yang
        efektif.
    </x-slot:definition>

    <x-slot:faqs>
        <x-item-faq>
            <x-slot:question>
                Mengapa saya memerlukan pemasaran digital untuk bisnis saya?
            </x-slot:question>
            <x-slot:answer>
                Pemasaran digital memungkinkan bisnis Anda untuk bersaing di ruang online yang kompetitif. Dengan
                strategi yang tepat, Anda dapat menarik pengunjung baru ke situs web Anda, yang berpotensi menjadi
                pelanggan baru. Ini membuka peluang pertumbuhan dan ROI yang lebih baik daripada strategi periklanan
                tradisional.
            </x-slot:answer>
        </x-item-faq>
        <x-item-faq>
            <x-slot:question>
                Apakah ada kontrak untuk layanan pemasaran digital Anda?
            </x-slot:question>
            <x-slot:answer>
                Kami menawarkan kontrak enam bulan dan dua belas bulan, dengan diskon untuk periode yang lebih lama.
                Tidak ada kontrak bulanan karena kami butuh waktu untuk persiapan dan penelitian yang diperlukan.
                Setiap pelanggan kami mendapatkan proposal khusus sesuai dengan kebutuhan bisnis mereka.
            </x-slot:answer>
        </x-item-faq>
        <x-item-faq>
            <x-slot:question>
                Berapa biaya yang harus dikeluarkan untuk pemasaran digital?
            </x-slot:question>
            <x-slot:answer>
                Biaya pemasaran digital umumnya sekitar 10-20% dari pendapatan total bisnis Anda. Kami akan membantu
                Anda menentukan ROI yang diharapkan dan menyediakan proposal khusus untuk bisnis Anda.
            </x-slot:answer>
        </x-item-faq>
        <x-item-faq>
            <x-slot:question>
                Apa jenis dukungan yang Diggity berikan untuk bisnis saya?
            </x-slot:question>
            <x-slot:answer>
                Kami menyediakan dukungan personal dari tim ahli kami dan dasbor pelaporan canggih untuk memantau
                kampanye Anda. Kami siap memberikan saran jujur dan informasi yang Anda butuhkan.
            </x-slot:answer>
        </x-item-faq>
        <x-item-faq>
            <x-slot:question>
                Bagaimana cara memulai layanan Digital Marketing Diggity?
            </x-slot:question>
            <x-slot:answer>
                Untuk memulai, hubungi kami melalui halaman kontak. Tim kami akan merespons untuk mendiskusikan
                kebutuhan pemasaran Anda, memberikan solusi yang disesuaikan, dan memulai proses kerja sama dengan
                digital marketer kami yang terampil.
            </x-slot:answer>
        </x-item-faq>
    </x-slot:faqs>
</x-service-detail-layout>
