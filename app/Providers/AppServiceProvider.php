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
use App\Models\Order;
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
        $cuscount = Customer::count();
        $customers = DB::table('customers')->paginate(10);
        $blogss= DB::table('blogs')->paginate(6);
        
        $cus = auth()->guard('customer')->user();
        $ordercount = Order::count();
        $order = DB::table('orders')->get();
        $total = 0;
        foreach($order as $orders){
            $total += $orders->Total;
        }

        View::share('cus', $cus);

        View::share('productss', $productss);
        View::share('blogss',$blogss);    
        View::share('customers', $customers);
        View::share('cuscount', $cuscount);
        View::share('total', $total);
        View::share('ordercount', $ordercount);
        
    }
}
