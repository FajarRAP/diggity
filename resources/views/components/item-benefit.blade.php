@props(['title', 'description', 'num'])

@if (Route::is('project-based'))
    <x-card class="flex flex-col items-center lg:gap-2 xl:gap-3">
        <img src="{{ asset('assets/images/collaboration_type/benefit' . $num . '-' . Route::currentRouteName() . '.png') }}"
            alt="benefit" class="lg:size-10 xl:size-14">
        <x-fonts.paragraph class="font-semibold" :text="$title" />
        <x-fonts.paragraph :text="$description" />
    </x-card>
@else
    <x-card class="flex items-center lg:gap-2 xl:gap-3">
        <img src="{{ asset('assets/images/collaboration_type/benefit' . $num . '-' . Route::currentRouteName() . '.png') }}"
            alt="benefit" class="lg:size-10 xl:size-14">
        <div class="text-left lg:space-y-2 xl:space-y-3">
            <x-fonts.paragraph class="font-semibold" :text="$title" />
            <x-fonts.paragraph :text="$description" />
        </div>
    </x-card>
@endif
