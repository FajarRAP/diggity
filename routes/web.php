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

Route::view('/project-based', 'collaboration-type.project-based')->name('project-based');
Route::view('/dedicated-team', 'collaboration-type.dedicated-team')->name('dedicated-team');
Route::view('/on-demand', 'collaboration-type.on-demand')->name('on-demand');

Route::view('/service', 'service.service')->name('service');
Route::prefix('/service')->group(function () {
    Route::view('/web-dev', 'service.website-development')->name('s-web-dev');
    Route::view('/mobile-dev', 'service.mobile-app-development')->name('s-mobile-dev');
    Route::view('/product-dev', 'service.product-development')->name('s-product-dev');
    Route::view('/custom-software-dev', 'service.custom-software-development')->name('s-custom-dev');
    Route::view('/ui-ux-design', 'service.ui-ux-design')->name('s-ui-ux');
    Route::view('/devops-solution', 'service.devops-solution')->name('s-devops');
    Route::view('/system-testing', 'service.system-testing')->name('s-system-testing');
    Route::view('/big-data', 'service.big-data-service')->name('s-big-data');
    Route::view('/digital-marketing', 'service.digital-marketing')->name('s-digital-marketing');
});

Route::view('/product', 'product.product')->name('product');
Route::prefix('/product')->group(function () {
    Route::view('/hr', 'product.hr')->name('p-hr');
    Route::view('/crm', 'product.crm')->name('p-crm');
    Route::view('/accountant', 'product.accountant')->name('p-accountant');
    Route::view('/sign', 'product.sign')->name('p-sign');
    Route::view('/tax', 'product.tax')->name('p-tax');
    Route::view('/benefit-management', 'product.benefit-management')->name('p-benefit-management');
    Route::view('/expense', 'product.expense')->name('p-expense');
});

require __DIR__ . '/auth.php';
