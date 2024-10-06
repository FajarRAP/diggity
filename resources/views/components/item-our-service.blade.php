<x-card class="flex xl:gap-6 lg:gap-4 max-h-72">
    <img {{ $attributes }} alt="icon service card" class="object-cover rounded-lg w-80">
    <div class="flex flex-col justify-center lg:gap-4 xl:gap-6">
        <x-heading-three>{{ $title }}</x-heading-three>
        <x-paragraph>{{ $description }}</x-paragraph>
    </div>
</x-card>
