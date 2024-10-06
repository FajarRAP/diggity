@props(['text'])

<div class="flex items-center gap-1 px-2 py-1 bg-gray-200 rounded-full">
    <x-svgs.info class="xl:size-4 lg:size-2.5 fill-gray-900" />
    <x-fonts.paragraph-extra-small class="font-medium text-gray-900" :text="$text" />
</div>
