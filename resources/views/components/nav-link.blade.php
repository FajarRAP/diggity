<button {{ $attributes->merge(['class' => 'flex items-center justify-between border-b-2 border-transparent']) }}>
    {{ $slot }}
    <x-svgs.arrow class="rotate-90 ms-2.5 lg:size-3 xl:size-4" />
</button>
