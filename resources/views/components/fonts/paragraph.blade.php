@props(['text'])

<p {{ $attributes->merge(['class' => 'lg:text-sm xl:text-base']) }}>{{ $text }}</p>
