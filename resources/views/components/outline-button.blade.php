<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'text-primary border border-primary px-4 py-2 paragraph font-semibold rounded-md bg-white focus:ring-2 focus:ring-offset-2 focus:ring-primary hover:text-white hover:bg-primary transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
