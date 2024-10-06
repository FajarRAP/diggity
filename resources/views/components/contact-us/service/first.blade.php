<div {{ $attributes }}>
    {{-- Name --}}
    <x-input-wrapper>
        <x-input-label for="name" value="Nama Lengkap" />
        <x-text-input id="name" class="w-full" placeholder="Nama Lengkap" :error="$errors->get('firstForm.name')"
            wire:model="firstForm.name" />
        <x-input-error :messages="$errors->get('firstForm.name')" />
    </x-input-wrapper>

    {{-- Phone Number --}}
    <x-input-wrapper>
        <x-input-label for="phoneNumber" value="Nomor Telepon" />
        <x-text-input id="phoneNumber" class="w-full" placeholder="Nomor Telepon" :error="$errors->get('firstForm.phoneNumber')"
            wire:model='firstForm.phoneNumber' />
        <x-input-error :messages="$errors->get('firstForm.phoneNumber')" />
    </x-input-wrapper>

    {{-- Email --}}
    <x-input-wrapper>
        <x-input-label for="email" value="Email" />
        <x-text-input id="email" class="w-full" placeholder="Email" :error="$errors->get('firstForm.email')"
            wire:model='firstForm.email' />
        <x-input-error :messages="$errors->get('firstForm.email')" />
    </x-input-wrapper>
    <x-button class="flex ms-auto w-fit" wire:click="nextPage">Berikutnya</x-button>
</div>
