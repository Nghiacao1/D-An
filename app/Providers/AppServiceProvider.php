<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Customer;
use App\Models\Building;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\RegisterController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {   
        $productss = DB::table('products')->paginate(10);
        $productsShow = DB::table('products')->paginate(12);
        $cuscount = Customer::count();
        $catecount = Category::count();
        $builcount = Building::count();
        $customers = DB::table('customers')->paginate(10);
        $blogss= DB::table('blogs')->paginate(6);

        View::share('productsShow', $productsShow);
        View::share('productss', $productss);
        View::share('blogss',$blogss);    
        View::share('customers', $customers);
        View::share('builcount', $builcount);
        View::share('cuscount',$cuscount); 
        View::share('catecount',$catecount);
    }
}
