@props(['messages'])

@if ($messages)
    <ul
        {{ $attributes->merge(['class' => 'lg:text-xs xl:text-sm text-red-600 dark:text-red-400 space-y-1 font-medium text-start']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
