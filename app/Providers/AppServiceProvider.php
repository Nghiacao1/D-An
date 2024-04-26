<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Orderdetail;
use App\Models\Product;
use Illuminate\Support\Carbon;
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
        $productss = DB::table('products')->paginate(8);
        $productsShow = DB::table('products')->paginate(12);
        $cuscount = Customer::count();
        $ordercount = Orderdetail::count();
        $builcount = Building::count();
        $customers = DB::table('customers')->paginate(10);
        $blogss= DB::table('blogs')->paginate(6);
        $lock1 = DB::table('macs')->where('LockName','neo3S')->count();
        $lock2 = DB::table('macs')->where('LockName','neo7S')->count();
        $lock3 = DB::table('macs')->where('LockName','neo66')->count();
        $lock4 = DB::table('macs')->where('LockName','neoA6S')->count();
        $lock5 = DB::table('macs')->where('LockName','neoLUX3')->count();
        $sales = DB::table('orderdetails')->sum('price');
        $sales18 = Orderdetail::where( DB::raw('YEAR(createdDate)'), '=', '2018' )->sum('price');
        $sales19 = Orderdetail::where( DB::raw('YEAR(createdDate)'), '=', '2019' )->sum('price');
        $sales20 = Orderdetail::where( DB::raw('YEAR(createdDate)'), '=', '2020' )->sum('price');
        $sales21 = Orderdetail::where( DB::raw('YEAR(createdDate)'), '=', '2021' )->sum('price');
        $sales22 = Orderdetail::where( DB::raw('YEAR(createdDate)'), '=', '2022' )->sum('price');
        $sales23 = Orderdetail::where( DB::raw('YEAR(createdDate)'), '=', '2023' )->sum('price');
        $cus = auth()->guard('customer')->user();
        
        View::share('cus', $cus);
        View::share('sales', $sales);
        View::share('sales18', $sales18);
        View::share('sales19', $sales19);
        View::share('sales20', $sales20);
        View::share('sales21', $sales21);
        View::share('sales22', $sales22);
        View::share('sales23', $sales23);
        View::share('lock1', $lock1);
        View::share('lock2', $lock2);
        View::share('lock3', $lock3);
        View::share('lock4', $lock4);
        View::share('lock5', $lock5);
        View::share('productsShow', $productsShow);
        View::share('productss', $productss);
        View::share('blogss',$blogss);    
        View::share('customers', $customers);
        View::share('builcount', $builcount);
        View::share('cuscount',$cuscount); 
        View::share('ordercount',$ordercount);
    }
}
