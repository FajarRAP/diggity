<div>
    <div class="flex text-white lg:p-16 xl:p-24 bg-tertiary lg:gap-24 xl:gap-36">
        <div class="flex flex-col lg:gap-8 xl:gap-12 w-96">
            <div class="flex items-center lg:gap-4 xl:gap-6">
                <img src="{{ asset('assets/logo.png') }}" alt="logo" class="lg:size-16 xl:size-24">
                <div class="lg:space-y-2 xl:space-y-3">
                    <x-fonts.heading-one text="Diggity" />
                    <x-fonts.paragraph text="Craft Your Digital Dream" />
                </div>
            </div>
            <div class="font-medium lg:space-y-4 xl:space-y-6">
                <x-fonts.paragraph
                    text="Minggiran, Sendangtirto, Kec. Berbah, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55573" />
                <x-fonts.paragraph text="+62 878-4305-2780" />
                <x-fonts.paragraph text="info@diggity.co.id" />
            </div>
            <div class="grid grid-cols-3 lg:gap-6 xl:gap-10 w-fit">
                <x-svgs.facebook class="lg:size-7 xl:size-10" />
                <x-svgs.instagram class="lg:size-7 xl:size-10" />
                <x-svgs.tiktok class="lg:size-7 xl:size-10" />
                <x-svgs.twitter class="lg:size-7 xl:size-10" />
                <x-svgs.linkedin class="lg:size-7 xl:size-10" />
                <x-svgs.youtube class="lg:size-7 xl:size-10" />
            </div>
        </div>
        <div class="grid grid-cols-3 gap-y-12">
            <div class="font-medium lg:space-y-4 xl:space-y-6">
                <x-fonts.heading-two text="Layanan" />
                <x-fonts.paragraph text="Layanan Utama" />
                <x-fonts.paragraph text="Model Kerja Sama" />
                <x-fonts.paragraph text="Portofolio" />
            </div>
            <div class="font-medium lg:space-y-4 xl:space-y-6">
                <x-fonts.heading-two text="Produk" />
                <x-fonts.paragraph text="Produk Utama" />
                <x-fonts.paragraph text="Harga" />
            </div>
            <div class="font-medium lg:space-y-4 xl:space-y-6">
                <x-fonts.heading-two text="Kelas" />
                <x-fonts.paragraph text="Kelas Utama" />
                <x-fonts.paragraph text="Alur Belajar" />
                <x-fonts.paragraph text="Bootcamp" />
                <x-fonts.paragraph text="Webinar" />
                <x-fonts.paragraph text="Universitas dan Perusahaan" />
            </div>
            <div class="font-medium lg:space-y-4 xl:space-y-6">
                <x-fonts.heading-two text="Panduan" />
                <x-fonts.paragraph text="Panduan" />
                <x-fonts.paragraph text="Kolaborasi" />
                <x-fonts.paragraph text="Partner Komersial" />
            </div>
            <div class="font-medium lg:space-y-4 xl:space-y-6">
                <x-fonts.heading-two text="Tentang" />
                <x-fonts.paragraph text="Tentang Diggity" />
                <x-fonts.paragraph text="Mengapa Diggity" />
                <x-fonts.paragraph text="Karir" />
            </div>
        </div>
    </div>
    <div class="flex justify-between font-semibold text-white lg:py-8 xl:py-12 lg:px-16 xl:px-24 bg-oxford-blue">
        <div class="flex items-center lg:gap-4 xl:gap-6">
            <img src="{{ asset('assets/icons/copyright.png') }}" alt="copyright icon" class="xl:size-5 lg:size-3">
            <x-fonts.paragraph text="Copyright 2024 CV Sinergi Cita Digital" />
        </div>
        <div class="flex items-center lg:gap-4 xl:gap-6">
            <x-fonts.paragraph text="Ketentuan Pengguna" />
            <div class="bg-white rounded-full lg:size-2 xl:size-3"></div>
            <x-fonts.paragraph text="Kebijakan Privasi" />
        </div>
    </div>
</div>
