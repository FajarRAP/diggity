@props(['title', 'description'])

<div class="text-center">
    <img {{ $attributes->merge(['class' => 'size-20 mx-auto']) }} alt="solution image">
    <h6 class="font-semibold paragraph lg:mt-3 xl:mt-6 lg:mb-1.5 xl:mb-3">{{ $title }}</h6>
    <p class="text-xs">{{ $description }}</p>
</div>
