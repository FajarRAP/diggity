<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Budget;
use App\Models\Collaboration;
use App\Models\Regency;
use App\Models\Region;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\Schedule;
use App\Livewire\Forms\ContactUsForm\FirstForm;
use App\Livewire\Forms\ContactUsForm\SecondForm;
use App\Livewire\Forms\ContactUsForm\ThirdForm;

new #[Layout('layouts.app')] class extends Component {
    public int $page = 1;
    public FirstForm $firstForm;
    public SecondForm $secondForm;
    public ThirdForm $thirdForm;

    public function with(): array
    {
        return [
            'services' => Service::all(),
            'collaborations' => Collaboration::all(),
            'regions' => Region::all(),
            'regencies' => Regency::all(),
            'schedules' => Schedule::all(),
            'budgets' => Budget::all(),
        ];
    }

    public function nextPage(): void
    {
        switch ($this->page) {
            case 1:
                $this->firstForm->validate();
                break;
            case 2:
                $this->secondForm->validate();
                break;
            default:
                break;
        }
        if ($this->page < 3) {
            ++$this->page;
        }
    }

    public function prevPage(): void
    {
        if ($this->page > 1) {
            --$this->page;
        }
    }
    public function store(): void
    {
        $this->thirdForm->validate();

        ServiceOrder::create([
            'name' => $this->firstForm->name,
            'phone_number' => $this->firstForm->phoneNumber,
            'email' => $this->firstForm->email,
            'service_id' => $this->secondForm->service,
            'collaboration_id' => $this->secondForm->collabType,
            'project_detail' => $this->secondForm->projectDetail,
            'schedule_id' => $this->secondForm->schedule,
            'budget_id' => $this->secondForm->budget,
            'company_name' => $this->thirdForm->companyName,
            'position' => $this->thirdForm->position,
            'employee' => $this->thirdForm->employee,
            'business_operated' => $this->thirdForm->businessOperated,
            'region_id' => $this->thirdForm->region,
            'regency_id' => $this->thirdForm->regency,
        ]);

        session()->flash('message', 'Berhasil Mengirim Pesan');

        $this->redirectRoute('contact-us');
    }

    public function searchRegency()
    {
        return Region::find($this->thirdForm->region)->regencies ?? [];
    }
}; ?>

<x-wrapper>
    {{-- Breadcumb --}}
    <x-breadcumb>
        <x-breadcumb-link>Hubungi Kami</x-breadcumb-link>
    </x-breadcumb>

    {{-- Body --}}
    <main class="container max-w-screen-md mx-auto text-center lg:space-y-8 xl:space-y-12">
        @session('message')
            <x-alert :message="$value" />
        @endsession

        <div class="lg:space-y-4 xl:space-y-6">
            <x-heading-one>Hubungi Kami</x-heading-one>
            <x-paragraph>
                Konsultasikan kebutuhan digitalisasi perusahaan Anda dengan Diggity.
                Segera bangun platform digital bisnis Anda bersama kami.
            </x-paragraph>
        </div>

        <div class="lg:space-y-4 xl:space-y-6">
            <x-heading-three>Tahap {{ $page }} dari 3</x-heading-three>
            <x-paragraph class="font-semibold">Bagaimana cara kami menghubungi Anda?</x-paragraph>
        </div>

        <form wire:submit="store">
            @switch($page)
                {{-- First Form --}}
                @case(1)
                    <x-contact-us.service.first class="lg:space-y-8 xl:space-y-12" />
                @break

                {{-- Second Form --}}
                @case(2)
                    <x-contact-us.service.second class="lg:space-y-8 xl:space-y-12" :services="$services" :collaborations="$collaborations"
                        :schedules="$schedules" :budgets="$budgets" />
                @break

                {{-- Third Form --}}
                @case(3)
                    <x-contact-us.service.third class="lg:space-y-8 xl:space-y-12" :regions="$regions" :thirdForm="$thirdForm" />
                @break

                @default
                    <p>Page Not Found</p>
            @endswitch
        </form>
    </main>
</x-wrapper>
