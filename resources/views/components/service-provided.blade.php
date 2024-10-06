@props(['title', 'description'])

<div class="xl:space-y-6 lg:space-y-4">
    <x-heading-two>{{ $title }}</x-heading-two>
    <x-paragraph>{{ $description }}</x-paragraph>
</div>
