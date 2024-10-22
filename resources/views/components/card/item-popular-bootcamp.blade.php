<x-card class="flex flex-col rounded-xl xl:gap-3 lg:gap-2">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="bootcamp item icon" class="rounded-xl">
    <x-fonts.heading-five text="Lorem ipsum dolor sit amet" />
    <x-fonts.paragraph
        text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
    <x-fonts.paragraph text="Batch Terdekat" />
    <x-fonts.paragraph class="font-semibold" text="1 Desember 2024" />
    <x-badges.primary class="w-fit" text="Level Pemula" />
    <div class="flex items-center justify-between">
        <x-fonts.paragraph text="<10 Kursi Tersisa" />
        <x-button text="Segera Habis" />
    </div>
</x-card>
