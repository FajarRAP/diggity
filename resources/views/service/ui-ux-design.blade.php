<x-service-detail-layout>
    <x-slot:name>
        UI/UX Design
    </x-slot:name>

    <x-slot:description>
        Layanan ini ditujukan bagi Anda yang menganggap komunikasi visual sebagai elemen krusial dalam
        menyampaikan pesan, visi, dan misi perusahaan Anda. Efektivitas pengalaman pengguna dalam menggunakan produk
        Anda akan memengaruhi tingkat konversi tindakan yang dilakukan oleh pengguna tersebut.
    </x-slot:description>

    <x-slot:servicesProvided>
        <x-service-provided title="User Research and Analysis"
            description="Melakukan riset menyeluruh dan analisis pengguna kami bertujuan untuk memahami audiens target dan kebutuhan mereka, serta mengidentifikasi area yang perlu ditingkatkan melalui analisis perilaku pengguna." />
        <x-service-provided title="Wireframing and Prototyping"
            description="Mengembangkan wireframe terperinci dan prototipe interaktif, tim UI/UX bertujuan untuk memvisualisasikan alur pengguna dengan jelas." />
        <x-service-provided title="User Interface Design"
            description="Dalam membuat antarmuka pengguna, kami fokus pada kejelasan visual dan intuitif, menjaga konsistensi di berbagai layar dan perangkat untuk pengalaman pengguna yang lancar." />
        <x-service-provided title="User Experience Testing"
            description="Melalui pengujian kegunaan dan umpan balik pengguna, kami terus memperbaiki desain untuk meningkatkan pengalaman pengguna secara berkelanjutan." />
    </x-slot:servicesProvided>

    <x-slot:solutions>
        <x-service-solution :src="asset('asset/images/services/ui-ux-design/visual.png')" title="Desain Visual"
            description="Kami menciptakan tampilan yang menarik dan estetis untuk produk Anda, memastikan kesesuaian dengan identitas merek dan preferensi pengguna." />
        <x-service-solution :src="asset('asset/images/services/ui-ux-design/responsive.png')" title="Desain Responsif"
            description="Kami memastikan bahwa desain yang kami buat dapat menyesuaikan diri dengan berbagai perangkat dan ukuran layar, memberikan pengalaman yang konsisten dan optimal bagi pengguna." />
        <x-service-solution :src="asset('asset/images/services/ui-ux-design/research.png')" title="Riset Pengguna"
            description="Melalui riset yang mendalam, kami memahami kebutuhan, preferensi, dan perilaku pengguna untuk mengarahkan pengembangan desain yang sesuai dengan kebutuhan mereka." />
        <x-service-solution :src="asset('asset/images/services/ui-ux-design/interaction.png')" title="Desain Interaksi"
            description="Kami merancang interaksi antara pengguna dan produk Anda agar intuitif, efisien, dan memikat, memperkuat pengalaman pengguna secara keseluruhan." />
        <x-service-solution :src="asset('asset/images/services/ui-ux-design/usability.png')" title="Pengujian Kegunaan"
            description="Kami melakukan pengujian fungsionalitas produk secara menyeluruh untuk memastikan bahwa desain yang kami buat benar-benar bermanfaat dan mudah digunakan oleh pengguna." />
        <x-service-solution :src="asset('asset/images/services/ui-ux-design/brand.png')" title="Penyelarasan Merek"
            description="Kami menyelaraskan desain dengan identitas merek Anda, memastikan konsistensi visual yang memperkuat citra merek Anda di mata pengguna." />
    </x-slot:solutions>

    <x-slot:faqs>
        <div class="lg:space-y-3 xl:space-y-6">
            <h3 class="heading-three text-accent">Frequently Asked Questions</h3>
            <h2 class="heading-two">Apa itu layanan UI/UX Design?</h2>
            <p class="paragraph">
                Layanan UI/UX Design mengacu pada antarmuka pengguna dan pengalaman pengguna, fokus pada pembuatan
                antarmuka yang visual menarik, ramah pengguna, dan intuitif. Penting untuk proyek perangkat lunak Anda
                karena meningkatkan kepuasan pengguna, keterlibatan, dan kegunaan secara keseluruhan, yang berkontribusi
                pada kesuksesan aplikasi Anda.
            </p>
        </div>
        <div class="flex flex-col lg:gap-3 xl:gap-6">
            <x-item-faq>
                <x-slot:question>
                    Apa manfaat desain UI/UX bagi bisnis atau produk saya?
                </x-slot:question>
                <x-slot:answer>
                    Desain UI/UX yang efektif meningkatkan kredibilitas merek, meningkatkan retensi pengguna, dan
                    memperbaiki kepuasan pelanggan. Ini juga dapat menghasilkan konversi yang lebih tinggi, mengurangi
                    tingkat pentalan, dan meningkatkan interaksi pengguna, yang pada akhirnya berdampak pada kesuksesan
                    bisnis Anda.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana proses desain UI/UX dilakukan?
                </x-slot:question>
                <x-slot:answer>
                    Proses desain UI/UX kami mencakup penelitian, wireframing, pembuatan prototipe, desain visual, dan
                    pengujian. Kami bekerja sama dengan klien untuk memahami visi, audiens target, dan tujuan bisnis
                    mereka,
                    memastikan desain sesuai dengan kebutuhan mereka.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Apakah Diggity menyediakan layanan desain UI/UX untuk aplikasi seluler?
                </x-slot:question>
                <x-slot:answer>
                    Ya, layanan desain UI/UX kami mencakup aplikasi web dan seluler. Kami menyesuaikan desain kami untuk
                    mencocokkan karakteristik unik dan pengalaman pengguna berbagai platform.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana saya bisa memulai dengan layanan desain UI/UX Diggity?
                </x-slot:question>
                <x-slot:answer>
                    Memulainya mudah! Hubungi kami melalui situs web kami atau langsung menghubungi tim kami. Kami akan
                    mengatur konsultasi untuk membahas proyek Anda, tujuan, dan bagaimana layanan desain UI/UX kami
                    dapat
                    memberikan nilai tambah bagi bisnis Anda.
                </x-slot:answer>
            </x-item-faq>
        </div>
    </x-slot:faqs>
</x-service-detail-layout>
