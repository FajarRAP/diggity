<div class="flex flex-col items-center mx-32 my-36 xl:gap-12 lg:gap-8">
    <div class="flex items-center gap-6">
        <img src="{{ asset('assets/logo.png') }}" alt="Diggity Logo" class="size-24">
        <div class="flex flex-col gap-5">
            <x-heading-two>Diggity</x-heading-two>
            <x-heading-one>Account</x-heading-one>
        </div>
    </div>

    <x-heading-one class="self-start">{{ $title }}</x-heading-one>
    <x-paragraph class="self-start xl:-mt-7 lg:-mt-3.5 w-3/4">
        {{ $description }}
    </x-paragraph>

    <div class="w-full p-6 space-y-6 bg-white shadow-card rounded-2xl">
        {{ $slot }}
    </div>

    <div class="flex items-center font-semibold xl:-mt-6 lg:-mt-3 lg:gap-3 xl:gap-6">
        <x-paragraph>Ketentuan Pengguna</x-paragraph>
        <div class="bg-black rounded-full lg:size-2 xl:size-3"></div>
        <x-paragraph>Kebijakan Privasi</x-paragraph>
    </div>

    <div class="w-1/2">
        <x-select-input>
            <x-slot:first>Bahasa Indonesia</x-slot:first>
            <option value="english">English</option>
        </x-select-input>
    </div>
</div>
