<x-service-detail-layout>
    <x-slot:name>
        Product Development
    </x-slot:name>

    <x-slot:description>
        Mendapatkan wawasan bisnis dari setiap ide dan konsep melalui pengembangan Minimum Viable Product (MVP). Bangun
        produk MVP bersama kami untuk menemukan solusi untuk setiap peluang bisnis di pasar digital saat ini.
    </x-slot:description>

    <x-slot:servicesProvided>
        <x-service-provided title="Conceptualization"
            description="Pada tahap awal proyek kami, kami melakukan riset pasar menyeluruh untuk menemukan kesenjangan, terlibat dalam sesi curah pendapat yang komprehensif untuk menentukan fitur dan fungsi sistem inovatif kami, sekaligus menentukan kebutuhan spesifik dari persona pengguna target kami." />
        <x-service-provided title="Prototyping and Design"
            description="Selama tahap awal pengembangan produk, kami membuat prototipe untuk memvisualisasikan antarmuka pengguna dan arsitektur sistem. Dengan menggunakan umpan balik dari prototipe ini, kami mengembangkan spesifikasi desain rinci, dan kemudian menyelesaikan desain tersebut." />
        <x-service-provided title="Regulatory Compliance"
            description="Tim kami memulai dengan membuat prototipe untuk antarmuka pengguna dan arsitektur sistem, menggunakan wawasan dari prototipe tersebut untuk mengembangkan spesifikasi desain terperinci secara cermat. Hal ini memastikan keselarasan dengan standar dan peraturan industri, sehingga menghasilkan desain produk yang lebih baik." />
        <x-service-provided title="Market Strategy"
            description="Ini melibatkan pengenalan audiens dan persaingan, menciptakan nilai yang berbeda, dan menggunakan pemasaran dan penjualan yang efektif untuk menarik klien, yang bertujuan untuk menjadikan perusahaan sebagai pemimpin industri, beradaptasi dengan perubahan, dan mencapai pertumbuhan berkelanjutan melalui layanan pengembangan produk yang berkualitas." />
    </x-slot:servicesProvided>

    <x-slot:solutions>
        <x-service-solution :src="asset('asset/images/services/product-development/task-management.png')" title="Aplikasi Manajemen Tugas"
            description="Platform ini membantu Anda mengatur dan melacak tugas-tugas Anda dengan lebih efisien, memungkinkan kolaborasi tim, penjadwalan, dan pemantauan progres." />
        <x-service-solution :src="asset('asset/images/services/product-development/medical.png')" title=" Pelacak Kesehatan dan Kebugaran"
            description="Melalui aplikasi ini, Anda dapat memantau aktivitas fisik Anda, mengatur program latihan, dan melacak kemajuan Anda dalam mencapai tujuan kesehatan dan kebugaran Anda." />
        <x-service-solution :src="asset('asset/images/services/product-development/language.png')" title="Platform Pembelajaran Bahasa"
            description="Platform ini menyediakan berbagai sumber belajar untuk membantu Anda meningkatkan kemampuan berbahasa Anda, termasuk kelas online, latihan, dan ujian." />
        <x-service-solution :src="asset('asset/images/services/product-development/money.png')" title="Aplikasi Pencatat Pengeluaran"
            description="Dengan aplikasi ini, Anda dapat mencatat dan melacak pengeluaran Anda secara teratur, mengelompokkannya berdasarkan kategori, dan memantau anggaran keuangan Anda." />
        <x-service-solution :src="asset('asset/images/services/product-development/conference.png')" title="Platform Acara Virtual"
            description="Platform ini memungkinkan Anda untuk mengadakan acara dan pertemuan secara online, termasuk konferensi, seminar, atau pertemuan bisnis, dengan fitur-fitur seperti siaran langsung, ruang obrolan, dan area pameran virtual." />
        <x-service-solution :src="asset('asset/images/services/product-development/document.png')" title="Alat Penyunting Dokumen Kolaboratif"
            description="Alat ini memfasilitasi kolaborasi dalam pengeditan dan peninjauan dokumen secara bersama-sama oleh tim Anda, memungkinkan Anda untuk bekerja secara efisien dalam proyek-proyek yang melibatkan banyak kontributor." />
    </x-slot:solutions>

    <x-slot:faqs>
        <div class="lg:space-y-3 xl:space-y-6">
            <h3 class="heading-three text-accent">Frequently Asked Questions</h3>
            <h2 class="heading-two">Apa itu layanan Product Development?</h2>
            <p class="paragraph">
                Layanan Product Development adalah proses menciptakan, merancang, dan menyempurnakan suatu produk mulai
                dari konsepsi hingga peluncuran pasar. Hal ini penting bagi bisnis karena memastikan inovasi
                berkelanjutan, kemampuan beradaptasi terhadap kebutuhan pasar, dan pertumbuhan berkelanjutan dengan
                memberikan solusi yang berharga.
            </p>
        </div>
        <div class="flex flex-col lg:gap-3 xl:gap-6">
            <x-item-faq>
                <x-slot:question>
                    Industri apa yang Diggity layani untuk pengembangan produk?
                </x-slot:question>
                <x-slot:answer>
                    Kami melayani beragam industri, termasuk namun tidak terbatas pada perawatan kesehatan, keuangan,
                    e-commerce, dan teknologi. Tim kami dilengkapi untuk menangani berbagai domain, memastikan solusi
                    yang disesuaikan untuk kebutuhan spesifik industri Anda.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Teknologi apa yang menjadi spesialisasi Diggity untuk pengembangan produk?
                </x-slot:question>
                <x-slot:answer>
                    Tim kami mahir dalam beragam teknologi, termasuk namun tidak terbatas pada Python, JavaScript, Java,
                    React, dan banyak lagi. Kami selalu mengikuti perkembangan tren industri terkini untuk memberikan
                    solusi mutakhir untuk produk Anda.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana Diggity dapat membantu pengembangan produk?
                </x-slot:question>
                <x-slot:answer>
                    Rumah perangkat lunak kami berspesialisasi dalam pengembangan produk ujung ke ujung. Kami menawarkan
                    layanan mulai dari pembuatan ide, pembuatan prototipe, dan desain hingga pengkodean, pengujian, dan
                    penerapan, memastikan proses pengembangan yang lancar dan efisien.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana cara memulai layanan pengembangan produk?
                </x-slot:question>
                <x-slot:answer>
                    Memulainya mudah. Cukup hubungi kami melalui halaman kontak, dan tim kami akan menjadwalkan
                    konsultasi untuk mendiskusikan proyek Anda, tujuan, dan cara terbaik untuk mendukung kebutuhan
                    pengembangan produk Anda.
                </x-slot:answer>
            </x-item-faq>

        </div>
    </x-slot:faqs>
</x-service-detail-layout>
