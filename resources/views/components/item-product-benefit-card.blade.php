<x-card class="rounded-lg lg:space-y-4 xl:space-y-6">
    <img {{ $attributes->merge(['class' => 'lg:size-16 xl:size-24']) }} alt="benefit image">
    <x-paragraph class="font-semibold">{{ $title }}</x-paragraph>
    <x-paragraph-small>{{ $description }}</x-paragraph-small>
</x-card>
