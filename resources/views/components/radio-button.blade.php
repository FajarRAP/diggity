@props(['name', 'id'])

<div class="flex items-center">
    <input
        {{ $attributes->merge(['class' => 'size-4 accent-primary hover:cursor-pointer', 'id' => $name, 'value' => $id]) }}
        type="radio">
    <label for="{{ $name }}" class="ms-2 hover:cursor-pointer">
        <x-paragraph>{{ $name }}</x-paragraph>
    </label>
</div>
