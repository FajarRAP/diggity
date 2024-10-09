@props(['carouselNum'])

<div id="default-carousel-{{ $carouselNum }}" class="w-full h-fit">
    {{ $slot }}
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg lg:mb-12 xl:mb-24 md:h-96 text-start">
        @for ($i = 1; $i <= 4; $i++)
            <div id="c-item-{{ $i }}-{{ $carouselNum }}" class="hidden duration-700 ease-in-out ">
                <div class="absolute block w-full -translate-x-1/2 -translate-y-1/2 h-96 top-1/2 left-1/2">
                    <x-hero-header :src="asset('assets/images/carousels/carousel1.jpeg')" title="Siapkah Anda untuk Mendigitalisasi Bisnis?"
                        description="Bergabunglah dengan Diggity untuk mengembangkan platform digital khusus
                        untuk bisnis Anda. Dengan layanan kami, Anda dapat membuat situs web, aplikasi mobile, dan sistem internal yang sesuai dengan kebutuhan bisnis Anda sendiri.">
                    </x-hero-header>
                </div>
            </div>
        @endfor
    </div>
    <!-- Slider indicators -->
    <div class="relative">
        <div class="absolute bottom-0 z-30 flex items-center space-x-3 -translate-x-1/2 left-1/2">
            <button id="c-prev-{{ $carouselNum }}" type="button"
                class="flex items-center justify-center rounded-full cursor-pointer shadow-card-secondary group">
                <span
                    class="inline-flex items-center justify-center bg-white rounded-full size-8 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                    <x-svgs.arrow class="rotate-180 size-3"></x-svgs.arrow>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            @for ($i = 1; $i <= 4; $i++)
                <button id="c-indicator-{{ $i }}-{{ $carouselNum }}" type="button"
                    class="rounded-full size-3"></button>
            @endfor
            <button id="c-next-{{ $carouselNum }}" type="button"
                class="flex items-center justify-center rounded-full cursor-pointer shadow-card-secondary group">
                <span
                    class="inline-flex items-center justify-center bg-white rounded-full size-8 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
                    <x-svgs.arrow class="size-3"></x-svgs.arrow>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>
    <!-- Slider controls -->
</div>
