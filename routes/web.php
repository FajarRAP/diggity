<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Volt::route('/', 'pages.dashboard.dashboard')->name('dashboard');
        Volt::route('/service', 'pages.dashboard.service')->name('dashboard-service');
    });
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Volt::route('/', 'pages.home.home')->name('home');
Volt::route('/contactus', 'pages.contactus.contact-us')->name('contact-us');
Volt::route('/portfolio', 'pages.portfolio.portfolio')->name('portfolio');
Volt::route('/portfolio/{id}', 'pages.portfolio.detail-portfolio')->name('detail-portfolio');

Volt::route('academy', 'pages.academy.academy')->name('academy');
Volt::route('academy/class', 'pages.academy.class')->name('academy-class');
Volt::route('academy/class/{category}', 'pages.academy.class-category')->name('academy-class-category');
Volt::route('academy/class/{category}/{name}', 'pages.academy.class-item')->name('academy-class-item');

require __DIR__ . '/collaboration-type.php';
require __DIR__ . '/service.php';
require __DIR__ . '/product.php';
require __DIR__ . '/price.php';
require __DIR__ . '/auth.php';
