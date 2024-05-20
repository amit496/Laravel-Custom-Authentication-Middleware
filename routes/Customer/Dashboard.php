<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\CustomerController;
use App\Http\Controllers\Customer\DashboardController;


Route::prefix('customer')->middleware('iscustomerAuth')->group(function () {
    route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('customer.dashboard');
    route::get('/profiles',[DashboardController::class , 'CustomerProfiles'])->name('customer.profiles');
});


