<?php

use App\Http\Controllers\frontend\FrontHomeController;
use App\Http\Controllers\frontend\FrontServicesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontHomeController::class, 'index'])->name('home.index');
Route::get('/services/custom-software', [FrontServicesController::class, 'index'])->name('services.custom-software.index');
Route::get('/services/email-campaign', [FrontServicesController::class, 'emailCampaign'])->name('services.email-campaign.index');
Route::get('/services/graphic-design', [FrontServicesController::class, 'graphicDesign'])->name('services.graphic-design.index');
