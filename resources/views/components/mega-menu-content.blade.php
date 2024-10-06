<div {{ $attributes }} class="flex flex-col w-full p-3 gap-7">
    <x-heading-three>{{ $title }}</x-heading-three>
    <div class="grid grid-cols-2 lg:gap-y-6 xl:gap-y-10 lg:gap-x-5 xl:gap-x-8">
        {{ $items }}
    </div>
    {{ $more }}
</div>
