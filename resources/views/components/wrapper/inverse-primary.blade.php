{{-- @props(['bg' => 'transparent', 'spaces' => 'lg:space-y-8 xl:space-y-12', 'bottomBreadcumb' => false])

@php
    $paddings = $bg === 'transparent' ? 'lg:py-24 xl:py-36' : 'lg:py-12 xl:py-24';
@endphp

@if (!$bottomBreadcumb)
    <div {{ $attributes->merge(['class' => "$bg $paddings"]) }}>
        <div class="container mx-auto {{ $spaces }}">
            {{ $slot }}
        </div>
    </div>
@else
    <div {{ $attributes->merge(['class' => 'container mx-auto lg:py-3 xl:py-5']) }}>
        {{ $slot }}
    </div>
@endif --}}

<div class="bg-secondary lg:py-12 xl:py-24">
    <div {{ $attributes->merge(['class' => 'container mx-auto xl:space-y-12 lg:space-y-8']) }}>
        {{ $slot }}
    </div>
</div>
