<?php

use Illuminate\Support\Facades\Route;

Route::view('/price', 'prices.price')->name('price');
Route::prefix('/price')->group(function () {
    Route::view('/hr', 'prices.hr')->name('price-hr');
    Route::view('/crm', 'prices.crm')->name('price-crm');
    Route::view('/accountant', 'prices.accountant')->name('price-accountant');
    Route::view('/sign', 'prices.sign')->name('price-sign');
    Route::view('/tax', 'prices.tax')->name('price-tax');
});
