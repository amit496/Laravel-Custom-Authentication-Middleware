<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\Auth\CustomerController;
use App\Http\Controllers\Customer\DashboardController;


Route::prefix('customer')->middleware('iscustomerAuth')->group(function () {
    route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('customer.dashboard');
    route::get('/profiles',[DashboardController::class , 'CustomerProfiles'])->name('customer.profiles');
    Route::post('/profiles/submit/{id}', [DashboardController::class, 'CustomerProfilesSubmit'])->name('customer.profiles.submit');
    Route::post('/profiles/photo/{id}', [DashboardController::class, 'CustomerPhotoSubmit'])->name('customer.photo.submit');
    Route::post('/password/update/{id}', [DashboardController::class, 'CustomerPasswordUpdate'])->name('customer.password.update');
});


