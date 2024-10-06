@props(['value'])

<label {{ $attributes->merge(['class' => 'font-semibold lg:text-sm xl:text-base self-start']) }}>
    {{ $value ?? $slot }}
</label>
