<x-app-layout>
    {{-- Top Breadcumb --}}
    <x-wrapper bg="bg-secondary">
        <x-breadcumb>
            <x-breadcumb-link>
                Layanan
            </x-breadcumb-link>
        </x-breadcumb>
        <x-hero-header :src="asset('assets/images/carousels/carousel1.jpeg')">
            <x-slot:type>Layanan</x-slot:type>
            <x-slot:description>
                Diggity menyediakan beragam layanan terbaik yang dirancang khusus untuk memenuhi kebutuhan teknologi
                dan digitalisasi produk Anda. Kami mengakui bahwa setiap produk memiliki karakteristik uniknya
                sendiri. Oleh karena itu, jangan sungkan untuk menghubungi kami dan berkonsultasi tentang produk
                Anda.
            </x-slot:description>
        </x-hero-header>
    </x-wrapper>

    {{-- Our Services --}}
    <x-wrapper>
        <h2 class="heading-two lg:mb-12 xl:mb-24">Layanan yang Kami Sediakan</h2>
        <a href="{{ route('s-web-dev') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-website-development.jpg')">
                <x-slot:title>Website Development</x-slot:title>
                <x-slot:description>
                    Dengan bantuan tim developer yang berpengalaman, kami selalu memperhitungkan
                    kesesuaian teknologi dengan kebutuhan masing-masing bisnis. Kami memastikan bahwa situs web yang
                    kami bangun tidak hanya cepat, tetapi juga ramah terhadap SEO dan user-friendly.
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-mobile-dev') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-mobile-app-development.jpg')">
                <x-slot:title>Mobile App Development</x-slot:title>
                <x-slot:description>
                    Optimalkan mobilitas dan reputasi merek bisnis Anda melalui pengembangan aplikasi mobile (Android &
                    iOS). Capai lebih banyak pelanggan dan persiapkan bisnis Anda untuk bersaing di era digital saat
                    ini.
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-product-dev') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-mvp-development.jpg')">
                <x-slot:title>MVP Development</x-slot:title>
                <x-slot:description>
                    MVP Development
                    Mendapatkan wawasan bisnis dari setiap ide dan konsep melalui pengembangan Minimum Viable Product
                    (MVP). Bangun produk MVP bersama kami untuk menemukan solusi untuk setiap peluang bisnis di pasar
                    digital saat ini.
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-custom-dev') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-custom-software-development.jpg')">
                <x-slot:title>Custom Software Development</x-slot:title>
                <x-slot:description>
                    Optimalkan perkembangan bisnis dengan mengembangkan platform digital yang sesuai dan cocok dengan
                    kebutuhan perusahaan Anda. Tingkatkan efisiensi setiap langkah bisnis untuk mempermudah dan
                    mempercepat prosesnya.
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-ui-ux') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-uiux-design.jpg')">
                <x-slot:title>UI/UX Design</x-slot:title>
                <x-slot:description>
                    Layanan ini ditujukan bagi Anda yang menganggap komunikasi visual sebagai elemen krusial dalam
                    menyampaikan pesan, visi, dan misi perusahaan Anda. Efektivitas pengalaman pengguna dalam
                    menggunakan produk Anda akan memengaruhi tingkat konversi tindakan yang dilakukan oleh pengguna
                    tersebut.
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-devops') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-devops-solution.jpg')">
                <x-slot:title>DevOps Solution</x-slot:title>
                <x-slot:description>
                    Kami hadir untuk meningkatkan efisiensi dan keandalan proyek Anda. Bersiaplah untuk menyederhanakan
                    pengiriman perangkat lunak Anda dengan kolaborasi bersama kami. Mari bergandengan tangan dalam
                    menciptakan saluran yang siap menghadapi masa depan. Mulailah perjalanan DevOps Anda sekarang!
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-system-testing') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-system-testing.jpg')">
                <x-slot:title>System Testing</x-slot:title>
                <x-slot:description>
                    Dengan keahlian pengujian kami, kami memastikan bahwa perangkat lunak Anda siap untuk mengatasi
                    berbagai tantangan. Jika Anda siap untuk meningkatkan kekuatan kode Anda, mari kita bekerja sama
                    untuk memastikan kualitasnya!
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-big-data') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-big-data-services.jpg')">
                <x-slot:title>Big Data Services</x-slot:title>
                <x-slot:description>
                    Optimalkan pendapatan bisnis Anda dengan keputusan yang didukung oleh data. Layanan Big Data kami
                    memberi Anda kekuatan untuk mengekstrak wawasan yang dapat diambil tindakan, meningkatkan efisiensi
                    operasional, dan membuat keputusan berdasarkan informasi yang mengarah pada kesuksesan jangka
                    panjang dalam era data yang sangat penting saat ini.
                </x-slot:description>
            </x-item-our-service>
        </a>
        <a href="{{ route('s-digital-marketing') }}" class="block" wire:navigate>
            <x-item-our-service :src="asset('assets/images/services/pages/icon-digital-marketing.jpg')">
                <x-slot:title>Digital Marketing</x-slot:title>
                <x-slot:description>
                    Mendukung beragam jenis bisnis Anda, mulai dari skala kecil seperti bisnis rumahan dan UMKM, hingga
                    bisnis rintisan (startup) dan perusahaan besar, dalam menerapkan strategi pemasaran digital yang
                    efektif.
                </x-slot:description>
            </x-item-our-service>
        </a>
    </x-wrapper>

    {{-- Contact Us Service --}}
    <x-wrapper bg="bg-secondary" class="text-center">
        <x-heading-two>Tidak Menemukan Solusi yang Sesuai Kebutuhan Anda?</x-heading-two>
        <x-paragraph>Tim kami siap memberikan bantuan dengan senang hati</x-paragraph>
        <x-button class="mx-auto">Hubungi Kami</x-button>
    </x-wrapper>

    {{-- Collaboration Type --}}
    <x-wrapper>
        <h2 class="heading-two lg:mb-12 xl:mb-24">Model Kerja Sama</h2>
        <div class="grid grid-cols-3 gap-7">
            <x-item-collaboration-type :href="route('project-based')" :benefits="[
                'Tim eksklusif yang hanya bekerja untuk Anda.',
                'Mengurangi biaya manajemen sumber daya manusia (SDM).',
                'Menghilangkan kebutuhan untuk mengurus proses perekrutan.',
                'Cocok untuk pengembangan platform digital yang dinamis.',
            ]">
                <x-slot:title>
                    Project Based
                </x-slot:title>
                <x-slot:description>
                    Tenaga kerja yang dikhususkan untuk menangani proyek Anda.
                </x-slot:description>
            </x-item-collaboration-type>

            <x-item-collaboration-type :href="route('dedicated-team')" :benefits="[
                'Proyek disesuaikan dengan tujuan bisnis Anda.',
                'Harga dan jadwal pengerjaan yang transparan.',
                'Menawarkan garansi kualitas selama satu bulan.',
                'Ideal untuk pengembangan platform digital baru.',
            ]">
                <x-slot:title>
                    Dedicated Team
                </x-slot:title>
                <x-slot:description>
                    Tim ahli untuk mengembangkan platform digital bisnis perusahaan Anda.
                </x-slot:description>
            </x-item-collaboration-type>
            <x-item-collaboration-type :href="route('on-demand')" :benefits="[
                'Lebih fleksibel dalam menanggapi kebutuhan Anda.',
                'Pengerjaan didasarkan pada permintaan yang diajukan.',
                'Menawarkan biaya yang lebih terjangkau.',
                'Ideal untuk pengembangan fitur dan pemeliharaan platform.',
            ]">
                <x-slot:title>
                    On Demand
                </x-slot:title>
                <x-slot:description>
                    Tim yang siap untuk menangani segala permasalahan dan kebutuhan platform digital Anda.
                </x-slot:description>
            </x-item-collaboration-type>
        </div>
    </x-wrapper>

    {{-- Portfolio --}}
    <x-wrapper bg="bg-secondary" class="text-center">
        <x-carousel carouselNum="2">
            <div class="lg:space-y-8 xl:space-y-12 lg:mb-12 xl:mb-24">
                <x-heading-two>Portofolio</x-heading-two>
                <x-paragraph class="mx-auto lg:w-1/2 xl:w-3/4">
                    Dalam beberapa tahun terakhir, pengalaman kami telah membantu klien memulai langkahnya
                    dalam dunia digital. Lihatlah beberapa karya terbaik yang telah kami hasilkan.
                </x-paragraph>
            </div>
        </x-carousel>
    </x-wrapper>

    {{-- Technology --}}
    <x-wrapper>
        <div class="flex xl:gap-12 lg:gap-8">
            <div class="flex flex-col justify-center lg:w-3/4 xl:w-1/2 lg:gap-8 xl:gap-12">
                <x-heading-one>100+ <br> Teknologi yang Kami Gunakan</x-heading-one>
                <x-paragraph>
                    Perkembangan teknologi berkembang dengan cepat. Kami memastikan teknologi
                    yang kami gunakan dapat memenuhi kebutuhan digitalisasi bisnis Anda secara optimal.
                </x-paragraph>
            </div>
            <div class="grid grid-cols-5 lg:gap-8 xl:gap-12 grow">
                <x-item-technology :src="asset('assets/icons/figma.png')" />
                <x-item-technology :src="asset('assets/icons/vue.png')" />
                <x-item-technology :src="asset('assets/icons/flutter.png')" />
                <x-item-technology :src="asset('assets/icons/python.png')" />
                <x-item-technology :src="asset('assets/icons/laravel.png')" />
                <x-item-technology :src="asset('assets/icons/react.png')" />
                <x-item-technology :src="asset('assets/icons/kotlin.png')" />
                <x-item-technology :src="asset('assets/icons/blender.png')" />
                <x-item-technology :src="asset('assets/icons/go.png')" />
                <x-item-technology :src="asset('assets/icons/msoffice.png')" />
            </div>
        </div>
    </x-wrapper>

    {{-- Contact Us --}}
    <x-wrapper bg="bg-secondary">
        <x-hero-header-contact-us />
    </x-wrapper>

    {{-- Bottom Breadcumb --}}
    <x-wrapper :bottomBreadcumb="true">
        <x-breadcumb>
            <x-breadcumb-link>
                Layanan
            </x-breadcumb-link>
        </x-breadcumb>
    </x-wrapper>

    <x-footer />
</x-app-layout>
