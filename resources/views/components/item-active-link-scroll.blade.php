@props(['text', 'isActive' => false])

<x-fonts.paragraph
    {{ $attributes->class(['font-semibold xl:py-3 lg:py-2 xl:px-5 lg:px-3.5 border-s-4  rounded-e-xl', 'border-primary text-primary bg-white' => $isActive]) }}
    :text="$text" />
