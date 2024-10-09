@props(['text'])

<h3 {{ $attributes->merge(['class' => 'font-semibold lg:text-lg xl:text-2xl']) }}>{{ $text }}</h3>
