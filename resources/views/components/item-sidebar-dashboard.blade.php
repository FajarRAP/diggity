@props(['active' => false])

@php
    $classes = $active ? 'font-semibold text-black' : 'text-primary';
@endphp

<a class="flex items-center gap-12" {{ $attributes }}>
    {{ $icon }}
    <x-paragraph x-show="show" x-transition:enter="transition origin-left ease-out duration-150"
        x-transition:enter-start="scale-x-0" x-transition:enter-end="scale-x-100"
        x-transition:leave="transition origin-left ease-in duration-150" x-transition:leave-start="scale-x-100"
        x-transition:leave-end="scale-x-0"
        class="absolute z-10 px-6 left-full {{ $classes }}">{{ $title }}</x-paragraph>
</a>
