<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Volt::route('/', 'pages.home.home')->name('home');
Volt::route('/contactus', 'pages.contactus.contact-us')->name('contact-us');
Volt::route('/portfolio', 'pages.portfolio.portfolio')->name('portfolio');
Volt::route('/portfolio/{id}', 'pages.portfolio.detail-portfolio')->name('detail-portfolio');

require __DIR__ . 'collaboration-type.php';
require __DIR__ . 'service.php';
require __DIR__ . 'product.php';
require __DIR__ . '/auth.php';
