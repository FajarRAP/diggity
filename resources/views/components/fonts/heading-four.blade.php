@props(['text'])

<h4 {{ $attributes->merge(['class' => 'font-semibold lg:text-base xl:text-xl']) }}>{{ $text }}</h4>
