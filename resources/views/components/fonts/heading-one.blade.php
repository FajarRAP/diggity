@props(['text'])

<h1 {{ $attributes->merge(['class' => 'font-bold lg:text-2xl xl:text-4xl']) }}>{{ $text }}</h1>
