<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect(route('home', absolute: false), navigate: true);
    }
};

?>

<nav x-data="{
    services: false,
    products: false,
    courses: false,
    guides: false,
    about: false,
    langs: false,
    isActive(navlink) { return navlink ? 'md:border-primary' : 'md:border-transparent'; },
}" class="sticky top-0 z-50 bg-white shadow-navigation">
    <div class="container flex justify-between mx-auto lg:py-2.5 xl:py-4">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center space-x-3" wire:navigate>
            <img src="{{ asset('assets/logo.png') }}" class="lg:size-10 xl:size-14" alt="Diggity Logo" />
            <x-fonts.heading-two text="Diggity" />
        </a>
        {{-- Nav Links --}}
        <div class="flex items-center justify-between w-auto font-medium">
            <ul class="flex items-center lg:gap-8 xl:gap-12">
                <li>
                    <x-nav-link x-on:click="services=!services" x-bind:class="isActive(services)">
                        <x-fonts.paragraph text="Layanan" />
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="products=!products" x-bind:class="isActive(products)">
                        <x-fonts.paragraph text="Produk" />
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="courses=!courses" x-bind:class="isActive(courses)"
                        x-on:click.outside="courses=false">
                        <x-fonts.paragraph text="Kelas" />
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="guides=!guides" x-bind:class="isActive(guides)"
                        x-on:click.outside="guides=false">
                        <x-fonts.paragraph text="Panduan" />
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="about=!about" x-bind:class="isActive(about)"
                        x-on:click.outside="about=false">
                        <x-fonts.paragraph text="Tentang" />
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link x-on:click="langs=!langs" x-bind:class="isActive(langs)"
                        x-on:click.outside="langs=false">
                        <div class="flex items-center">
                            <x-svgs.globe class="me-2 xl:size-6 lg:size-4" />
                            <x-fonts.paragraph text="ID" />
                        </div>
                    </x-nav-link>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="block" wire:navigate>
                        <x-outline-button text="Sign In" />
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="block" wire:navigate>
                        <x-button text="Sign Up" />
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Mega Menu Service --}}
    <x-mega-menu x-show="services" x-on:click.outside="services=false" x-data="{ active: 0 }">
        <x-slot:link>
            <li>
                <x-mega-menu-link x-on:click="active = 0" num="0" title="Layanan Utama"
                    description="Layanan terbaik yang diformulasikan untuk menjawab kebutuhan Anda akan
                        teknologi dan digitalisasi produk." />
            </li>
            <li>
                <x-mega-menu-link x-on:click="active = 1" num="1" title="Model Kerja Sama"
                    description="Project model yang sesuai dengan kebutuhan Anda" />
            </li>
            <li>
                <x-mega-menu-link x-on:click="active = 2" num="2" title="Portfolio"
                    description="Merupakan suatu kehormatan bagi kami untuk menampilkan karya terbaik kami" />
            </li>
        </x-slot:link>
        <x-slot:content>
            <x-mega-menu-content x-show="active === 0" title="Layanan Utama">
                <x-slot:items>
                    <x-mega-menu-content-item title="Website Development"
                        description="Bangun website yang cepat, efektif, dan mudah digunakan" :href="route('s-web-dev')" />
                    <x-mega-menu-content-item title="Mobile App Development"
                        description="Tingkatkan mobilitas dan brand bisnis dengan membangun aplikasi mobile (Android & iOS)"
                        :href="route('s-mobile-dev')" />
                    <x-mega-menu-content-item title="MVP Development"
                        description="Ketahui peluang bisnis dari setiap ide dan gagasan dengan mengembangkan produk MVP"
                        :href="route('s-product-dev')" />
                    <x-mega-menu-content-item title="Custom Software Development"
                        description="Percepat laju bisnis dengan membangun platform digital yang tepat dan sesuai kebutuhan bisnis perusahaan."
                        :href="route('s-custom-dev')" />
                    <x-mega-menu-content-item title="UI/UX Design"
                        description="Desain komunikasi visual merupakan satu hal penting" :href="route('s-ui-ux')" />
                    <x-mega-menu-content-item title="Digital Marketing"
                        description="Pemasaran digital untuk berbagai tahapan bisnis Anda" :href="route('s-digital-marketing')" />
                </x-slot:items>

                <x-mega-menu-content-more contentType="Layanan" :href="route('service')" />
            </x-mega-menu-content>
            <x-mega-menu-content x-show="active === 1" title="Model Kerja Sama">
                <x-slot:items>
                    <x-mega-menu-content-item title="Dedicated Team"
                        description="Staff yang didedikasikan khusus untuk mengerjakan project Anda"
                        :href="route('dedicated-team')" />
                    <x-mega-menu-content-item title="Project Based"
                        description="Tim profesional untuk mengembangkan platform digital bisnis perusahaan Anda"
                        :href="route('project-based')" />
                    <x-mega-menu-content-item title="On Demand"
                        description="Tim yang siap sedia untuk permasalahan dan kebutuhan platform digital Anda"
                        :href="route('on-demand')" />
                </x-slot:items>
            </x-mega-menu-content>
            <x-mega-menu-content x-show="active === 2" title="Portofolio">
                <x-slot:items>
                    <x-mega-menu-content-item title="Portofolio"
                        description="Kualitas terbaik pada setiap hasil project dan kolaborasi yang telah kami kerjakan"
                        :href="route('portfolio')" />
                </x-slot:items>
            </x-mega-menu-content>
        </x-slot:content>
    </x-mega-menu>

    {{-- Mega Menu Product --}}
    <x-mega-menu x-show="products" x-on:click.outside="products=false" x-data="{ active: 0 }">
        <x-slot:link>
            <li>
                <x-mega-menu-link x-on:click="active = 0" num="0" title="Produk Utama"
                    description="Inovasi software-as-a-service untuk manajemen bisnis" />
            </li>
            <li>
                <x-mega-menu-link x-on:click="active = 1" num="1" title="Harga"
                    description="Temukan pilihan paket harga yang tepat untuk kebutuhan bisnis Anda" />
            </li>
        </x-slot:link>
        <x-slot:content>
            <x-mega-menu-content x-show="active === 0" title="Produk Utama">
                <x-slot:items>
                    <x-mega-menu-content-item title="Diggity HR" description="Software HR & manajemen karyawan"
                        :href="route('product-hr')" />
                    <x-mega-menu-content-item title="Diggity Contact" description=" Software CRM & omnichannel"
                        :href="route('product-crm')" />
                    <x-mega-menu-content-item title="Diggity Accounting"
                        description=" Software akuntansi & supply chain" :href="route('product-accountant')" />
                    <x-mega-menu-content-item title="Diggity Tax"
                        description="Software manajemen pajak karyawan & bisnis" :href="route('product-tax')" />
                    <x-mega-menu-content-item title="Diggity Benefit" description="Software manajemen dukungan karyawan"
                        :href="route('product-benefit-management')" />
                    <x-mega-menu-content-item title="Diggity Signature"
                        description="Software otorisasi & tanda tangan digital" :href="route('product-sign')" />
                </x-slot:items>

                <x-mega-menu-content-more contentType="Produk" :href="route('product')" />
            </x-mega-menu-content>
            <x-mega-menu-content x-show="active === 1" title="Model Kerja Sama">
                <x-slot:items>
                    <x-mega-menu-content-item title="Harga"
                        description="Anda dapat memilih antara paket bulanan atau tahunan, sesuai dengan kebutuhan bisnis Anda."
                        :href="route('price')" />
                </x-slot:items>
            </x-mega-menu-content>
        </x-slot:content>
    </x-mega-menu>
</nav>
