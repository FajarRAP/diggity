@props(['link'])

<li>
    <div class="flex items-center lg:gap-3 xl:gap-5">
        <x-svgs.arrow class="lg:size-3" />
        <a {{ $attributes }} class="text-breadcumb-link" wire:navigate>
            <x-fonts.paragraph class="font-semibold" :text="$link" />
        </a>
    </div>
</li>
