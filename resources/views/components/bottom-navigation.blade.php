@props(['prev', 'next'])

<div class="flex justify-between">
    <div class="flex flex-col lg:gap-4 xl:gap-6">
        <x-heading-four class="text-accent">Previous</x-heading-four>
        <a href={{ route(Str::slug($prev, '-')) }} wire:navigate>
            <div class="flex items-center lg:gap-4 xl:gap-6">
                <div
                    class="flex items-center justify-center border-gray-900 rounded-full lg:border-2 xl:border-4 lg:size-6 xl:size-10">
                    <x-svgs.arrow class="rotate-180 lg:size-3" />
                </div>
                <x-heading-two>{{ $prev }}</x-heading-two>
            </div>
        </a>
    </div>
    <div class="flex flex-col lg:gap-4 xl:gap-6">
        <x-heading-four class="text-accent text-end">Next</x-heading-four>
        <a href={{ route(Str::slug($next, '-')) }} wire:navigate>
            <div class="flex flex-row-reverse items-center lg:gap-4 xl:gap-6">
                <div
                    class="flex items-center justify-center border-gray-900 rounded-full lg:border-2 xl:border-4 lg:size-6 xl:size-10">
                    <x-svgs.arrow class="lg:size-3" />
                </div>
                <x-heading-two>{{ $next }}</x-heading-two>
            </div>
        </a>
    </div>
</div>
