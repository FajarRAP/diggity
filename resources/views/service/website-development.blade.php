<x-service-detail-layout>
    {{-- Name --}}
    <x-slot:name>
        Website Development
    </x-slot:name>

    {{-- Description --}}
    <x-slot:description>
        Dengan bantuan tim developer yang berpengalaman, kami selalu memperhitungkan kesesuaian teknologi dengan
        kebutuhan masing-masing bisnis. Kami memastikan bahwa situs web yang kami bangun tidak hanya cepat, tetapi juga
        ramah terhadap SEO dan user-friendly.
    </x-slot:description>

    {{-- Services Provided --}}
    <x-slot:servicesProvided>
        <x-service-provided title="Website Development"
            description="Kami menciptakan kehadiran online yang kuat dan disesuaikan dengan kebutuhan industri Anda. Situs web yang kami buat akan menonjol dan sesuai dengan tujuan bisnis Anda." />
        <x-service-provided title="Migration and Upgrade"
            description="Kami ahli dalam melakukan migrasi situs web ke teknologi terbaru tanpa hambatan. Kami memastikan transisi yang mulus dan meningkatkan kinerja situs web untuk memberikan pengalaman pengguna yang unggul." />
        <x-service-provided title="Website Integration Service"
            description="Kami membantu meningkatkan efisiensi operasional dengan mengintegrasikan berbagai fungsi penting, seperti API pihak ketiga, gateway pembayaran, komunikasi dan chat, Single Sign-On (SSO), Layanan Cloud, dan ERP. Integrasi ini membentuk ekosistem digital yang terpadu." />
        <x-service-provided title="Website Maintenance and Support"
            description="Kami menyediakan layanan pemeliharaan dan dukungan yang dirancang khusus untuk memastikan situs web Anda tetap berjalan lancar. Tim kami secara proaktif memantau, memecahkan masalah, dan mengatasi masalah teknis dengan cepat, sehingga Anda memiliki kehadiran online yang andal." />
    </x-slot:servicesProvided>

    {{-- Solutions --}}
    <x-slot:solutions>
        <x-service-solution :src="asset('asset/images/services/website-development/erp.png')" title="Perencanaan Sumber Daya Perusahaan (ERP)"
            description="Kami menyediakan pengembangan web untuk membantu Anda mengimplementasikan sistem ERP yang sesuai dengan kebutuhan bisnis Anda." />
        <x-service-solution :src="asset('asset/images/services/website-development/cms.png')" title="Sistem Manajemen Konten (CMS)"
            description="Kami merancang dan mengembangkan CMS yang dapat disesuaikan agar Anda dapat dengan mudah mengelola konten situs web Anda." />
        <x-service-solution :src="asset('asset/images/services/website-development/ecommerce.png')" title="Platform Penjualan Online (E-Commerce)"
            description="Kami menyediakan pengembangan web untuk membantu Anda mengimplementasikan sistem ERP yang sesuai dengan kebutuhan bisnis Anda." />
        <x-service-solution :src="asset('asset/images/services/website-development/lms.png')" title="Sistem Manajemen Pembelajaran (LMS)"
            description="Kami menyediakan solusi pengembangan web untuk membangun sistem LMS yang memungkinkan Anda menyampaikan dan mengelola pelatihan online." />
        <x-service-solution :src="asset('asset/images/services/website-development/api.png')" title="API dan Integrasi Khusus"
            description="Kami merancang dan mengintegrasikan API khusus sesuai kebutuhan bisnis Anda, memungkinkan integrasi yang mulus dengan berbagai platform." />
        <x-service-solution :src="asset('asset/images/services/website-development/event-management.png')" title="Sistem Manajemen Acara"
            description="Kami membantu Anda mengembangkan platform untuk mengelola acara dan tiket secara efisien." />
    </x-slot:solutions>

    {{-- FAQs --}}
    <x-slot:faqs>
        <div class="lg:space-y-3 xl:space-y-6">
            <h3 class="heading-three text-accent">Frequently Asked Questions</h3>
            <h2 class="heading-two">Apa itu layanan Website Development?</h2>
            <p class="paragraph">
                Layanan Website Development mencakup proses merancang, membangun, dan memelihara situs web.
                Melibatkan penggunaan berbagai teknologi, bahasa pemrograman, dan kerangka kerja untuk membuat
                situs
                web yang sesuai dengan kebutuhan dan tujuan bisnis Anda.
            </p>
        </div>
        <div class="flex flex-col lg:gap-3 xl:gap-6">
            <x-item-faq>
                <x-slot:question>
                    Apa jenis situs web yang menjadi spesialisasi Diggity?
                </x-slot:question>
                <x-slot:answer>
                    Di Diggity, kami mengkhususkan diri dalam pengembangan berbagai jenis situs web, termasuk
                    situs
                    web
                    perusahaan, platform e-commerce, sistem manajemen konten (CMS), dan aplikasi web kustom yang
                    disesuaikan dengan kebutuhan spesifik Anda.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bisakah Diggity mendesain ulang situs web yang sudah ada?
                </x-slot:question>
                <x-slot:answer>
                    Tentu! Tim kami yang berpengalaman dapat mendesain ulang dan memperbarui situs web Anda untuk
                    meningkatkan tampilan, fungsionalitas, dan pengalaman pengguna secara keseluruhan.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Teknologi apa yang digunakan oleh tim Diggity untuk pengembangan web?
                </x-slot:question>
                <x-slot:answer>
                    Kami menggunakan berbagai teknologi dan kerangka kerja seperti HTML5, CSS3, JavaScript, React,
                    Angular, Node.js, dan PHP. Kami memilih teknologi berdasarkan kebutuhan khusus proyek Anda.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bisakah Diggity mengintegrasikan layanan pihak ketiga ke situs web saya?
                </x-slot:question>
                <x-slot:answer>
                    Ya, kami memiliki pengalaman dalam mengintegrasikan berbagai layanan pihak ketiga, API, dan plugin
                    untuk
                    meningkatkan fungsionalitas situs web Anda, termasuk gateway pembayaran, integrasi media sosial, dan
                    banyak lagi.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana saya bisa memulai layanan pengembangan web dengan Diggity?
                </x-slot:question>
                <x-slot:answer>
                    Sangat mudah! Anda dapat menghubungi kami melalui halaman kontak atau mengirimkan pesan melalui
                    WhatsApp. Kami
                    akan menjadwalkan konsultasi untuk membahas proyek Anda, memahami kebutuhan Anda, dan menyusun
                    proposal yang sesuai
                    dengan kebutuhan Anda.
                </x-slot:answer>
            </x-item-faq>
        </div>
    </x-slot:faqs>
</x-service-detail-layout>
