<x-card
    {{ $attributes->merge(['class' => 'absolute z-50 flex mt-1 lg:gap-10 xl:gap-16 max-w-screen-lg start-0 end-0 mx-auto rounded-xl']) }}>
    <ul class="max-w-72">{{ $link }}</ul>
    <div class="border-x border-grayish-blue"></div>
    {{ $content }}
</x-card>
