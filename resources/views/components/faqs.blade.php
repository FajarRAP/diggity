<div class="grid grid-cols-2 xl:gap-24 lg:gap-12 lg:pt-12 xl:pt-24 xl:pb-12 lg:pb-6">
    <div class="lg:space-y-3 xl:space-y-6">
        <h3 class="heading-three text-accent">Frequently Asked Questions</h3>
        <h2 class="heading-two">{{ $title }}</h2>
        <p class="paragraph">
            {{ $description }}
        </p>
    </div>
    <div class="flex flex-col lg:gap-3 xl:gap-6">
        {{ $slot }}
    </div>
</div>
