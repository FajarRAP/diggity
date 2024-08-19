@props(['title', 'description', 'benefits', 'reversed' => false])

<div class="grid grid-cols-2 lg:gap-20 xl:gap-32">
    @if ($reversed)
        <div class="flex flex-col xl:gap-6 lg:gap-3.5">
            <h3 class="heading-three">{{ $title }}</h3>
            <p class="paragraph">{{ $description }}</p>
            @foreach ($benefits as $benefit)
                <x-check-circle :benefit="$benefit" />
            @endforeach
            <x-outline-button class="lg:mt-3 xl:mt-6 w-fit">Pelajari Selengkapnya</x-outline-button>
        </div>
        <img {{ $attributes->merge(['class' => 'my-auto rounded-2xl']) }} alt="body image">
    @else
        <img {{ $attributes->merge(['class' => 'my-auto rounded-2xl']) }} alt="body image">
        <div class="flex flex-col xl:gap-6 lg:gap-3.5">
            <h3 class="heading-three">{{ $title }}</h3>
            <p class="paragraph">{{ $description }}</p>
            @foreach ($benefits as $benefit)
                <x-check-circle :benefit="$benefit" />
            @endforeach
            <x-outline-button class="self-end lg:mt-3 xl:mt-6 w-fit">Pelajari Selengkapnya</x-outline-button>
        </div>
    @endif
</div>
