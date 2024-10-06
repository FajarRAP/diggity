<x-card class="flex items-center lg:gap-4 xl:gap-6">
    <img {{ $attributes->merge(['class' => 'lg:size-14 xl:size-20']) }} alt="price image">
    <x-paragraph>{{ $title }}</x-paragraph>
</x-card>
