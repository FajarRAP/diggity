@props(['title', 'description'])

<x-card class="flex items-center text-left xl:gap-3 lg:gap-2">
    <div class="bg-gray-300 rounded-full xl:size-16 lg:size-10 shrink-0"></div>
    <div class="xl:space-y-3 lg:space-y-2">
        <x-fonts.paragraph :text="$title" />
        <x-fonts.paragraph-small :text="$description" />
    </div>
</x-card>
