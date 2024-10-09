@props(['text'])

<p {{ $attributes->merge(['class' => 'lg:text-xs xl:text-sm']) }}>{{ $text }}</p>
