<x-card class="flex items-center xl:gap-6 lg:gap-4 shadow-card-secondary">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="certification bundle image"
        class="rounded-full xl:size-20 lg:size-14">
    <div class="flex flex-col grow xl:gap-6 lg:gap-4">
        <x-heading-three>Certification Bundle Title</x-heading-three>
        <div class="flex justify-between">
            <x-badges.primary text="10 Program" />
            <a href="" class="flex items-center gap-1 font-medium hover:underline text-primary">
                <x-paragraph>Lihat Detail</x-paragraph>
                <x-svgs.arrow-android class="xl:size-4 lg:size-2.5 fill-primary" />
            </a>
        </div>
    </div>
</x-card>
