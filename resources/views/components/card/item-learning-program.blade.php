@props(['title', 'description', 'topics', 'interests'])

<x-card class="xl:space-y-6 lg:space-y-4">
    <div class="space-y-1.5">
        <img src="{{ asset('assets/images/carousels/carousel1.jpeg') }}" alt="learning program"
            class="rounded-full xl:size-20 lg:size-14">
        <x-paragraph class="font-semibold">{{ $title }}</x-paragraph>
        <x-fonts.paragraph-extra-small class="pb-3 border-b" :text="$description" />
    </div>
    <x-fonts.paragraph-extra-small text="Topik yang dibahas mencakup:" />
    <div class="pb-3 border-b lg:space-y-2 xl:space-y-3">
        @foreach ($topics as $topic)
            <div class="flex items-center gap-3">
                <x-svgs.ribbon class="xl:size-5 lg:size-3.5 fill-orange-400" />
                <x-paragraph class="w-full font-semibold">{{ $topic }}</x-paragraph>
            </div>
        @endforeach
    </div>
    <x-fonts.paragraph-extra-small text="Yang paling diminati dalam topik ini
        adalah:" />
    <div class="xl:space-y-3 lg:space-y-2">
        @foreach ($interests as $interest)
            <x-badges.icon-dark :text="$interest" />
        @endforeach
    </div>
    <x-fonts.paragraph-extra-small text="Selain itu, ada topik menarik lainnya..." />
</x-card>
