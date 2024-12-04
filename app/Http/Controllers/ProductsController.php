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
    public function showsanpham(){
        $sanpham = DB::table('products')->paginate(20);
        return view('/frontend.product', compact('sanpham'));
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
    public function search(Request $req)
    {


        $sanpham = Product::where('name_character', 'like', '%' . $req->key . '%')
            ->orWhere('name', 'like', '%' . $req->key . '%')
            ->orWhere('category', 'like', '%' . $req->key . '%')    
            ->paginate(20);
        $timkiem = $req->key;
        // if (isset($_GET['sort_by'])) {
        //     $sort_by = $_GET['sort_by'];

        //     if ($sort_by == 'tang-dan') {
        //         $sanpham = Product::where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     } elseif ($sort_by == 'giam-dan') {
        //         $sanpham = Product::where('tinh_trang', '0')->orderby('gia', 'DESC')->paginate(12);
        //     } elseif ($sort_by == 'moi-cu') {
        //         $sanpham = Product::where('tinh_trang', '0')->orderby('created_at', 'DESC')->paginate(12);
        //     } elseif ($sort_by == 'cu-moi') {
        //         $sanpham = Product::where('tinh_trang', '0')->orderby('created_at', 'ASC')->paginate(12);
        //     } elseif ($sort_by == 'A-Z') {
        //         $sanpham = Product::where('tinh_trang', '0')->orderby('ten_sp', 'ASC')->paginate(12);
        //     } elseif ($sort_by == 'Z-A') {
        //         $sanpham = Product::where('tinh_trang', '0')->orderby('ten_sp', 'DESC')->paginate(12);
        //     }
        // }

        // if (isset($_GET['price'])) {
        //     $price = $_GET['price'];

        //     if ($price == '1') {
        //         $sanpham = Product::where('gia', '<', 300000)->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //         $sanpham = Product::where('ten_sp', 'like', '%' . $req->key . '%')
        //             ->orWhere('gia', $req->key)
        //             ->paginate(12);
        //     } elseif ($price == '2') {
        //         $sanpham = Product::whereBetween('gia', [300000, 500000])->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     } elseif ($price == '3') {
        //         $sanpham = Product::whereBetween('gia', [500000, 700000])->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     } elseif ($price == '4') {
        //         $sanpham = Product::whereBetween('gia', [700000, 1000000])->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     } elseif ($price == '5') {
        //         $sanpham = Product::whereBetween('gia', [1000000, 1200000])->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     } elseif ($price == '6') {
        //         $sanpham = Product::whereBetween('gia', [1200000, 1500000])->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     } elseif ($price == '7') {
        //         $sanpham = Product::whereBetween('gia', [1500000, 2000000])->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     } elseif ($price == '8') {
        //         $sanpham = Product::where('gia', '>', 2000000)->where('tinh_trang', '0')->orderby('gia', 'ASC')->paginate(12);
        //     }
        // }
        return view('/frontend.product', compact('sanpham'));
    }

    // public function showreview($id) {
    //     $products = Product::where('id', '=', $id)->select('*');
    //     $name_char = $products->name_character;
    //     $review = DB::table('carts')->where('name_character', '=', $name_char)->get();
    //     return view('/frontend.viewproduct', compact('review'));
    // }    
}