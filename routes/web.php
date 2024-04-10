<?php

use App\Http\Controllers\BuyProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/do_register', [HomeController::class, 'do_register'])->name('do_register');
Route::group(['middleware' => ['auth']], function () {    
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
});