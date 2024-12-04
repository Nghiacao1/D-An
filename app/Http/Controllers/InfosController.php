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
        return view('/frontend.thongtin.info', compact('cus', 'order'));
    }
    public function changeinfo( Request $request, $id){
        $customer = Customer::find($id);
        $customer->fullname = $request->fullname;
        $customer->username = $request->username;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->country = $request->country;
        $customer->district = $request->district;
        $customer->city = $request->city;
        $customer->avatar = $request->avatar;
        $customer->CCCD = $request->CCCD;
        $customer->save();
         if($customer instanceof Customer) {
             toastr()->success('Data update success');
             return redirect('/info');
         } 
         toastr()->error('Data update fail');
         return back();
    }
}