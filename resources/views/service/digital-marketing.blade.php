<x-service-detail-layout name="Digital Marketing"
    description="Mendukung beragam jenis bisnis Anda, mulai dari skala kecil seperti bisnis rumahan dan UMKM, hingga bisnis rintisan (startup) dan perusahaan besar, dalam menerapkan strategi pemasaran digital yang efektif."
    definition="Layanan Digital Marketing adalah strategi promosi produk, layanan, atau bisnis Anda secara online. Mencakup berbagai strategi seperti SEO, iklan PPC, pemasaran media sosial, dan konten berkualitas. Penting untuk memiliki tim pemasaran yang memahami tujuan Anda dan dapat merancang strategi yang efektif.">

    <x-slot:firstServiceSolutions>
        <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/creative.png')" :header="true" title="Creative Content Studio"
            description="Temukan solusi kreatif dan berkualitas tinggi untuk mencapai tujuan Anda di Creative Content Studio." />
        <div class="grid grid-cols-2 xl:gap-12 lg:gap-8">
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/product-photo.jpg')" title="Product Photography" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/live.jpg')" title="Online Shop Live Studio" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/graphic-design.jpg')" title="Graphic Design" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/commercial.jpg')" title="Video Commercial" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/social-media.jpg')" title="Video Social Media" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/animation.jpg')" title="Video Animasi" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/article.jpg')" title="Penulis Artikel" />
        </div>
    </x-slot:firstServiceSolutions>

    <x-slot:secondServiceSolutions>
        <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/strategy.png')" :header="true" title="Marketing Management Hub"
            description="Dapatkan beragam solusi terkait manajemen pemasaran untuk mendukung pertumbuhan bisnis Anda." />
        <div class="grid grid-cols-2 xl:gap-12 lg:gap-8">
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/influencer.jpg')" title="Influencer Marketing" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/seo.jpg')" title="Search Optimization" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/advertising.jpg')" title="Paid Advertising" />
            <x-card.item-service-solution :src="asset('assets/images/services/digital-marketing/social-media-management.jpg')" title="Social Media Management" />
        </div>
    </x-slot:secondServiceSolutions>

    <x-slot:faqs>
        <x-item-faq question="Mengapa saya memerlukan pemasaran digital untuk bisnis saya?"
            answer="Pemasaran digital memungkinkan bisnis Anda untuk bersaing di ruang online yang kompetitif. Dengan strategi yang tepat, Anda dapat menarik pengunjung baru ke situs web Anda, yang berpotensi menjadi pelanggan baru. Ini membuka peluang pertumbuhan dan ROI yang lebih baik daripada strategi periklanan tradisional." />
        <x-item-faq question="Apakah ada kontrak untuk layanan pemasaran digital Anda?"
            answer="Kami menawarkan kontrak enam bulan dan dua belas bulan, dengan diskon untuk periode yang lebih lama. Tidak ada kontrak bulanan karena kami butuh waktu untuk persiapan dan penelitian yang diperlukan. Setiap pelanggan kami mendapatkan proposal khusus sesuai dengan kebutuhan bisnis mereka." />
        <x-item-faq question="Berapa biaya yang harus dikeluarkan untuk pemasaran digital?"
            answer="Biaya pemasaran digital umumnya sekitar 10-20% dari pendapatan total bisnis Anda. Kami akan membantu Anda menentukan ROI yang diharapkan dan menyediakan proposal khusus untuk bisnis Anda." />
        <x-item-faq question="Apa jenis dukungan yang Diggity berikan untuk bisnis saya?"
            answer="Kami menyediakan dukungan personal dari tim ahli kami dan dasbor pelaporan canggih untuk memantau kampanye Anda. Kami siap memberikan saran jujur dan informasi yang Anda butuhkan." />
        <x-item-faq question="Bagaimana cara memulai layanan Digital Marketing Diggity?"
            answer="Untuk memulai, hubungi kami melalui halaman kontak. Tim kami akan merespons untuk mendiskusikan kebutuhan pemasaran Anda, memberikan solusi yang disesuaikan, dan memulai proses kerja sama dengan digital marketer kami yang terampil." />
    </x-slot:faqs>
</x-service-detail-layout>
