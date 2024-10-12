@props(['header', 'content'])

<div class="flex flex-col lg:gap-4 xl:gap-6 grow border-e last:border-0 first:p-0 lg:ps-3.5 xl:ps-6">
    <x-fonts.paragraph class="font-semibold text-accent" :text="$header" />
    <x-fonts.paragraph-small :text="$content" />
</div>
