<?php

use App\Http\Controllers\frontend\FrontAboutController;
use App\Http\Controllers\frontend\FrontContactUsController;
use App\Http\Controllers\frontend\FrontHomeController;
use App\Http\Controllers\frontend\FrontIndustriesController;
use App\Http\Controllers\frontend\FrontPriceController;
use App\Http\Controllers\frontend\FrontServicesController;
use App\Http\Controllers\frontend\FrontTechnologiesController;
use Illuminate\Support\Facades\Route;








Route::get('/', [FrontHomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [FrontAboutController::class, 'index'])->name('about.index');
Route::get('/technologies', [FrontTechnologiesController::class, 'index'])->name('technologies.index');
Route::get('/pricing', [FrontPriceController::class, 'index'])->name('price.index');
Route::get('/contact-us', [FrontContactUsController::class, 'index'])->name('contact.index');

Route::prefix('services')->name('services.')->group(function () {
    Route::get('/custom-software', [FrontServicesController::class, 'index'])->name('custom-software.index');
    Route::get('/email-campaign', [FrontServicesController::class, 'emailCampaign'])->name('email-campaign.index');
    Route::get('/graphic-design', [FrontServicesController::class, 'graphicDesign'])->name('graphic-design.index');
    Route::get('/mobile-app', [FrontServicesController::class, 'mobApp'])->name('mobile-app.index');
    Route::get('/seo', [FrontServicesController::class, 'seo'])->name('seo.index');
    Route::get('/social-media', [FrontServicesController::class, 'socialMedia'])->name('social-media.index');
    Route::get('/ui-ux-design', [FrontServicesController::class, 'uiUxDesign'])->name('ui-ux-design.index');
    Route::get('/web-design', [FrontServicesController::class, 'webDesign'])->name('web-design.index');
    Route::get('/web-dev', [FrontServicesController::class, 'webDev'])->name('web-dev.index');
});

Route::prefix('industries')->name('industries.')->group(function () {
    Route::get('/e-commerce', [FrontIndustriesController::class, 'eCommerce'])->name('e-commerce.index');
    Route::get('/corporate', [FrontIndustriesController::class, 'corporate'])->name('corporate.index');
    Route::get('/education', [FrontIndustriesController::class, 'education'])->name('education.index');
    Route::get('/fashion', [FrontIndustriesController::class, 'fashion'])->name('fashion.index');
    Route::get('/finance', [FrontIndustriesController::class, 'finance'])->name('finance.index');
    Route::get('/food', [FrontIndustriesController::class, 'food'])->name('food.index');
    Route::get('/healthcare', [FrontIndustriesController::class, 'healthcare'])->name('healthcare.index');
    Route::get('/real-estate', [FrontIndustriesController::class, 'realEstate'])->name('real-estate.index');
    Route::get('/travel', [FrontIndustriesController::class, 'travel'])->name('travel.index');
});