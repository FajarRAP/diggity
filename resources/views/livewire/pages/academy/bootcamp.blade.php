<?php
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class extends Component {};
?>

<div>
    <x-wrapper.transparent>
        <x-breadcumb>
            <x-breadcumb-link link="Bootcamp" />
        </x-breadcumb>
        <x-hero-header title="Wujudkan Karier Impianmu melalui Bootcamp Online"
            description="Diggity meyakini bahwa siapa pun bisa meraih karier impian, tanpa memandang latar belakang pendidikanmu."
            :src="asset('assets/images/carousels/carousel1.jpeg')" />
        <x-fonts.heading-two text="Bootcamp Online Diggity Menjadi Pilihan Utama untuk Peningkatan Skill" />
        <div class="grid grid-cols-3 xl:gap-7 lg:gap-5">
            <x-card.item-bootcamp-benefit title="Belajar Online di Akhir Pekan"
                description="Solusi untuk Jadwal Padat Hilangkan kekhawatiran tentang waktu dengan belajar di akhir pekan meskipun pekerjaan mengharuskanmu lembur hingga larut malam." />
            <x-card.item-bootcamp-benefit title="Mentor dan Jaringan yang Berkualitas"
                description="Dibimbing oleh mentor-mantor berpengalaman dari perusahaan teknologi terkemuka yang siap memberikan arahan secara intensif." />
            <x-card.item-bootcamp-benefit title="Persiapan Karier yang Lebih Siap!"
                description="Dapatkan bantuan dalam menyiapkan CV, portofolio, dan persiapan wawancara dari tim dukungan talenta terpercaya dari Diggity." />
        </div>
    </x-wrapper.transparent>

    <x-wrapper.inverse-primary>
        <x-fonts.heading-two class="text-center"
            text="Pilih Karier Impian Anda Sekarang! Bootcamp Terpopuler Bulan Ini" />
        <div class="flex p-2 overflow-x-auto xl:gap-12 lg:gap-8 container-snap">
            <x-button class="shrink-0" text="Semua" />
            <x-button class="shrink-0" text="UI/UX Design" />
            <x-button class="shrink-0" text="Website Development" />
            <x-button class="shrink-0" text="Mobile App Development" />
            <x-button class="shrink-0" text="Cyber Security" />
            <x-button class="shrink-0" text="Data Analysis" />
            <x-button class="shrink-0" text="Digital Marketing" />
        </div>
        <div class="grid grid-cols-3 xl:gap-y-12 lg:gap-y-8 xl:gap-x-7 lg:gap-x-5">
            <x-card.item-popular-bootcamp />
            <x-card.item-popular-bootcamp />
            <x-card.item-popular-bootcamp />
            <x-card.item-popular-bootcamp />
            <x-card.item-popular-bootcamp />
            <x-card.item-popular-bootcamp />
        </div>
        <x-fonts.heading-two class="text-center xl:pt-12 lg:pt-8"
            text="Pilih Bootcamp yang Sesuai dengan Jalur Karier Anda dan Mulai Maju Sekarang" />
        <div class="flex p-2 overflow-x-auto xl:gap-12 lg:gap-8 container-snap">
            <x-button class="shrink-0" text="Semua" />
            <x-button class="shrink-0" text="UI/UX Design" />
            <x-button class="shrink-0" text="Website Development" />
            <x-button class="shrink-0" text="Mobile App Development" />
            <x-button class="shrink-0" text="Cyber Security" />
            <x-button class="shrink-0" text="Data Analysis" />
            <x-button class="shrink-0" text="Digital Marketing" />
        </div>
        <div class="grid grid-cols-3 xl:gap-y-12 lg:gap-y-8 xl:gap-x-7 lg:gap-x-5">
            @for ($i = 0; $i < 6; $i++)
                <x-card.item-bootcamp :src="asset('assets/images/carousels/carousel1.jpeg')" title="Product Management Bootcamp" level="Level Pemula"
                    description="Belajar mengembangkan produk dan berkolaborasi dengan enginer dan UI UX"
                    date="1 Desember 2024" />
            @endfor
        </div>
    </x-wrapper.inverse-primary>

    <x-wrapper.transparent>
        <div class="lg:space-y-4 xl:space-y-6">
            <x-fonts.heading-four class="text-accent" text="Frequently Asked Question" />
            <x-fonts.heading-two text="Pelajari Lebih Lanjut" />
        </div>
        <div class="flex flex-col lg:gap-4 xl:gap-6">
            <x-item-faq question="Bagaimana Bootcamp Diggity membuat kurikulum/konten materi?"
                answer="Kurikulum pembelajaran di Bootcamp Diggity diperbarui secara berkala dengan menerapkan metode flipped learning. Hal ini memungkinkan para peserta untuk mempersiapkan diri sebelum masuk ke dalam kelas, menciptakan pengalaman pembelajaran yang interaktif dan berdua arah. Kurikulum ini dirancang oleh mentor yang berpengalaman dalam bidangnya, sehingga sesuai dengan tuntutan industri. Selain itu, konten materi juga terus diperbarui mengikuti perkembangan tren dan kebutuhan industri." />
            <x-item-faq
                question="Bagaimana saya bisa meyakinkan orang atau perusahaan bahwa saya lulus dari Bootcamp Diggity?"
                answer="Anda akan menerima sertifikat resmi yang ditandatangani oleh President Director Diggity setelah menyelesaikan Bootcamp Diggity. Sertifikat ini bisa Anda tambahkan ke profil LinkedIn Anda untuk meningkatkan kredibilitas." />
            <x-item-faq question="Kapan Bootcamp Diggity dimulai?"
                answer="Pendaftaran Bootcamp Diggity dibuka setiap bulan." />
            <x-item-faq question="Apakah ada jadwal lain untuk setiap sesinya?"
                answer="Untuk saat ini, kami hanya menyediakan satu jadwal pada setiap sesinya, yaitu setiap Sabtu dan Minggu selama 16 minggu. Namun, jika terdapat minat yang besar, kami akan mempertimbangkan untuk membuka kelas dengan jadwal yang berbeda di bootcamp berikutnya." />
            <x-item-faq question="Apakah seluruh program dilakukan secara online?"
                answer="Ya, seluruh proses pembelajaran di Bootcamp Diggity dilakukan secara online melalui platform Zoom. Meskipun online, Anda tetap dapat berinteraksi dengan fasilitator dan peserta lainnya dengan aktif." />
            <x-item-faq question="Apakah ada promosi atau diskon yang sedang berlangsung?"
                answer="Informasi mengenai promosi atau diskon akan diumumkan secara berkala di situs web dan media sosial Diggity. Pastikan untuk selalu memeriksanya agar tidak ketinggalan kesempatan." />
            <x-item-faq question="Apakah akan ada biaya tambahan untuk diskusi di luar jadwal kelas?"
                answer="Tidak, tidak akan ada biaya tambahan untuk diskusi di luar jadwal kelas. Anda dapat berdiskusi dengan teman sekelas dan mentor melalui grup WhatsApp yang telah disediakan tanpa biaya tambahan." />
            <x-item-faq question="Apakah ada bantuan pencarian kerja setelah lulus?"
                answer="Setiap peserta yang lulus memiliki kesempatan untuk mendapatkan bantuan pencarian kerja melalui program Job Connect di Diggity." />
            <x-item-faq question="Apa spesifikasi laptop yang dibutuhkan untuk mengikuti Bootcamp Diggity?">
                <x-slot:answer>
                    Spesifikasi laptop yang direkomendasikan untuk Bootcamp Diggity, terutama untuk Bootcamp seperti
                    Full Stack Web Development, Front End Engineering, Quality Assurance, dan Business Intelligence
                    Analysis adalah sebagai berikut:
                    <ul class="list-disc ps-5">
                        <li>Prosesor minimal Intel Core i5 atau AMD Ryzen 5, direkomendasikan Intel Core i7 atau AMD
                            Ryzen 9.</li>
                        <li>RAM minimal 4GB, direkomendasikan 8GB.</li>
                        <li>Direkomendasikan menggunakan penyimpanan SSD.</li>
                        <li>Jika menggunakan prosesor di bawah Intel Core i5, direkomendasikan memiliki kapasitas RAM di
                            atas 8GB.</li>
                    </ul>
                </x-slot:answer>
            </x-item-faq>
        </div>
    </x-wrapper.transparent>

    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link link="Bootcamp" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</div>
