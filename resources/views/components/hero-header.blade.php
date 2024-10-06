<div class="grid grid-cols-2 gap-24 mx-auto">
    <div class="flex flex-col justify-center lg:gap-8 xl:gap-12">
        <x-heading-one>{{ $type }}</x-heading-one>
        <x-paragraph>{{ $description }}</x-paragraph>
        <a href="{{ route('contact-us') }}" class="w-fit" wire:navigate>
            <x-button>Hubungi Kami</x-button>
        </a>
    </div>
    <img {{ $attributes }} class="object-cover w-full lg:h-80 xl:h-96 rounded-3xl">
</div>
