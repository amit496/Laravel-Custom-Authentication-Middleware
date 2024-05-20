<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\CustomerController;
use App\Http\Middleware\CustomerNotAuth;
use App\Http\Middleware\CustomerAuth;


Route::prefix('customer')->middleware('iscustomernotAuth')->group(function () {
    Route::get('/register', [CustomerController::class, 'register'])->name('customer.register');
    Route::post('/register/submit', [CustomerController::class, 'registerSubmit'])->name('customer.register.submit');

    Route::get('/login', [CustomerController::class, 'login'])->name('customer.login');
    Route::post('/login/submit', [CustomerController::class, 'loginSubmit'])->name('customer.login.submit');

});


Route::get('/logout', [CustomerController::class, 'logout'])->name('customer.logout');
