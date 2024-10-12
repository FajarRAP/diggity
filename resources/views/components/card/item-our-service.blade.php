@props(['title', 'description', 'href'])

<a href="{{ $href }}" class="block" wire:navigate>

    <x-card class="flex xl:gap-6 lg:gap-4 max-h-72">
        <img {{ $attributes }} alt="icon service card" class="object-cover rounded-lg w-80">
        <div class="flex flex-col justify-center lg:gap-4 xl:gap-6">
            <x-fonts.heading-three :text="$title" />
            <x-fonts.paragraph :text="$description" />
        </div>
    </x-card>
</a>
