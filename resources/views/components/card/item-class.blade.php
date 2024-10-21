<a href="{{ route('academy-class-item', ['category' => 'web-dev', 'name' => 'dart-pemula']) }}" wire:navigate>
    <x-card class="lg:space-y-4 xl:space-y-6">
        <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="course image" class="rounded">
        <div class="space-y-3">
            <x-fonts.heading-four text="Judul Kelas" />
            <x-fonts.heading-four class="text-accent" text="Rp. 150.000" />
            <img src="{{ asset('assets/icons/star-filled.png') }}" alt="star" class="xl:size-6 lg:size-4 ">
        </div>
        <div class="space-y-3">
            <div class="flex gap-3">
                <img src="{{ asset('assets/icons/person-many.png') }}" alt="user registered"
                    class="xl:size-6 lg:size-4">
                <x-fonts.paragraph text="Number User Registered" />
            </div>
            <div class="flex gap-3">
                <img src="{{ asset('assets/icons/signal.png') }}" alt="courses level" class="xl:size-6 lg:size-4">
                <x-fonts.paragraph text="Kind of Course Level" />
            </div>
        </div>
    </x-card>
</a>
