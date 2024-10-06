<x-product-detail-layout>
    <x-slot:name>
        Software Manajemen Tenaga Kerja, HR, dan Payroll
    </x-slot:name>

    <x-slot:title>
        Solusi Terdepan Pengelolaan Tenaga Kerja, Operasional HR, dan Payroll
    </x-slot:title>

    <x-slot:description>
        <x-paragraph class="lg:mt-3 xl:mt-6">
            Diggity menawarkan solusi terkemuka berbasis cloud yang menyeluruh untuk memenuhi beragam kebutuhan HR,
            karyawan, dan operasional bisnis. Sebagai mitra tepercaya perusahaan dari berbagai sektor, kami menawarkan
            fitur-fitur unggulan berikut:
        </x-paragraph>
        <x-check-circle
            benefit="Platform HR berbasis cloud yang fleksibel, tanpa biaya implementasi dan pemeliharaan." />
        <x-check-circle benefit="Database HR yang aman, terintegrasi dengan berbagai modul manajemen." />
        <x-check-circle
            benefit="Skalabilitas tinggi, mudah dikonfigurasi, dan dapat disesuaikan dengan budaya serta kebijakan perusahaan." />
        <x-check-circle benefit="Otomatisasi proses HR untuk memperlancar operasional harian perusahaan." />
        <x-check-circle
            benefit="Integrasi strategis yang beragam untuk analisis, perencanaan, dan pengambilan keputusan HR yang lebih efektif."
            class="xl:mb-6 lg:mb-3" />
    </x-slot:description>

    <x-slot:benefits>
        {{-- <h2 class="w-1/2 mx-auto text-center lg:pt-12 xl:pt-24 heading-two"> --}}
        <x-heading-two class="w-1/2 mx-auto text-center lg:pt-12 xl:pt-24">
            Optimalkan Kesempatan Bisnis Anda Dengan Teknologi Cloud-Based.
        </x-heading-two>
        <div class="grid grid-cols-3 xl:gap-x-7 lg:gap-x-4 xl:gap-y-12 lg:gap-y-8">
            <x-item-product-benefit-card :src="asset('assets/images/products/product-detail.png')">
                <x-slot:title>
                    Operasional Efisien dengan Otomatisasi Tugas
                </x-slot:title>
                <x-slot:description>
                    Mengurangi beban kerja dengan otomatisasi tugas-tugas repetitif untuk fokus pada inisiatif
                    strategis.
                </x-slot:description>
            </x-item-product-benefit-card>
            <x-item-product-benefit-card :src="asset('assets/images/products/product-detail.png')">
                <x-slot:title>
                    Keamanan Data yang Terpercaya
                </x-slot:title>
                <x-slot:description>
                    Perlindungan data yang andal dengan sistem keamanan tersertifikasi, melampaui solusi HR lainnya.
                </x-slot:description>
            </x-item-product-benefit-card>
            <x-item-product-benefit-card :src="asset('assets/images/products/product-detail.png')">
                <x-slot:title>
                    Layanan Mandiri untuk Karyawan
                </x-slot:title>
                <x-slot:description>
                    Memberdayakan karyawan dengan layanan mandiri untuk mengurus administrasi sendiri dengan lebih
                    efisien.
                </x-slot:description>
            </x-item-product-benefit-card>
            <x-item-product-benefit-card :src="asset('assets/images/products/product-detail.png')">
                <x-slot:title>
                    Pengambilan Keputusan Cepat dengan Dukungan AI
                </x-slot:title>
                <x-slot:description>
                    Kecepatan dan akurasi pengambilan keputusan ditingkatkan dengan dukungan AI dan analitik.
                </x-slot:description>
            </x-item-product-benefit-card>
            <x-item-product-benefit-card :src="asset('assets/images/products/product-detail.png')">
                <x-slot:title>
                    Otomatisasi Backup Data untuk Keamanan Bisnis
                </x-slot:title>
                <x-slot:description>
                    Cegah kehilangan data dan gangguan dengan otomatisasi backup data yang teratur.
                </x-slot:description>
            </x-item-product-benefit-card>
            <x-item-product-benefit-card :src="asset('assets/images/products/product-detail.png')">
                <x-slot:title>
                    Mengurangi Kesalahan dengan Otomatisasi Modular
                </x-slot:title>
                <x-slot:description>
                    Minimalkan risiko kesalahan manusia dengan otomatisasi modular yang fleksibel.
                </x-slot:description>
            </x-item-product-benefit-card>
        </div>
    </x-slot:benefits>

    <x-slot:faqs>
        <x-faqs>
            <x-slot:title>
                Apa itu Software Manajemen Tenaga Kerja, HR, dan Payroll?
            </x-slot:title>
            <x-slot:description>
                Software Manajemen Tenaga Kerja, HR, dan Payroll adalah platform berbasis komputasi cloud yang
                menyediakan HRIS otomatisasi untuk mempermudah operasional perusahaan dalam mengelola karyawan. Dengan
                menggunakan software HR, perusahaan dapat mengelola berbagai aspek, mulai dari penghitungan gaji hingga
                manajemen database karyawan.
            </x-slot:description>
            <x-item-faq>
                <x-slot:question>
                    Siapakah yang tepat menggunakan software Manajemen Tenaga Kerja, HR, dan Payroll Diggity?
                </x-slot:question>
                <x-slot:answer>
                    Software Manajemen Tenaga Kerja, HR, dan Payroll Diggity cocok digunakan oleh perusahaan dari
                    berbagai industri dan skala bisnis, yang ingin berkembang dan beradaptasi dengan budaya remote
                    working serta WFH di masa pandemi. Baik perusahaan F&B, manufaktur, pariwisata, layanan kesehatan,
                    hingga startup dan bisnis berskala besar dapat mengambil manfaat dari sistem HR terotomasi.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana software Manajemen Tenaga Kerja, HR, dan Payroll Diggity membantu perkembangan perusahaan?
                </x-slot:question>
                <x-slot:answer>
                    Software Manajemen Tenaga Kerja, HR, dan Payroll Diggity yang komprehensif dapat memudahkan
                    perusahaan dalam mengelola administrasi HR sehari-hari, membebaskan waktu dari operasional dan
                    administrasi yang berlebihan, sehingga fokus dapat dialihkan ke pengembangan karyawan dan penciptaan
                    budaya yang produktif.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Apakah fitur penggajian software Manajemen Tenaga Kerja, HR, dan Payroll Diggity dapat menghitung
                    PPh 21 karyawan juga?
                </x-slot:question>
                <x-slot:answer>
                    Ya, fitur penggajian di dalam software Manajemen Tenaga Kerja, HR, dan Payroll Diggity mampu
                    melakukan perhitungan gaji karyawan secara otomatis dan akurat, termasuk menghitung potongan pajak
                    seperti PPh 21.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Apa saja fitur-fitur terbaik dari software Manajemen Tenaga Kerja, HR, dan Payroll Diggity?
                </x-slot:question>
                <x-slot:answer>
                    Software Manajemen Tenaga Kerja, HR, dan Payroll Diggity menawarkan berbagai fitur unggulan,
                    termasuk sistem payroll otomatis, aplikasi absensi dan cuti online, aplikasi penilaian kinerja
                    karyawan, dan banyak lagi, yang dapat mempermudah operasional HR sehari-hari.
                </x-slot:answer>
            </x-item-faq>
            <x-item-faq>
                <x-slot:question>
                    Bagaimana jika perusahaan saya ingin berlangganan software Manajemen Tenaga Kerja, HR, dan Payroll?
                </x-slot:question>
                <x-slot:answer>
                    Untuk berlangganan produk SaaS Diggity, Anda dapat menghubungi tim kami melalui Whatsapp atau
                    mengunjungi halaman hubungi kami untuk informasi lebih lanjut.
                </x-slot:answer>
            </x-item-faq>
        </x-faqs>
    </x-slot:faqs>
</x-product-detail-layout>
