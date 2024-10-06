@props(['isActive' => false])

<button
    {{ $attributes->class(['px-4 py-2 border rounded-md font-semibold focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:bg-white hover:bg-white hover:border-primary block transition ease-in-out duration-150', 'bg-white border-primary text-primary' => $isActive, 'text-white focus:text-primary hover:text-primary bg-primary border-transparent' => !$isActive])->merge(['type' => 'button']) }}>
    <x-paragraph>{{ $slot }}</x-paragraph>
</button>
