<?php

use App\Http\Controllers\BuyProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth']], function () {    
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});