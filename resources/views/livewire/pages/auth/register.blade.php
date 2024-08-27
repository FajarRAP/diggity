<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', Rules\Password::defaults()],
            'password_confirmation' => ['required', 'string', 'same:password'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<x-auth-content>
    <x-slot:title>
        Sign Up
    </x-slot:title>

    <x-slot:description>
        Lengkapi form di bawah dengan menggunakan data Anda yang valid
    </x-slot:description>

    <form class="space-y-6" wire:submit="register">
        <div class="space-y-1">
            <x-input-label class="font-semibold">Username</x-input-label>
            <x-text-input class="w-full" placeholder="Username" :error="$errors->get('username')" wire:model="username" />
            <x-input-error :messages="$errors->get('username')" />
        </div>
        <div class="space-y-1">
            <x-input-label class="font-semibold">Email</x-input-label>
            <x-text-input class="w-full" placeholder="Email" type="email" :error="$errors->get('email')" wire:model="email" />
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <div class="space-y-1">
            <x-input-label class="font-semibold">Password</x-input-label>
            <x-text-input class="w-full" placeholder="Password" type="password" :error="$errors->get('password')"
                wire:model="password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>
        <div class="space-y-1">
            <x-input-label class="font-semibold">Confirm Password</x-input-label>
            <x-text-input class="w-full" placeholder="Confirm Password" type="password" :error="$errors->get('password_confirmation')"
                wire:model="password_confirmation" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>
        <x-button type="submit" class="w-full">Sign Up</x-button>
    </form>

    <x-paragraph-small class="text-center">atau</x-paragraph-small>

    <x-outline-button class="w-full">
        <x-svgs.google class="inline" />
        Sign Up dengan Google
    </x-outline-button>

    <div class="text-center">
        <x-paragraph-small class="inline">Sudah punya akun?</x-paragraph-small>
        <a href="{{ route('login') }}" wire:navigate>
            <x-paragraph class="inline font-semibold text-primary hover:underline">Sign In</x-paragraph>
        </a>
    </div>
</x-auth-content>
