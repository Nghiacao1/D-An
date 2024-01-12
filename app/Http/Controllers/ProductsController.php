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
        $newproduct->product_id = $request->product_id;
        $newproduct->images = $request->images;
        $newproduct->introduce = $request->introduce;
        $newproduct->description = $request->description;
        $newproduct->price = $request->price;
        $newproduct->salient_features = $request->salient_features;
        $newproduct->connect = $request->connect;
        $newproduct->access_mode = $request->access_mode;
        $newproduct->support_system = $request->support_system;
        $newproduct->power = $request->power;
        $newproduct->lowbattery_warning = $request->lowbattery_warning;
        $newproduct->security = $request->security;
        $newproduct->img_description = $request->img_description;

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
        $products->product_id = $request->product_id;
        $products->images = $request->images;
        $products->introduce = $request->introduce;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->salient_features = $request->salient_features;
        $products->connect = $request->connect;
        $products->access_mode = $request->access_mode;
        $products->support_system = $request->support_system;
        $products->power = $request->power;
        $products->lowbattery_warning = $request->lowbattery_warning;
        $products->img_description = $request->img_description;


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
        return view('/frontend.viewproduct', compact('products'));
    }    
}