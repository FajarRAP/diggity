@props(['title'])

<div class="lg:space-y-2 xl:space-y-3">
    <x-fonts.paragraph class="font-semibold" :text="$title" />
    <x-fonts.paragraph-small :text="$description" />
</div>
