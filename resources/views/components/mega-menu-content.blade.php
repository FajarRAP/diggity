@props(['title'])

<div {{ $attributes }} class="flex flex-col w-full lg:p-2 xl:p-3 lg:gap-5 xl:gap-7">
    <x-fonts.heading-three :text="$title" />
    <div class="grid grid-cols-2 lg:gap-y-6 xl:gap-y-10 lg:gap-x-5 xl:gap-x-7">
        {{ $items }}
    </div>
    {{ $slot }}
</div>
