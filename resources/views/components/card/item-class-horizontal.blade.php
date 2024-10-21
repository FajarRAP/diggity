<a href="{{ route('academy-class-item', ['category' => 'web-dev', 'name' => 'dart-pemula']) }}" {{ $attributes }}
    wire:navigate>
    <x-card class="flex items-center xl:gap-6 lg:gap-4">
        <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="class image" class="rounded xl:w-60 lg:w-40">
        <div class="xl:space-y-6 lg:space-y-4">
            <x-fonts.heading-three text="Title" />
            <div class="flex items-center xl:gap-6 lg:gap-4">
                <x-fonts.paragraph class="font-semibold" text="Rating" />
                <img src="{{ asset('assets/icons/star-filled.png') }}" alt="star" class="xl:size-5 lg:size-3">
                <x-fonts.paragraph text="User Registered" />
            </div>
            <div class="flex items-center xl:gap-6 lg:gap-4">
                <img src="{{ asset('assets/icons/time.png') }}" alt="time icon" class="xl:size-5 lg:size-3 -me-3">
                <x-fonts.paragraph text="12 total jam" />
                <img src="{{ asset('assets/icons/video.png') }}" alt="video icon" class="xl:size-5 lg:size-3 -me-3">
                <x-fonts.paragraph text="100 pelajaran" />
                <img src="{{ asset('assets/icons/signal.png') }}" alt="level icon" class="xl:size-5 lg:size-3 -me-3">
                <x-fonts.paragraph text="Ahli" />
            </div>
        </div>
        <x-fonts.heading-three class="self-start font-bold text-accent ms-auto" text="Price" />
    </x-card>
</a>
