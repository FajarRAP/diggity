<x-service-detail-layout>
    <x-slot:name>
        Big Data Service
    </x-slot:name>

    <x-slot:description>
        Optimalkan pendapatan bisnis Anda dengan keputusan yang didukung oleh data. Layanan Big Data
        kami memberi Anda kekuatan untuk mengekstrak wawasan yang dapat diambil tindakan, meningkatkan efisiensi
        operasional, dan membuat keputusan berdasarkan informasi yang mengarah pada kesuksesan jangka panjang dalam era
        data yang sangat penting saat ini.
    </x-slot:description>

    <x-slot:servicesProvided>
        <x-service-provided title="Data Sourcing and Management"
            description="Fokus pada mengumpulkan data dari berbagai sumber, menggabungkannya, dan menerapkan solusi penyimpanan yang dapat diskalakan, sambil memperhatikan kualitas data, keamanan, dan kontrol akses." />
        <x-service-provided title="Data Processing and Analysis"
            description="Menggunakan teknologi mutakhir untuk memproses, menganalisis, dan mentransformasi data dengan hati-hati untuk mengungkap wawasan penting, serta merancang model dan algoritme analitik untuk mendukung keputusan bisnis." />
        <x-service-provided title="Integration and Interoperability"
            description="Menyatukan data dari berbagai sumber untuk memberikan perspektif yang terpadu, serta memastikan komunikasi yang lancar antara sistem data dan aplikasi." />
        <x-service-provided title="Infrastructure Scalability and Optimization"
            description="Membangun sistem yang dapat mengelola volume data yang semakin besar, meningkatkan kinerja pemrosesan data, dan menyediakan pemantauan dan pemeliharaan yang andal untuk kestabilan dan keamanan sistem." />
    </x-slot:servicesProvided>

    <x-slot:solutions>
        <x-service-solution :src="asset('asset/images/services/big-data-services/data-warehouse.png')" title="Data Warehousing"
            description="Penyimpanan data dalam format yang dioptimalkan untuk analisis, memungkinkan akses cepat dan efisien ke data historis." />
        <x-service-solution :src="asset('asset/images/services/big-data-services/predict.png')" title="Predictive Analytics"
            description="Menggunakan data historis untuk membangun model statistik dan machine learning yang memprediksi perilaku atau kejadian di masa depan, membantu organisasi membuat keputusan yang lebih baik." />
        <x-service-solution :src="asset('asset/images/services/big-data-services/realtime.png')" title="Real-time Data Processing"
            description="Mengelola dan menganalisis data secara instan saat itu terjadi, memungkinkan pengambilan keputusan berdasarkan informasi yang terbaru dan relevan." />
        <x-service-solution :src="asset('asset/images/services/big-data-services/segmentation.png')" title="Customer Segmentation"
            description="Memecah basis data pelanggan menjadi kelompok-kelompok yang homogen berdasarkan karakteristik tertentu, seperti perilaku pembelian atau preferensi produk, untuk menyediakan layanan yang lebih tepat sasaran." />
        <x-service-solution :src="asset('asset/images/services/big-data-services/fraud.png')" title="Fraud Detection and Prevention"
            description="Menggunakan analisis data untuk mengidentifikasi pola anomali atau tanda-tanda kecurangan dalam transaksi keuangan atau perilaku pengguna, sehingga meminimalkan risiko kerugian." />
        <x-service-solution :src="asset('asset/images/services/big-data-services/financial.png')" title="Financial Analytics"
            description="Menganalisis data keuangan untuk mendapatkan wawasan yang mendalam tentang kinerja keuangan perusahaan, memahami tren pasar, dan mengidentifikasi peluang investasi atau risiko potensial." />
    </x-slot:solutions>

    <x-slot:faqs>
        <div class="lg:space-y-3 xl:space-y-6">
            <h3 class="heading-three text-accent">Frequently Asked Questions</h3>
            <h2 class="heading-two">Apa itu layanan Big Data?</h2>
            <p class="paragraph">
                Layanan Big Data mencakup serangkaian solusi yang bertujuan untuk mengelola, memproses, dan menganalisis
                data kompleks dalam jumlah besar. Ini termasuk integrasi data, analitik, pergudangan data, visualisasi,
                dan lainnya, yang semuanya bertujuan untuk mengekstraksi wawasan berharga dari berbagai kumpulan data.
            </p>
        </div>
        <div class="flex flex-col lg:gap-3 xl:gap-6">
            <x-item-faq>
                <x-slot:question>
                    Apa manfaat Layanan Big Data bagi bisnis saya?
                </x-slot:question>
                <x-slot:answer>
                    Layanan Big Data membantu bisnis memanfaatkan potensi data mereka secara maksimal, mendukung
                    pengambilan keputusan yang tepat, meningkatkan pengalaman pelanggan, dan mendorong inovasi di
                    berbagai sektor industri.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Layanan spesifik apa yang Anda tawarkan di bawah Layanan Big Data?
                </x-slot:question>
                <x-slot:answer>
                    Layanan Big Data kami mencakup Integrasi Data, Analisis Big Data, Pergudangan Data, Visualisasi
                    Data, Pemrosesan Data Real-time, Keamanan Big Data, Konsultasi Hadoop, Pembelajaran Mesin dan
                    Integrasi AI, Solusi Berbasis Cloud, serta Tata Kelola dan Kualitas Data.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Industri apa yang Anda layani dengan Layanan Big Data Anda?
                </x-slot:question>
                <x-slot:answer>
                    Solusi Big Data kami dapat diterapkan di berbagai industri, termasuk keuangan, layanan kesehatan,
                    e-commerce, manufaktur, dan banyak lagi. Layanan kami dapat disesuaikan untuk mengatasi tantangan
                    dan mencapai tujuan spesifik dalam berbagai sektor.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana cara memulai Layanan Big Data Anda?
                </x-slot:question>
                <x-slot:answer>
                    Memulainya mudah! Hubungi tim kami melalui halaman kontak atau jadwalkan konsultasi. Kami akan
                    meninjau kebutuhan Anda, mengevaluasi lanskap data Anda, dan menawarkan solusi yang disesuaikan
                    untuk mencapai tujuan bisnis Anda.
                </x-slot:answer>
            </x-item-faq>
        </div>
    </x-slot:faqs>
</x-service-detail-layout>
