<a
    {{ $attributes->merge(['class' => 'p-5 lg:space-y-3 xl:space-y-6 bg-white rounded-lg shadow-none hover:shadow-card transition duration-300 text-start']) }}>
    <img src="{{ asset('asset/images/collaboration_type/icon-' . Str::slug($title, '-') . '.png') }}"
        alt="collaboration type" class="lg:size-12 xl:size-24">
    <h3 class="pb-3 border-b heading-three">{{ $title }}</h3>
    <p class="paragraph">{{ $description }}</p>
    @foreach ($benefits as $benefit)
        <x-check-circle :benefit="$benefit" />
    @endforeach
</a>
