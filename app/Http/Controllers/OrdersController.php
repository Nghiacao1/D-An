<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
class OrdersController extends Controller
{
    use AuthenticatesUsers;
    public function index( Request $request)
    {
        $orders = DB::table('orders')->paginate(10);
        $pageName = 'Tên Trang - News'; 

        return view('orders.index', compact('orders', 'pageName'));
    }
    public function show($id)
    {
        $orders = Order::where('id', '=', $id)->select('*')->first();
        return view('/orders/vieworder', compact('orders'));
    } 
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
        $total=number_format($row->price *$row->quantity,0,",",".");

        $neworder = new Order();
        $neworder->username = $username;
        $neworder->fullname = $request->fullname;
        $neworder ->name_char = $row->name_char;
        $neworder->name = $row->name;
        $neworder->category = $row->category;
        $neworder->address = $request->address;
        $neworder->phone_number = $request->phone_number;
        $neworder->total = $total;
        $neworder->quantity = $row->quantity;
        $neworder->trangthai = 1;
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
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->trangthai = $request->trangthai;

        $order->save();
        if($order instanceof Order) {
            toastr()->success('Data update success');
            return redirect('orders');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $orders = Order::find($id);

        $orders->delete();
        if($orders instanceof Order) {
            toastr()->success('Data delete success');
            return redirect('/orders');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}