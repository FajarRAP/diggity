@props(['services', 'collaborations', 'schedules', 'budgets'])

<div {{ $attributes }}>
    {{-- Services --}}
    <x-input-wrapper>
        <x-input-label value="Layanan yang Dibutuhkan" />
        <div class="grid grid-cols-3 lg:gap-y-2.5 xl:gap-y-4">
            @foreach ($services as $service)
                <x-radio-button :name="$service->name" :id="$service->id" wire:model='secondForm.service' />
            @endforeach
        </div>
        <x-input-error :messages="$errors->get('secondForm.service')" />
    </x-input-wrapper>

    {{-- Collaboration Type --}}
    <x-input-wrapper>
        <x-input-label value="Model Kerjasama yang Diinginkan" />
        <div class="flex flex-col lg:gap-y-2.5 xl:gap-y-4">
            @foreach ($collaborations as $collaboration)
                <x-radio-button :name="$collaboration->type" :id="$collaboration->id" wire:model='secondForm.collabType' />
            @endforeach
        </div>
        <x-input-error :messages="$errors->get('secondForm.collabType')" />
    </x-input-wrapper>

    {{-- Project Detail --}}
    <x-input-wrapper>
        <x-input-label for="detail" value="Detail Proyek" />
        <x-textarea-input id="detail" :error="$errors->get('secondForm.projectDetail')" wire:model="secondForm.projectDetail" />
        <x-input-error :messages="$errors->get('secondForm.projectDetail')" />
    </x-input-wrapper>

    {{-- Schedule --}}
    <x-input-wrapper>
        <x-input-label for="schedule" value="Jadwal" />
        <x-select-input id="schedule" :error="$errors->get('secondForm.schedule')" wire:model="secondForm.schedule">
            <x-slot:first>Pilih Jadwal</x-slot:first>
            @foreach ($schedules as $schedule)
                <option value="{{ $schedule->id }}">{{ $schedule->schedule }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('secondForm.schedule')" />
    </x-input-wrapper>

    {{-- Budget --}}
    <x-input-wrapper>
        <x-input-label for="budget" value="Jadwal" />
        <x-select-input id="budget" :error="$errors->get('secondForm.budget')" wire:model="secondForm.budget">
            <x-slot:first>Tentukan Anggaran</x-slot:first>
            @foreach ($budgets as $budget)
                <option value="{{ $budget->id }}">{{ $budget->amount }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('secondForm.budget')" />
    </x-input-wrapper>

    <div class="flex justify-between">
        <x-outline-button class="bg-white" wire:click='prevPage'>Kembali</x-outline-button>
        <x-button wire:click='nextPage'>Berikutnya</x-button>
    </div>
</div>
