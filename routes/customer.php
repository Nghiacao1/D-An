<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerLoginController;

Route::get('customer-login', [CustomerLoginController::class,'customerLogin'])->name('CustomerSignin');
Route::post('customer-login', [CustomerLoginController::class,'customerLoginPost'])->name('customer-login');