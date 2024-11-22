<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index( Request $request)
    {
        $products = DB::table('products')->paginate(10);
        $pageName = 'Tên Trang - News'; 

        return view('products.index', compact('products', 'pageName'));
    }
    public function show($id)
    {
        $products = Product::where('id', '=', $id)->select('*')->first();
        return view('/products/detail', compact('products'));
    } 
    public function create()
    {
        //Hiển thị trang thêm buildings
        return view('products.create');
    }
    public function store(Request $request)
    {
        $newproduct = new Product;
        $newproduct->name = $request->name;
        $newproduct->name_character = $request->name_character;
        $newproduct->images = $request->images;
        $newproduct->images2 = $request->images2;
        $newproduct->images3 = $request->images3;
        $newproduct->images4 = $request->images4;
        $newproduct->category = $request->category;
        $newproduct->description = $request->description;
        $newproduct->price = $request->price;
        $newproduct->sale_price = $request->sale_price;
        $newproduct->size = $request->size;
        $newproduct->brand = $request->brand;

        $newproduct->save();
        if($newproduct instanceof Product) {
            toastr()->success('Data add success');
            return redirect('/products');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $pageName = 'Products - Update';
        return view('products.Update', compact('products', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->name = $request->name;
        $products->name_character = $request->name_character;
        $products->images = $request->images;
        $products->images2 = $request->images2;
        $products->images3 = $request->images3;
        $products->images4 = $request->images4;
        $products->category = $request->category;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->size = $request->size;
        $products->brand = $request->brand;



        $products->save();
        if($products instanceof Product) {
            toastr()->success('Data update success');
            return redirect('/products');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $products = Product::find($id);

        $products->delete();
        if($products instanceof Product) {
            toastr()->success('Data delete success');
            return redirect('/products');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
    public function viewproduct($id)
    {
        $products = Product::where('id', '=', $id)->select('*')->first();
        $cus = [];
        $cus = auth()->guard('customer')->user();
        if($cus != null ){
            $cus = $cus->username;
        }
        $name_char = $products->name_character;
        $review = DB::table('reviews')->where('name_character', '=', $name_char)->get();
        $reviewss =  DB::table('reviews')->where([['username', '=', $cus],['name_character', '=', $name_char]])->get();
        if(empty($review)){
            echo "Variable 'a' is empty.<br>";
        }
        return view('/frontend.viewproduct', compact('products','review','cus','reviewss'));
    }
    // public function showreview($id) {
    //     $products = Product::where('id', '=', $id)->select('*');
    //     $name_char = $products->name_character;
    //     $review = DB::table('carts')->where('name_character', '=', $name_char)->get();
    //     return view('/frontend.viewproduct', compact('review'));
    // }    
}