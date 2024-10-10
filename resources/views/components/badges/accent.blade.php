@props(['text'])

<div class="px-2 py-1 rounded-full bg-inverse-accent h-fit">
    <x-fonts.paragraph-small {{ $attributes->class(['font-medium text-accent']) }} :text="$text" />
</div>
