<?php

use App\Http\Controllers\frontend\FrontHomeController;
use App\Http\Controllers\frontend\FrontServicesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontHomeController::class, 'index'])->name('home.index');
Route::get('/services/custom-software', [FrontServicesController::class, 'index'])->name('services.custom-software.index');
