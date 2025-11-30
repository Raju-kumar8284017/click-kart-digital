<?php

use App\Http\Controllers\frontend\FrontHomeController;
use App\Http\Controllers\frontend\FrontServicesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontHomeController::class, 'index'])->name('home.index');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('/custom-software', [FrontServicesController::class, 'index'])->name('custom-software.index');
    Route::get('/email-campaign', [FrontServicesController::class, 'emailCampaign'])->name('email-campaign.index');
    Route::get('/graphic-design', [FrontServicesController::class, 'graphicDesign'])->name('graphic-design.index');
    Route::get('/mobile-app', [FrontServicesController::class, 'mobApp'])->name('mobile-app.index');
    Route::get('/seo', [FrontServicesController::class, 'seo'])->name('seo.index');
    Route::get('/social-media', [FrontServicesController::class, 'socialMedia'])->name('social-media.index');
    Route::get('/ui-ux-design', [FrontServicesController::class, 'uiUxDesign'])->name('ui-ux-design.index');
});