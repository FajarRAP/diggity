@props(['text'])

<button
    {{ $attributes->merge(['class' => 'xl:p-4 lg:p-2.5 rounded-full basis-1/2 text-center transition hover:cursor-pointer']) }}>
    <x-fonts.heading-four class="font-semibold" :text="$text" />
</button>
