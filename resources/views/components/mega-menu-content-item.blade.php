@props(['title'])


<a {{ $attributes->merge(['class' => '']) }} wire:navigate>
    <div class="p-3 rounded lg:space-y-2 xl:space-y-3 hover:shadow hover:cursor-pointer">
        <x-fonts.paragraph class="font-semibold" :text="$title" />
        <x-fonts.paragraph-small :text="$description" />
    </div>
</a>
