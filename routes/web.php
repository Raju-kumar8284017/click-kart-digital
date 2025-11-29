<?php

use App\Http\Controllers\frontend\FrontHomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontHomeController::class, 'index'])->name('home.index');
