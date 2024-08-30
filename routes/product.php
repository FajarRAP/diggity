<?php

use Illuminate\Support\Facades\Route;

Route::view('/product', 'products.product')->name('product');
Route::prefix('/product')->group(function () {
    Route::view('/hr', 'products.hr')->name('p-hr');
    Route::view('/crm', 'products.crm')->name('p-crm');
    Route::view('/accountant', 'products.accountant')->name('p-accountant');
    Route::view('/sign', 'products.sign')->name('p-sign');
    Route::view('/tax', 'products.tax')->name('p-tax');
    Route::view('/benefit-management', 'products.benefit-management')->name('p-benefit-management');
    Route::view('/expense', 'products.expense')->name('p-expense');
});
