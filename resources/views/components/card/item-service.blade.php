@props(['title', 'description'])

<x-card class="flex flex-col text-left lg:gap-4 xl:gap-6">
    <x-fonts.heading-three :text="$title" />
    <img src="{{ asset('assets/images/services/service-' . Str::slug($title, '-') . '.jpeg') }}" alt="card image"
        class="object-cover w-full rounded-lg h-44">
    <x-fonts.paragraph :text="$description" />
    <x-outline-button class="mt-auto w-fit" text="Pelajari Selengkapnya" />
</x-card>
