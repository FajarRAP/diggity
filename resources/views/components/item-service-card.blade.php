<x-card class="flex flex-col text-left lg:gap-4 xl:gap-6">
    <x-heading-three>{{ $title }}</x-heading-three>
    <img src="{{ asset('assets/images/services/service-' . Str::slug($title, '-') . '.jpeg') }}" alt="card image"
        class="object-cover w-full rounded-lg h-44">
    <x-paragraph>{{ $description }}</x-paragraph>
    <x-outline-button class="mt-auto w-fit">
        Pelajari Selengkapnya
    </x-outline-button>
</x-card>
