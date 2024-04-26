<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\MailManagerController;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get("/", function () {
    return view("/frontend.home");
});

Route::get('/home',function(){
    return view('Home');
});
Route::get('/auth',[LoginController::class,'login']);
Route::post('/auth/login',function(){
    if(Auth::check()){}
    return view('Home');
});
Route::get('/contact',function(){
    return view('/frontend.contact');
});
Route::get('/blog',function(){
    return view('/frontend.blog');
});
Route::get('/product',function(){
    return view('/frontend.product');
});

Route::get('/homefront',function(){
    return view('homefront');
});
Route::get('/about',function(){
    return view('about');
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
Route::get('orderdetails/create', [OrderdetailsController::class,'create'])->name('orderdetail.create'); 
Route::post('orderdetails/store', [OrderdetailsController::class,'store'])->name("order.store");
Route::put('/orderdetails/update/{id}', [OrderdetailsController::class,'update'])->name('orderdetail.update');
Route::get('orderdetails/edit/{id}', [OrderdetailsController::class,'edit']);
Route::DELETE('/orderdetails/delete/{id}', [OrderdetailsController::class,'destroy']);
Route::get('/orderdetails/{id}', [OrderdetailsController::class,'show']);
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
//Mail//
Route::get('/mailmanager', [MailManagerController::class, 'index']);
Route::get('mailmanager/create', [MailManagerController::class,'create']); 
Route::post('mailmanager/store', [MailManagerController::class,'store'])->name("mailmanager.create");
Route::put('/mailmanager/pdate/{id}', [MailManagerController::class,'update'])->name('mailmanager.update');
Route::get('mailmanager/edit/{id}', [MailManagerController::class,'edit']);
Route::DELETE('/mailmanager/delete/{id}', [MailManagerController::class,'destroy']);
Route::get('/mailmanager/{id}', [MailManagerController::class,'show']);
//blog//
Route::get('/blogs', [BlogsController::class, 'index']);
Route::get('blogs/create', [BlogsController::class,'create']); 
Route::post('blogs/store', [BlogsController::class,'store'])->name("blog.create");
Route::put('/blogs/update/{id}', [BlogsController::class,'update'])->name('blog.update');
Route::get('blogs/edit/{id}', [BlogsController::class,'edit']);
Route::DELETE('/blogs/delete/{id}', [BlogsController::class,'destroy']);
Route::get('/blogs/{id}', [BlogsController::class,'show']);
Route::get('/blog/{id}', [BlogsController::class,'viewblog']);
//product//
Route::get('/products', [productsController::class, 'index']);
Route::get('products/create', [productsController::class,'create']); 
Route::post('products/store', [productsController::class,'store'])->name("product.create");
Route::put('/products/update/{id}', [productsController::class,'update'])->name('product.update');
Route::get('products/edit/{id}', [productsController::class,'edit']);
Route::DELETE('/products/delete/{id}', [productsController::class,'destroy']);
Route::get('/products/{id}', [productsController::class,'show']);
Route::get('/product/{id}', [productsController::class,'viewproduct']);




Route::get('/send-mail', [SendMailController::class, 'demomail']);

Auth::routes(['verify' => true]);

Route::get('carts/addcart/{id}', [CartsController::class,'addcart'])->name('cart.add');
Route::get('/carts/view', [CartsController::class,'view'])->name('cart.view');
Route::put('/carts/update/{id}', [CartsController::class,'update'])->name('cart.update');
Route::DELETE('/carts/delete/{id}', [CartsController::class,'destroy'])->name('cart.destroy');
Route::get('/carts/order', [CartsController::class, 'order'])->name('cart.order');


