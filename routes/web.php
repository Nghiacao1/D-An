<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\CategorysController;
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
Route::get('/login',function(){
    return view('login');
});
Route::post('/login',function(){
    if(Auth::check()){}
    return view('home');
});


Route::get('/customers', [customersController::class, 'index']);

Route::get('/orderdetails', [OrderdetailsController::class,'index']);

Route::get('/banners', [BannersController::class,'index']);
//buildings//
Route::get('/buildings', [BuildingsController::class, 'index']);
Route::get('buildings/create', [BuildingsController::class,'create']); 
Route::post('buildings/store', [BuildingsController::class,'store'])->name("building.create");
Route::put('/buildings/update/{id}', [BuildingsController::class,'update'])->name('building.update');
Route::get('buildings/edit/{id}', [BuildingsController::class,'edit']);
Route::DELETE('/buildings/delete/{id}', [BuildingsController::class,'destroy']);
Route::get('/customers/{id}', [CustomersController::class,'show']);
//customer//
Route::get('/customers', [CustomersController::class, 'index']);
Route::get('customers/create', [CustomersController::class,'create']); 
Route::post('customers/store', [CustomersController::class,'store'])->name("customer.create");
Route::put('/customers/update/{id}', [CustomersController::class,'update'])->name('customer.update');
Route::get('customers/edit/{id}', [CustomersController::class,'edit']);
Route::DELETE('/customers/delete/{id}', [CustomersController::class,'destroy']);
//banner//
Route::get('/banners', [BannersController::class, 'index']);
Route::get('banners/create', [BannersController::class,'create']); 
Route::post('banners/store', [BannersController::class,'store'])->name("banner.create");
Route::put('/banners/update/{id}', [BannersController::class,'update'])->name('banner.update');
Route::get('banners/edit/{id}', [BannersController::class,'edit']);
Route::DELETE('/banners/delete/{id}', [BannersController::class,'destroy']);
//orderdetail//
Route::get('/orderdetails', [OrderdetailsController::class, 'index']);
Route::get('orderdetails/create', [OrderdetailsController::class,'create']); 
Route::post('orderdetails/store', [OrderdetailsController::class,'store'])->name("orderdetail.create");
Route::put('/orderdetails/update/{id}', [OrderdetailsController::class,'update'])->name('orderdetail.update');
Route::get('orderdetails/edit/{id}', [OrderdetailsController::class,'edit']);
Route::DELETE('/orderdetails/delete/{id}', [OrderdetailsController::class,'destroy']);
//category//
Route::get('/category', [CategorysController::class, 'index']);
Route::get('category/create', [CategorysController::class,'create']); 
Route::post('category/store', [CategorysController::class,'store'])->name("category.create");
Route::put('/category/update/{id}', [CategorysController::class,'update'])->name('category.update');
Route::get('category/edit/{id}', [CategorysController::class,'edit']);
Route::DELETE('/category/delete/{id}', [CategorysController::class,'destroy']);