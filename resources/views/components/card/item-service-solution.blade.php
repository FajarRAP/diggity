@props(['header' => false, 'title', 'description'])

@if ($header)
    <x-card class="flex flex-col xl:basis-1/4 lg:basis-1/3 lg:gap-4 xl:gap-6 h-fit">
        <img {{ $attributes }} alt="solution image" class="lg:size-16 xl:size-24">
        <x-fonts.heading-three :text="$title" />
        <x-fonts.paragraph :text="$description" />
    </x-card>
@else
    <x-card class="flex lg:gap-4 xl:gap-6">
        <img {{ $attributes }} alt="solution image"
            class="object-cover lg:h-16 xl:h-24 lg:w-24 xl:w-36 lg:rounded-md xl:rounded-xl">
        <x-fonts.paragraph class="my-auto font-semibold" :text="$title" />
    </x-card>
@endif
