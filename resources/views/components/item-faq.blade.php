<x-card x-data="{ open: false }" class="space-y-6 hover:cursor-auto">
    <div x-on:click="open=!open" class="flex items-center justify-between gap-3">
        <x-paragraph class="font-medium">{{ $question }}</x-paragraph>
        <x-svgs.arrow x-bind:class="open ? '-rotate-90' : 'rotate-90'" class="transition lg:size-3" />
    </div>
    <div x-show="open" class="text-gray-600 paragraph">{{ $answer }}</div>
</x-card>
