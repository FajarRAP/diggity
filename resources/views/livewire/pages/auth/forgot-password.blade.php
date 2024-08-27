<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink($this->only('email'));

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div>
    <x-auth-content>
        <x-slot:title>
            Lupa Password
        </x-slot:title>

        <x-slot:description>
            Pastikan akun Anda terdaftar manual bukan melalui Google Account
        </x-slot:description>

        <form class="space-y-6" wire:submit="sendPasswordResetLink">
            <x-auth-session-status :status="session('status')" />

            <div class="space-y-1">
                <x-input-label class="font-semibold">Email</x-input-label>
                <x-text-input class="w-full" placeholder="Email" type="email" :error="$errors->get('email')" wire:model="email" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <x-button type="submit" class="w-full">Kirim Email Reset Password</x-button>

            <x-paragraph-small>
                Cek kotak spam jika Anda tidak menerima email untuk reset password di kotak masuk.
            </x-paragraph-small>

            <div class="text-center">
                <x-paragraph-small class="inline">Kembali ke Halaman</x-paragraph-small>
                <a href="{{ route('login') }}" wire:navigate>
                    <x-paragraph class="inline font-semibold text-primary hover:underline">Sign In</x-paragraph>
                </a>
            </div>
        </form>
    </x-auth-content>
    {{-- <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email" name="email" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button>
                {{ __('Email Password Reset Link') }}
            </x-button>
        </div>
    </form> --}}
</div>
