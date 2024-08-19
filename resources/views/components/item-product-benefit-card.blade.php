@props(['title', 'description'])

<div class="bg-white rounded-lg shadow-card lg:p-3.5 xl:p-6 xl:space-y-6 lg:space-y-3.5">
    <img {{ $attributes->merge(['class' => 'lg:size-16 xl:size-24']) }} alt="benefit image">
    <h6 class="font-semibold paragraph">{{ $title }}</h6>
    <p class="paragraph-small">{{ $description }}</p>
</div>
