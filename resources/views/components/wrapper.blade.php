@props(['bg' => 'transparent', 'spaces' => 'lg:space-y-6 xl:space-y-12', 'bottomBreadcumb' => false])

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
    <div {{ $attributes->merge(['class' => 'container mx-auto lg:py-2.5 xl:py-5']) }}>
        {{ $slot }}
    </div>
@endif
