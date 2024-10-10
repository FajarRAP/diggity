@props(['title', 'description'])

<div class="xl:space-y-6 lg:space-y-4">
    <div class="mx-auto bg-gray-300 rounded-full xl:size-20 lg:size-14"></div>
    <div class="xl:space-y-3 lg:space-y-2">
        <x-fonts.paragraph class="font-semibold" :text="$title" />
        <x-fonts.paragraph-extra-small :text="$description" />
    </div>
</div>
