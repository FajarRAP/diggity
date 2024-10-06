<div class="grid grid-cols-2 xl:gap-24 lg:gap-12 lg:pt-12 xl:pt-24 xl:pb-12 lg:pb-6">
    <div class="lg:space-y-3 xl:space-y-6">
        <x-heading-three class="text-accent">Frequently Asked Questions</x-heading-three>
        <x-heading-two>{{ $title }}</x-heading-two>
        <x-paragraph>{{ $description }}</x-paragraph>
    </div>
    <div class="flex flex-col lg:gap-4 xl:gap-6">
        {{ $slot }}
    </div>
</div>
