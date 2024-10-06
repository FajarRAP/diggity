<x-card class="lg:space-y-4 xl:space-y-6">
    <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="course image" class="rounded">
    <div class="space-y-3">
        <x-heading-four>Judul Kelas</x-heading-four>
        <x-heading-four class="text-accent">Rp. 150.000</x-heading-four>
        <img src="{{ asset('assets/icons/star-filled.png') }}" alt="star" class="xl:size-6 lg:size-4 ">
    </div>
    <div class="space-y-3">
        <div class="flex gap-3">
            <img src="{{ asset('assets/icons/person-many.png') }}" alt="user registered" class="xl:size-6 lg:size-4">
            <x-paragraph>Number User Registered</x-paragraph>
        </div>
        <div class="flex gap-3">
            <img src="{{ asset('assets/icons/signal.png') }}" alt="courses level" class="xl:size-6 lg:size-4">
            <x-paragraph>Kind of Course Level</x-paragraph>
        </div>
    </div>
</x-card>
