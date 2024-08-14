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
Volt::route('/project-based', 'pages.collaborationtype.project-based')->name('project-based');
Volt::route('/dedicated-team', 'pages.collaborationtype.dedicated-team')->name('dedicated-team');
Volt::route('/on-demand', 'pages.collaborationtype.on-demand')->name('on-demand');
Volt::route('/portfolio', 'pages.portfolio.portfolio')->name('portfolio');
Volt::route('/portfolio/{id}', 'pages.portfolio.detail-portfolio')->name('detail-portfolio');
Volt::route('/service', 'pages.services.service')->name('service');

require __DIR__ . '/auth.php';
