<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;

Route::get('customer-login', [CustomersController::class,'customerLogin'])->name('CustomerSignin');
Route::post('customer-login', [CustomersController::class,'customerLoginPost'])->name('customer-login');