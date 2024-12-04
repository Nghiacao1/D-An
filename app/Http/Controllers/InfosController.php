<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Laravel\Prompts\alert;
use Hash;
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
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $pageName = 'Customers - Update';
        return view('/frontend.thongtin.capnhatthongtin', compact('customer', 'pageName'));
    }
    public function changeinfo( Request $request){
        $cus = auth()->guard('customer')->user();
        $customer = Customer::find($cus->id);
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
    public function editpass($id){
        $customer = Customer::findOrFail($id);
        $pageName = 'Customers - Update';
        return view('/frontend.thongtin.doipass', compact('customer', 'pageName'));
    }
    public function changepass(Request $request){
        $cus = auth()->guard('customer')->user();
        $customer = Customer::find($cus->id);
        $pass = $request->Password;
        if(Hash::check($pass,$customer->password))
            { 
                if($request->Repassword == $request->Newpassword && $request->Password != $request->Newpassword)
                {
                    $customer->password = Hash::make($request->Newpassword);
                    $customer->save();
                     toastr()->success('Đổi mật khẩu thành công!');
                     return redirect('/info');
                }
                elseif($request->Password == $request->Newpassword)
                {
                     toastr()->error('Mật khẩu mới phải khác với mật khẩu cũ!');
                }
                else
                 toastr()->error('Nhập lại không trùng khớp');
           }
        else
             toastr()->error('Mật khẩu không chính xác!');
        return back();
         
    }
}