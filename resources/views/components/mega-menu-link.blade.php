@props(['num', 'title', 'description'])

<div {{ $attributes }}
    class="rounded-lg lg:p-2 xl:p-3 lg:space-y-4 xl:space-y-6 hover:bg-gray-100 hover:cursor-pointer">
    <x-fonts.heading-three :text="$title" />
    <x-fonts.paragraph class="text-gray-500" :text="$description" />
    <hr x-bind:class="active === {{ $num }} ? 'visible' : 'invisible'" class="border-b-2 border-b-primary">
</div>
