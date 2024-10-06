@props(['num'])

<x-card-secondary>
    <img src="{{ asset("assets/images/services/service-icon-$num.png") }}" alt="card image" class="lg:size-14 xl:size-20">
    <x-paragraph class="mt-3 font-semibold">{{ $title }}</x-paragraph>
    <x-paragraph class="mt-6">{{ $slot }}</x-paragraph>
</x-card-secondary>
