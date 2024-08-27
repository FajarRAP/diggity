<?php

use Illuminate\Support\Facades\Route;

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
