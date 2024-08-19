@props(['benefit'])

<div {{ $attributes->merge(['class' => 'flex items-center gap-4']) }}>
    <img src="{{ asset('asset/icons/check-circle.png') }}" class="lg:size-4 xl:size-6">
    <p class="paragraph">{{ $benefit }}</p>
</div>
