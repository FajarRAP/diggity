@props(['regions', 'thirdForm'])

<div {{ $attributes }}>
    {{-- Company Name --}}
    <x-input-wrapper>
        <x-input-label for="companyName" value="Nama Perusahaan" />
        <x-text-input id="companyName" class="w-full" placeholder="Nama Perusahaan" :error="$errors->get('thirdForm.companyName')"
            wire:model="thirdForm.companyName" />
        <x-input-error :messages="$errors->get('thirdForm.companyName')" />
    </x-input-wrapper>

    {{-- Position --}}
    <x-input-wrapper>
        <x-input-label for="position" value="Posisi Anda" />
        <x-text-input id="position" class="w-full" placeholder="Posisi Anda" :error="$errors->get('thirdForm.position')"
            wire:model="thirdForm.position" />
        <x-input-error :messages="$errors->get('thirdForm.position')" />
    </x-input-wrapper>

    {{-- Employee Count --}}
    <x-input-wrapper>
        <x-input-label for="employee" value="Jumlah Karyawan" />
        <x-select-input id="employee" :error="$errors->get('thirdForm.employee')" wire:model="thirdForm.employee">
            <x-slot:first>Jumlah Karyawan</x-slot:first>
            <option value="< 50">&lt; 50</option>
            <option value="50 - 100">50 - 100</option>
            <option value="100 - 200">100 - 200</option>
            <option value="> 200">&gt; 200</option>
        </x-select-input>
        <x-input-error :messages="$errors->get('thirdForm.employee')" />
    </x-input-wrapper>

    {{-- Business Type --}}
    {{-- <div class="flex flex-col gap-3">
        <label for="businessType" class="self-start">Jenis Usaha</label>
        <select id="businessType"
            class="bg-white border border-gray-300 font-normal text-gray-900 rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
            <option rJenis Usaha</option>
        </select>
    </div> --}}

    {{-- Business Operated --}}
    <x-input-wrapper>
        <x-input-label for="businessOperated" value="Berapa Lama Usaha Berlangsung" />
        <x-select-input id="businessOperated" :error="$errors->get('thirdForm.businessOperated')" wire:model="thirdForm.businessOperated">
            <x-slot:first>Pilih Lama Usaha</x-slot:first>
            <option value="< 1 Tahun">&lt; 1 Tahun</option>
            <option value="1 Tahun - 5 Tahun">1 Tahun - 5 Tahun</option>
            <option value="5 Tahun - 10 Tahun">5 Tahun - 10 Tahun</option>
            <option value="> 10 Tahun">&gt; 10 Tahun</option>
        </x-select-input>
        <x-input-error :messages="$errors->get('thirdForm.businessOperated')" />
    </x-input-wrapper>

    {{-- Region --}}
    <x-input-wrapper>
        <x-input-label for="region" value="Pilih Provinsi" />
        <x-select-input id="region" :error="$errors->get('thirdForm.region')" wire:model.live="thirdForm.region">
            <x-slot:first>Pilih Provinsi</x-slot:first>
            @foreach ($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('thirdForm.region')" />
    </x-input-wrapper>

    {{-- Regency --}}
    <x-input-wrapper>
        <x-input-label for="regency" value="Pilih Kabupaten/Kota" />
        <x-select-input id="regency" :error="$errors->get('thirdForm.regency')" wire:key="{{ $thirdForm->region }}"
            wire:model.live="thirdForm.regency">
            <x-slot:first>Pilih Kabupaten/Kota</x-slot:first>
            @foreach ($this->searchRegency() as $regency)
                <option value="{{ $regency->id }}">{{ $regency->name }}</option>
            @endforeach
        </x-select-input>
        <x-input-error :messages="$errors->get('thirdForm.regency')" />
    </x-input-wrapper>
    <div class="flex justify-between">
        <x-outline-button class="bg-white" wire:click='prevPage'>Kembali</x-outline-button>
        <x-button type="submit">Kirim</x-button>
    </div>
</div>
