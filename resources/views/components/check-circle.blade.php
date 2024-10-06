@props(['benefit'])

<div {{ $attributes->merge(['class' => 'flex items-center gap-4']) }}>
    <img src="{{ asset('assets/icons/check-circle.png') }}" class="lg:size-4 xl:size-6">
    <x-paragraph>{{ $benefit }}</x-paragraph>
</div>
