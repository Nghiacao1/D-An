<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class CartsController extends Controller
{
    use AuthenticatesUsers;
    public function addcart(Request $request, $id)
    {
        $cartproduct = Product::findOrFail($id);
        $namepro= $cartproduct->name;
        $cus = auth()->guard('customer')->user();
        $cart = DB::table('carts')->select('*');
        foreach($cart as $item) {
            $namecart = $item->name;
            if( $namepro == $namecart){
            $quantity = $item->quantity+1;
            DB::table('carts')->where('name', $namecart)->update(['quantity' =>$quantity ]);
            return back();
            }
            else{
            $newcart = new Cart;
            $newcart->username = $cus->username;
            $newcart->images = $cartproduct->images;
            $newcart->price = $cartproduct->price;
            $newcart->name = $cartproduct->name;
            $newcart->quantity = 1; 
            $newcart->save();
            if($newcart instanceof Cart) {
                toastr()->success('Data add success');
                return redirect()->back();
            } 
            toastr()->error('Data add fail');
            return back();  
        } }
   
    }
      public function view()
    {
        $cus = auth()->guard('customer')->user(); 
        if($cus==null){
            return view('/cart.view');
        }
        else{
            $username = $cus->username;
            $viewcart = DB::table('carts')->where('username', '=', $username)->get();
            return view('/cart.view', compact('viewcart'));
        }
    }
    public function update(Request $request, $id)
    {
        $carts = Cart::find($id);
        $carts->quantity = $request->quantity;

        $carts->save();
        if($carts instanceof Cart) {
            toastr()->success('Data update success');
            return redirect('/carts/view');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $carts = Cart::find($id);

        $carts->delete();
        if($carts instanceof Cart) {
            toastr()->success('Data delete success');
            return redirect()->back();
        } 
        toastr()->error('Data delete fail');
        return back();
    }
    public function order()
    {
        $cus = auth()->guard('customer')->user(); 
        $username = $cus->username;
        $viewcart = DB::table('carts')->where('username', '=', $username)->get();
        return view('/cart.order',compact('viewcart'));
    }    
}