@props(['num'])

@if (Route::is('project-based'))
    <x-card class="flex flex-col items-center gap-3">
        <img src="{{ asset('assets/images/collaboration_type/benefit' . $num . '-' . Route::currentRouteName() . '.png') }}"
            alt="benefit" class="lg:size-10 xl:size-14">
        <x-paragraph class="font-semibold">{{ $title }}</x-paragraph>
        <x-paragraph>{{ $description }}</x-paragraph>
    </x-card>
@else
    <x-card class="flex items-center gap-3">
        <img src="{{ asset('assets/images/collaboration_type/benefit' . $num . '-' . Route::currentRouteName() . '.png') }}"
            alt="benefit" class="lg:size-10 xl:size-14">
        <div class="space-y-3 text-left">
            <x-paragraph class="font-semibold">{{ $title }}</x-paragraph>
            <x-paragraph>{{ $description }}</x-paragraph>
        </div>
    </x-card>
@endif
