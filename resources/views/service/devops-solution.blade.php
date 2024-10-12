<x-service-detail-layout name="DevOps Solution"
    description="Kami hadir untuk meningkatkan efisiensi dan keandalan proyek Anda. Bersiaplah untuk menyederhanakan pengiriman perangkat lunak Anda dengan kolaborasi bersama kami. Mari bergandengan tangan dalam menciptakan saluran yang siap menghadapi masa depan. Mulailah perjalanan DevOps Anda sekarang!"
    definition="Layanan DevOps Solutions adalah serangkaian solusi dan praktik terintegrasi yang dirancang untuk meningkatkan efisiensi, kecepatan, dan kualitas dalam siklus pengembangan dan penerapan perangkat lunak. Ini mencakup otomatisasi proses, kolaborasi tim lintas fungsional, dan integrasi antara pengembangan (development) dan operasi (operations) untuk mencapai pengiriman perangkat lunak yang lebih cepat dan andal.">

    <x-slot:servicesProvided>
        <x-service-provided title="Custom DevOps Solutions"
            description="Kami menyadari bahwa setiap bisnis memiliki kebutuhan dan tantangan yang unik. Oleh karena itu, kami menawarkan solusi DevOps yang dirancang khusus untuk memenuhi kebutuhan dan tantangan spesifik Anda. Tim kami akan berkolaborasi erat dengan Anda untuk merancang solusi yang sesuai dengan alur kerja Anda." />
        <x-service-provided title="Automated Testing Services"
            description="Perkuat strategi pengujian Anda dengan layanan pengujian otomatis kami. Kami akan menerapkan kerangka kerja otomatisasi pengujian, melakukan pengujian kinerja, dan mengintegrasikan pengujian dengan lancar ke dalam saluran CI/CD Anda." />
        <x-service-provided title="Training and Consultation"
            description="Pelatihan dan Konsultasi: Kami akan berdayakan tim Anda dengan pelatihan langsung dalam praktik DevOps. Para pakar kami akan memberikan konsultasi untuk menyelaraskan proses Anda dengan praktik terbaik industri, memastikan transisi yang lancar ke budaya DevOps." />
        <x-service-provided title="Security and Compliance"
            description="Keamanan dan Kepatuhan: Keamanan adalah prioritas utama kami. Kami akan menerapkan praktik terbaik untuk mengamankan infrastruktur dan aplikasi Anda, serta memastikan kepatuhan terhadap standar dan industri." />
    </x-slot:servicesProvided>

    <x-slot:solutions>
        <x-service-solution :src="asset('assets/images/services/devops-solution/ci-cd.png')" title="Continuous Integration (CI)"
            description="Praktik yang memungkinkan pengembang untuk secara otomatis menggabungkan kode yang baru ditambahkan ke repositori bersama. Ini membantu untuk mendeteksi dan memperbaiki konflik kode lebih awal dalam siklus pengembangan." />
        <x-service-solution :src="asset('assets/images/services/devops-solution/ci-cd.png')" title="Continuous Delivery (CD)"
            description="Metode pengiriman perangkat lunak yang mengotomatiskan proses rilis, pengujian, dan penerapan perubahan kode ke lingkungan produksi. Ini memungkinkan pengembang untuk menerapkan perubahan ke lingkungan produksi dengan cepat dan lebih sering." />
        <x-service-solution :src="asset('assets/images/services/devops-solution/iaac.png')" title="Infrastructure as Code (IaC)"
            description="Pendekatan untuk mengelola infrastruktur IT dengan cara yang sama seperti mengelola kode sumber aplikasi. Dengan menggunakan kode, infrastruktur dapat didefinisikan, dikelola, dan disebarkan secara otomatis dan konsisten." />
        <x-service-solution :src="asset('assets/images/services/devops-solution/monitoring.png')" title="Monitoring and Logging"
            description="Proses untuk mengamati dan mencatat perilaku sistem dan aplikasi. Ini memungkinkan pengembang untuk memantau kesehatan aplikasi, mendeteksi masalah, dan menganalisis kinerja secara real-time." />
        <x-service-solution :src="asset('assets/images/services/devops-solution/docker.png')" title="Containerization and Orchestration"
            description="Containerization adalah teknologi yang memungkinkan pengemasan dan menjalankan aplikasi serta semua dependensinya ke dalam wadah yang terisolasi. Orkestrasi adalah pengelolaan dan otomatisasi penempatan, penjadwalan, dan penyebaran aplikasi kontainer." />
        <x-service-solution :src="asset('assets/images/services/devops-solution/microservices.png')" title="Microservices Architecture"
            description="Pendekatan pengembangan perangkat lunak di mana aplikasi dibangun sebagai serangkaian layanan independen yang berjalan dalam kontainer dan berkomunikasi melalui protokol jaringan standar. Ini memungkinkan skalabilitas, fleksibilitas, dan perbaikan yang lebih mudah pada aplikasi." />
    </x-slot:solutions>

    <x-slot:faqs>
        <x-item-faq
            question="Apa yang dimaksud dengan DevOps dan bagaimana manfaatnya bagi proses pengembangan perangkat lunak saya?"
            answer="DevOps adalah pendekatan kolaboratif yang menggabungkan pengembangan dan operasi, bertujuan untuk mempercepat pengiriman perangkat lunak, meningkatkan kolaborasi, dan memastikan penerapan yang efisien. Ini menghasilkan peningkatan siklus pengembangan secara keseluruhan." />
        <x-item-faq question="Bagaimana DevOps dapat meningkatkan keandalan aplikasi saya?"
            answer="Dengan menerapkan pipeline integrasi berkelanjutan dan pengiriman berkelanjutan (CI/CD), DevOps memastikan kode Anda diuji, diintegrasikan, dan diterapkan secara konsisten. Ini mengurangi kesalahan, meningkatkan kualitas kode, dan menyediakan proses yang andal dan berulang untuk merilis perangkat lunak." />
        <x-item-faq question="Alat dan teknologi apa yang Diggity gunakan untuk implementasi DevOps?"
            answer="Kami menggunakan serangkaian alat dan teknologi berstandar industri seperti Docker, Kubernetes, Jenkins, Ansible, dan Terraform untuk mengotomatisasi dan  berbagai aspek siklus hidup pengembangan dan penerapan." />
        <x-item-faq question="Apakah DevOps cocok untuk proyek kecil, atau hanya cocok untuk perusahaan berskala besar?"
            answer="Prinsip DevOps dapat diterapkan pada proyek dengan segala ukuran. Meskipun penerapannya mungkin berbeda, manfaat peningkatan kolaborasi, pengiriman yang lebih cepat, dan peningkatan keandalan sangat berharga baik untuk proyek skala kecil maupun besar." />
        <x-item-faq question="Bagaimana cara memulai layanan DevOps dari Diggity?"
            answer="Anda dapat menghubungi tim kami melalui halaman kontak atau mengatur konsultasi gratis. Kami akan mengevaluasi kebutuhan Anda, membahas solusi potensial, dan menyusun strategi DevOps yang sesuai dengan tujuan pengembangan Anda." />
    </x-slot:faqs>
</x-service-detail-layout>
