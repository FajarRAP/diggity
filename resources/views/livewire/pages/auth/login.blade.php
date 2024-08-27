<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <x-auth-content>
        <x-slot:title>
            Sign In
        </x-slot:title>

        <x-slot:description>
            Lengkapi form di bawah dengan menggunakan data Anda yang valid
        </x-slot:description>

        <form class="space-y-6" wire:submit="login">
            <x-auth-session-status :status="session('status')" />
            <div class="space-y-1">
                <x-input-label class="font-semibold">Email</x-input-label>
                <x-text-input class="w-full" placeholder="Email" type="email" :error="$errors->get('form.email')" wire:model="form.email" />
                <x-input-error :messages="$errors->get('form.email')" />
            </div>
            <div class="space-y-1">
                <x-input-label class="font-semibold">Password</x-input-label>
                <x-text-input class="w-full" placeholder="Password" type="password" :error="$errors->get('form.password')"
                    wire:model="form.password" />
                <x-input-error :messages="$errors->get('form.password')" />
            </div>
            <x-button type="submit" class="w-full">Sign In</x-button>
        </form>

        <x-paragraph-small class="text-center">atau</x-paragraph-small>

        <x-outline-button class="w-full">
            <x-svgs.google class="inline" />
            Sign In dengan Google
        </x-outline-button>

        <div class="text-center">
            <x-paragraph-small class="inline">Belum punya akun?</x-paragraph-small>
            <a href="{{ route('register') }}" wire:navigate>
                <x-paragraph class="inline font-semibold text-primary hover:underline">Sign Up</x-paragraph>
            </a>
        </div>
    </x-auth-content>
    {{-- <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block w-full mt-1" type="email" name="email"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block w-full mt-1" type="password"
                name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox"
                    class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button class="ms-3">
                {{ __('Log in') }}
            </x-button>
        </div>
    </form> --}}
</div>
