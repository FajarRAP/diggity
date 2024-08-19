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

Route::get('/service', fn() => view('service.service'))->name('service');
Route::prefix('service')->group(function () {
    Route::get('/web-dev', fn() => view('service.website-development'))->name('s-web-dev');
    Route::get('/mobile-dev', fn() => view('service.mobile-app-development'))->name('s-mobile-dev');
    Route::get('/product-dev', fn() => view('service.product-development'))->name('s-product-dev');
    Route::get('/custom-software-dev', fn() => view('service.custom-software-development'))->name('s-custom-dev');
    Route::get('/ui-ux-design', fn() => view('service.ui-ux-design'))->name('s-ui-ux');
    Route::get('/devops-solution', fn() => view('service.devops-solution'))->name('s-devops');
    Route::get('/system-testing', fn() => view('service.system-testing'))->name('s-system-testing');
    Route::get('/big-data', fn() => view('service.big-data-service'))->name('s-big-data');
    Route::get('/digital-marketing', fn() => view('service.digital-marketing'))->name('s-digital-marketing');
});

Route::get('/product', fn() => view('product.product'))->name('product');

require __DIR__ . '/auth.php';
