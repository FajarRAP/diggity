<x-app-layout>
    {{-- Top Breadcumb --}}
    <x-wrapper.inverse-primary>
        <x-breadcumb>
            <x-breadcumb-link href="#" link="Layanan" />
        </x-breadcumb>
        <x-hero-header :src="asset('assets/images/carousels/carousel1.jpeg')" title="Layanan"
            description="Diggity menyediakan beragam layanan terbaik yang dirancang khusus untuk memenuhi kebutuhan teknologi dan digitalisasi produk Anda. Kami mengakui bahwa setiap produk memiliki karakteristik uniknya sendiri. Oleh karena itu, jangan sungkan untuk menghubungi kami dan berkonsultasi tentang produk Anda." />
    </x-wrapper.inverse-primary>

    {{-- Our Services --}}
    <x-wrapper.transparent>
        <x-fonts.heading-two text="Layanan yang Kami Sediakan" />
        <x-card.item-our-service :href="route('s-web-dev')" :src="asset('assets/images/services/pages/icon-website-development.jpg')" title="Website Development"
            description="Dengan bantuan tim developer yang berpengalaman, kami selalu memperhitungkan kesesuaian teknologi dengan kebutuhan masing-masing bisnis. Kami memastikan bahwa situs web yang kami bangun tidak hanya cepat, tetapi juga ramah terhadap SEO dan user-friendly." />
        <x-card.item-our-service :href="route('s-mobile-dev')" :src="asset('assets/images/services/pages/icon-mobile-app-development.jpg')" title="Mobile App Development"
            description="Optimalkan mobilitas dan reputasi merek bisnis Anda melalui pengembangan aplikasi mobile (Android & iOS). Capai lebih banyak dan persiapkan bisnis Anda untuk bersaing di era digital saat ini." />
        <x-card.item-our-service :href="route('s-product-dev')" :src="asset('assets/images/services/pages/icon-mvp-development.jpg')" title="MVP Development"
            description="MVP Development Mendapatkan wawasan bisnis dari setiap ide dan konsep melalui pengembangan Minimum Viable Product (MVP). Bangun produk MVP bersama kami untuk menemukan solusi untuk setiap peluang di pasar digital saat ini." />
        <x-card.item-our-service :href="route('s-custom-dev')" :src="asset('assets/images/services/pages/icon-custom-software-development.jpg')" title="Custom Software Development"
            description="Optimalkan perkembangan bisnis dengan mengembangkan  digital yang sesuai dan cocok dengan kebutuhan perusahaan Anda. Tingkatkan efisiensi setiap langkah bisnis untuk mempermudah dan mempercepat prosesnya." />
        <x-card.item-our-service :href="route('s-ui-ux')" :src="asset('assets/images/services/pages/icon-uiux-design.jpg')" title="UI/UX Design"
            description="Layanan ini ditujukan bagi Anda yang menganggap komunikasi visual sebagai elemen krusial dalam menyampaikan pesan, visi, dan misi perusahaan Anda. Efektivitas pengalaman pengguna dalam menggunakan Anda akan memengaruhi tingkat konversi tindakan yang dilakukan oleh pengguna tersebut." />
        <x-card.item-our-service :href="route('s-devops')" :src="asset('assets/images/services/pages/icon-devops-solution.jpg')" title="DevOps Solution"
            description="Kami hadir untuk meningkatkan efisiensi dan keandalan proyek Anda. Bersiaplah untuk menyederhanakan pengiriman perangkat lunak Anda dengan kolaborasi bersama kami. Mari bergandengan tangan dalam menciptakan saluran yang siap menghadapi masa depan. Mulailah perjalanan DevOps Anda sekarang!" />
        <x-card.item-our-service :href="route('s-system-testing')" :src="asset('assets/images/services/pages/icon-system-testing.jpg')" title="System Testing"
            description="Dengan keahlian pengujian kami, kami memastikan bahwa perangkat lunak Anda siap untuk mengatasi berbagai tantangan. Jika Anda siap untuk meningkatkan kekuatan kode Anda, mari kita bekerja sama untuk memastikan kualitasnya!" />
        <x-card.item-our-service :href="route('s-big-data')" :src="asset('assets/images/services/pages/icon-big-data-services.jpg')" title="Big Data Services"
            description="Optimalkan pendapatan bisnis Anda dengan keputusan yang didukung oleh data. Layanan Big Data kami memberi Anda kekuatan untuk mengekstrak wawasan yang dapat diambil tindakan, meningkatkan efisiensi operasional, dan membuat keputusan berdasarkan informasi yang mengarah pada kesuksesan jangka panjang dalam era data yang sangat penting saat ini." />
        <x-card.item-our-service :href="route('s-digital-marketing')" :src="asset('assets/images/services/pages/icon-digital-marketing.jpg')" title="Digital Marketing"
            description="Mendukung beragam jenis bisnis Anda, mulai dari skala kecil seperti bisnis rumahan dan UMKM, hingga bisnis rintisan (startup) dan perusahaan besar, dalam menerapkan strategi pemasaran digital yang efektif." />
    </x-wrapper.transparent>

    {{-- Contact Us Service --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-fonts.heading-two text="Tidak Menemukan Solusi yang Sesuai Kebutuhan Anda?" />
        <x-fonts.paragraph text="Tim kami siap memberikan bantuan dengan senang hati" />
        <x-button class="mx-auto" text="Hubungi Kami" />
    </x-wrapper.inverse-primary>

    {{-- Collaboration Type --}}
    <x-wrapper.transparent>
        <h2 class="heading-two lg:mb-12 xl:mb-24">Model Kerja Sama</h2>
        <div class="grid grid-cols-3 gap-7">
            <x-card.item-collaboration-type :href="route('project-based')" :benefits="[
                'Tim eksklusif yang hanya bekerja untuk Anda.',
                'Mengurangi biaya manajemen sumber daya manusia (SDM).',
                'Menghilangkan kebutuhan untuk mengurus proses perekrutan.',
                'Cocok untuk pengembangan platform digital yang dinamis.',
            ]" title="Project Based"
                description="Tenaga kerja yang dikhususkan untuk menangani proyek Anda." />


            <x-card.item-collaboration-type :href="route('dedicated-team')" :benefits="[
                'Proyek disesuaikan dengan tujuan bisnis Anda.',
                'Harga dan jadwal pengerjaan yang transparan.',
                'Menawarkan garansi kualitas selama satu bulan.',
                'Ideal untuk pengembangan platform digital baru.',
            ]" title="Dedicated Team"
                description="Tim ahli untuk mengembangkan platform digital bisnis perusahaan Anda." />
            <x-card.item-collaboration-type :href="route('on-demand')" :benefits="[
                'Lebih fleksibel dalam menanggapi kebutuhan Anda.',
                'Pengerjaan didasarkan pada permintaan yang diajukan.',
                'Menawarkan biaya yang lebih terjangkau.',
                'Ideal untuk pengembangan fitur dan pemeliharaan platform.',
            ]" title="On Demand"
                description="Tim yang siap untuk menangani segala permasalahan dan kebutuhan platform digital Anda." />

        </div>
    </x-wrapper.transparent>

    {{-- Portfolio --}}
    <x-wrapper.inverse-primary class="text-center">
        <x-carousel carouselNum="2">
            <div class="lg:space-y-8 xl:space-y-12 lg:mb-12 xl:mb-24">
                <x-fonts.heading-two text="Portofolio" />
                <x-fonts.paragraph class="w-2/3 mx-auto"
                    text="Dalam beberapa tahun terakhir, pengalaman kami telah membantu klien memulai langkahnya dalam dunia digital. Lihatlah beberapa karya terbaik yang telah kami hasilkan." />
            </div>
        </x-carousel>
    </x-wrapper.inverse-primary>

    {{-- Technology --}}
    <x-wrapper.transparent>
        <div class="flex xl:gap-12 lg:gap-8">
            <div class="flex flex-col justify-center lg:w-3/4 xl:w-1/2 lg:gap-8 xl:gap-12">
                <x-fonts.heading-one text="100+ Teknologi yang Kami Gunakan" />
                <x-fonts.paragraph
                    text="Perkembangan teknologi berkembang dengan cepat. Kami memastikan teknologi
                    yang kami gunakan dapat memenuhi kebutuhan digitalisasi bisnis Anda secara optimal." />
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
    </x-wrapper.transparent>

    {{-- Contact Us --}}
    <x-wrapper.inverse-primary>
        <x-hero-header-contact-us />
    </x-wrapper.inverse-primary>

    {{-- Bottom Breadcumb --}}
    <x-wrapper.bottom-breadcumb>
        <x-breadcumb>
            <x-breadcumb-link link="Layanan" />
        </x-breadcumb>
    </x-wrapper.bottom-breadcumb>
</x-app-layout>
