<a
    {{ $attributes->merge(['class' => 'p-5 lg:space-y-3 xl:space-y-6 bg-white rounded-lg shadow-none hover:shadow-card transition duration-300 text-start']) }}>
    <img src="{{ asset('asset/images/collaboration_type/icon-' . Str::slug($title, '-') . '.png') }}"
        alt="collaboration type" class="lg:size-12 xl:size-24">
    <h3 class="pb-3 font-semibold border-b lg:text-lg xl:text-2xl">{{ $title }}</h3>
    <p class="lg:text-sm xl:text-base">{{ $description }}</p>
    @foreach ($benefits as $benefit)
        <div class="flex items-center gap-2">
            <img src="{{ asset('asset/icons/check-circle.png') }}" class="lg:size-4 xl:size-6">
            <p class="lg:text-sm xl:text-base">{{ $benefit }}</p>
        </div>
    @endforeach
</a>
