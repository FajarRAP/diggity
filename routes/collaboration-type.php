<?php

use Illuminate\Support\Facades\Route;

Route::view('/project-based', 'collaboration-type.project-based')->name('project-based');
Route::view('/dedicated-team', 'collaboration-type.dedicated-team')->name('dedicated-team');
Route::view('/on-demand', 'collaboration-type.on-demand')->name('on-demand');
