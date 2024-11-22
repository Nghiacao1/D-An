<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
class InfosController extends Controller
{
    public function index( Request $request)
    {
        $custom = DB::table('customers');
        $cus = auth()->guard('customer')->user();
        $username = $cus->username;
        $order = DB::table('orders')->where('username', '=',$username)->get();
        return view('/frontend.info', compact('cus', 'order'));
    }
}