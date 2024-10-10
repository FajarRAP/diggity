@props(['title', 'description', 'num'])

<x-card-secondary>
    <img src="{{ asset("assets/images/services/service-icon-$num.png") }}" alt="card image" class="lg:size-14 xl:size-20">
    <x-fonts.paragraph class="mt-3 font-semibold" :text="$title" />
    <x-fonts.paragraph class="mt-6" :text="$description" />
</x-card-secondary>
