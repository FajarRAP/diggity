@props(['text'])

<h5 {{ $attributes->merge(['class' => 'font-semibold xl:text-lg lg:text-base']) }}>{{ $text }}</h5>
