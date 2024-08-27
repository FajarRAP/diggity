<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'px-4 py-2 border border-transparent rounded-md font-semibold paragraph text-white focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:text-primary focus:bg-white hover:bg-white hover:text-primary hover:border-primary bg-primary block transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
