@props(['title', 'description'])

<div class="xl:space-y-6 lg:space-y-4">
    <x-fonts.heading-two :text="$title" />
    <x-fonts.paragraph :text="$description" />
</div>
