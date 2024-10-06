<li>
    <div class="flex items-center lg:gap-3 xl:gap-5">
        <x-svgs.arrow class="lg:size-3" />
        <a {{ $attributes }} class="text-breadcumb-link">
            <x-paragraph class="font-semibold">{{ $slot }}</x-paragraph>
        </a>
    </div>
</li>
