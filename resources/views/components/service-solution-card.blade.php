@props(['title', 'header' => false])

@if ($header)
    <div class="bg-white shadow-card xl:p-6 lg:p-3.5 lg:space-y-3 xl:space-y-6 h-fit basis-1/4 rounded-xl">
        <img {{ $attributes }} alt="solution image" class="size-24">
        <h3 class="heading-three">{{ $title }}</h3>
        <p class="paragraph">
            {{ $description }}
        </p>
    </div>
@else
    <div class="flex bg-white shadow-card xl:p-6 lg:p-3.5 xl:gap-6 lg:gap-3 rounded items-center">
        <img {{ $attributes }} alt="solution image" class="object-cover h-24 w-36 rounded-xl">
        <p class="my-auto font-semibold paragraph">{{ $title }}</p>
    </div>
@endif
