<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
class OrdersController extends Controller
{
    use AuthenticatesUsers;
    public function order()
    {
        $cus = auth()->guard('customer')->user(); 
        $username = $cus->username;
        $viewcart = DB::table('carts')->where('username', '=', $username)->get();
        $name = [];
        foreach($viewcart as $row){
            $name = $row->name;
        }
        if($name == null){
            toastr()->error('No items in cart');
            return back();   
        }
        else{
        return view('/orders/order',compact('viewcart'));
    }}
    public function addorder(Request $request)
    {
        $cus = auth()->guard('customer')->user(); 
        $username = $cus->username;
        $viewcart = DB::table('carts')->where('username', '=', $username)->get();
        foreach($viewcart as $row){
        $total=number_format((((float)$row->price)*($row->quantity)*1000000),0,',','.');
        $neworder = new Order();
        $neworder->username = $username;
        $neworder->fullname = $request->fullname;
        $neworder->name_pro = $row->name;
        $neworder->address = $request->address;
        $neworder->phone_number = $request->phone_number;
        $neworder->total = $total;
        $neworder->quantity = $row->quantity;
        $neworder->save();
        }
        if($neworder instanceof Order) {
            toastr()->success('Order success! Thanks for shoping!!');
            DB::table('carts')->where('username', $username)->delete();
            $username = $cus->username;
            $viewcart = DB::table('carts')->where('username', '=', $username)->get();
            return view('/cart.view',compact('viewcart'));
        } 
        toastr()->error('Data add fail');
        return back();   
    }
}