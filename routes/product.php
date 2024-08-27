<?php

use Illuminate\Support\Facades\Route;

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
