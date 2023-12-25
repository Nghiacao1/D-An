<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\MacsController;
use App\Http\Controllers\AgenciesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('Home');
});
Route::get('/auth',[LoginController::class,'login']);
Route::post('/auth/login',function(){
    if(Auth::check()){}
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
//buildings//
Route::get('/buildings', [BuildingsController::class, 'index']);
Route::get('buildings/create', [BuildingsController::class,'create']); 
Route::post('buildings/store', [BuildingsController::class,'store'])->name("building.create");
Route::put('/buildings/update/{id}', [BuildingsController::class,'update'])->name('building.update');
Route::get('buildings/edit/{id}', [BuildingsController::class,'edit']);
Route::DELETE('/buildings/delete/{id}', [BuildingsController::class,'destroy']);
Route::get('/buildings/{id}', [BuildingsController::class,'show']);
//customer//
Route::get('/customers', [CustomersController::class, 'index']);
Route::get('customers/create', [CustomersController::class,'create']); 
Route::post('customers/store', [CustomersController::class,'store'])->name("customer.create");
Route::put('/customers/update/{id}', [CustomersController::class,'update'])->name('customer.update');
Route::get('customers/edit/{id}', [CustomersController::class,'edit']);
Route::DELETE('/customers/delete/{id}', [CustomersController::class,'destroy']);
Route::get('/customers/{id}', [CustomersController::class,'show']);
//banner//
Route::get('/banners', [BannersController::class, 'index']);
Route::get('banners/create', [BannersController::class,'create']); 
Route::post('banners/store', [BannersController::class,'store'])->name("banner.create");
Route::put('/banners/update/{id}', [BannersController::class,'update'])->name('banner.update');
Route::get('banners/edit/{id}', [BannersController::class,'edit']);
Route::DELETE('/banners/delete/{id}', [BannersController::class,'destroy']);
Route::get('/banners/{id}', [BannersController::class,'show']);
//orderdetail//
Route::get('/orderdetails', [OrderdetailsController::class, 'index']);
Route::get('orderdetails/create', [OrderdetailsController::class,'create']); 
Route::post('orderdetails/store', [OrderdetailsController::class,'store'])->name("orderdetail.create");
Route::put('/orderdetails/update/{id}', [OrderdetailsController::class,'update'])->name('orderdetail.update');
Route::get('orderdetails/edit/{id}', [OrderdetailsController::class,'edit']);
Route::DELETE('/orderdetails/delete/{id}', [OrderdetailsController::class,'destroy']);
Route::put('/orderdetails/update/{id}', [OrderdetailsController::class,'update'])->name('category.update');

//category//
Route::get('/category', [CategorysController::class, 'index']);
Route::get('category/create', [CategorysController::class,'create']); 
Route::post('category/store', [CategorysController::class,'store'])->name("category.create");
Route::put('/category/update/{id}', [CategorysController::class,'update'])->name('category.update');
Route::get('category/edit/{id}', [CategorysController::class,'edit']);
Route::DELETE('/category/delete/{id}', [CategorysController::class,'destroy']);
Route::get('/category/{id}', [CategorysController::class,'show']);
//agencies//
Route::get('/agencies', [AgenciesController::class, 'index']);
Route::get('agencies/create', [AgenciesController::class,'create']); 
Route::post('agencies/store', [AgenciesController::class,'store'])->name("agencies.create");
Route::put('/agencies/update/{id}', [AgenciesController::class,'update'])->name('agencies.update');
Route::get('agencies/edit/{id}', [AgenciesController::class,'edit']);
Route::DELETE('/agencies/delete/{id}', [AgenciesController::class,'destroy']);
Route::get('/agencies/{id}', [AgenciesController::class,'show']);
//Mac//
Route::get('/macs', [MacsController::class, 'index']);
Route::get('macs/create', [MacsController::class,'create']); 
Route::post('macs/store', [MacsController::class,'store'])->name("mac.create");
Route::put('/macs/pdate/{id}', [MacsController::class,'update'])->name('mac.update');
Route::get('macs/edit/{id}', [MacsController::class,'edit']);
Route::DELETE('/macs/delete/{id}', [MacsController::class,'destroy']);
Route::get('/macs/{id}', [MacsController::class,'show']);
