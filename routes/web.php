<?php

use Illuminate\Support\Facades\Route;


Route::redirect('/', '/customer/login', 301);

Route::get('/', function () {
    return view('welcome');
});
