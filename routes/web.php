<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\MailManagerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\InfosController;
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
Route::get('/makeup',function(){
    return view('frontend.dichvu.makeup');
});
Route::get('/chupanh',function(){
    return view('frontend.dichvu.chupanh');
});
Route::get('/giat',function(){
    return view('frontend.dichvu.giat');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(); 

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
//agencies//
Route::get('/agencies', [AgenciesController::class, 'index']);
Route::get('agencies/create', [AgenciesController::class,'create']); 
Route::post('agencies/store', [AgenciesController::class,'store'])->name("agencies.create");
Route::put('/agencies/update/{id}', [AgenciesController::class,'update'])->name('agencies.update');
Route::get('agencies/edit/{id}', [AgenciesController::class,'edit']);
Route::DELETE('/agencies/delete/{id}', [AgenciesController::class,'destroy']);
Route::get('/agencies/{id}', [AgenciesController::class,'show']);
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
// //product//
Route::get('/products', [productsController::class, 'index']);
Route::get('/product', [productsController::class, 'showsanpham']);
Route::get('products/create', [productsController::class,'create']); 
Route::post('products/store', [productsController::class,'store'])->name("product.create");
Route::put('/products/update/{id}', [productsController::class,'update'])->name('product.update');
Route::get('products/edit/{id}', [productsController::class,'edit']);
Route::DELETE('/products/delete/{id}', [productsController::class,'destroy']);
Route::get('/products/{id}', [productsController::class,'show']);
Route::get('/product/{id}', [productsController::class,'viewproduct']);
Route::get('/product', [ProductsController::class,'search'])->name('search');

//review//
Route::get('reviews/addreview/{id}', [ReviewsController::class,'addreview'])->name('review.add');


Route::get('/send-mail', [SendMailController::class, 'demomail']);

Auth::routes(['verify' => true]);

Route::get('carts/addcart/{id}', [CartsController::class,'addcart'])->name('cart.add');
Route::get('carts/addcartsale/{id}', [CartsController::class,'addcartsale'])->name('cart.addsale');
Route::get('/carts/view', [CartsController::class,'view'])->name('cart.view');
Route::put('/carts/update/{id}', [CartsController::class,'update'])->name('cart.update');
Route::DELETE('/carts/delete/{id}', [CartsController::class,'destroy'])->name('cart.destroy');

//Orders//
Route::get('/orders', [OrdersController::class, 'index']);
Route::get('/orders/order', [OrdersController::class, 'order']);
Route::post('/orders/addorder', [OrdersController::class, 'addorder'])->name('order.add');


Route::get('/info',function(){
    return view('/frontend.info');
});
Route::get('/info', [InfosController::class, 'index']);