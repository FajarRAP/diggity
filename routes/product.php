<?php

use Illuminate\Support\Facades\Route;

Route::view('/product', 'products.product')->name('product');
Route::prefix('/product')->group(function () {
    Route::view('/human-resource', 'products.hr')->name('product-hr');
    Route::view('/crm', 'products.crm')->name('product-crm');
    Route::view('/accountant', 'products.accountant')->name('product-accountant');
    Route::view('/sign', 'products.sign')->name('product-sign');
    Route::view('/tax', 'products.tax')->name('product-tax');
    Route::view('/benefit-management', 'products.benefit-management')->name('product-benefit-management');
    Route::view('/expense', 'products.expense')->name('product-expense');
});
