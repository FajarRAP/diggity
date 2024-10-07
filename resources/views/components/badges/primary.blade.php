@props(['text'])

<div class="px-2 py-1 rounded-full bg-secondary h-fit">
    <x-paragraph-small {{ $attributes->class(['font-medium text-primary']) }}>{{ $text }}</x-paragraph-small>
</div>
