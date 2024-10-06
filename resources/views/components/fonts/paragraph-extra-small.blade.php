@props(['text'])
<p {{ $attributes->merge(['class' => 'lg:text-xxs xl:text-xs']) }}>{{ $text }}</p>
