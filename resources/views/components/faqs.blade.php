@props(['title', 'description'])

<div class="grid grid-cols-2 xl:gap-24 lg:gap-12 lg:pt-16 xl:pt-24 xl:pb-12 lg:pb-8">
    <div class="lg:space-y-4 xl:space-y-6">
        <x-fonts.heading-three class="text-accent" text="Frequently Asked Questions" />
        <x-fonts.heading-two :text="$title" />
        <x-fonts.paragraph :text="$description" />
    </div>
    <div class="flex flex-col lg:gap-4 xl:gap-6">
        {{ $slot }}
    </div>
</div>
