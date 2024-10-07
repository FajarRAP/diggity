<x-card class="flex items-center xl:gap-6 lg:gap-4">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="class image" class="rounded xl:w-60 lg:w-40">
    <div class="xl:space-y-6 lg:space-y-4">
        <x-heading-three>Title</x-heading-three>
        <div class="flex items-center xl:gap-6 lg:gap-4">
            <x-paragraph class="font-semibold">Rating</x-paragraph>
            <img src="{{ asset('assets/icons/star-filled.png') }}" alt="star" class="xl:size-5 lg:size-3">
            <x-paragraph>User Registered</x-paragraph>
        </div>
        <div class="flex items-center xl:gap-6 lg:gap-4">
            <img src="{{ asset('assets/icons/time.png') }}" alt="time icon" class="xl:size-5 lg:size-3 -me-3">
            <x-paragraph>12 total jam</x-paragraph>
            <img src="{{ asset('assets/icons/video.png') }}" alt="video icon" class="xl:size-5 lg:size-3 -me-3">
            <x-paragraph>100 pelajaran</x-paragraph>
            <img src="{{ asset('assets/icons/signal.png') }}" alt="level icon" class="xl:size-5 lg:size-3 -me-3">
            <x-paragraph>Ahli</x-paragraph>
        </div>
    </div>
    <x-heading-three class="self-start font-bold text-accent ms-auto">Price</x-heading-three>
</x-card>
