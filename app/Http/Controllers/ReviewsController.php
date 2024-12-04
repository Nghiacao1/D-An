<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\UploadFile as Upload;

class ReviewsController extends Controller
{
    public function index( Request $request)
    {
        $reviews = DB::table('reviews')->paginate(10);
        $pageName = 'Tên Trang - News'; 

        return view('reviews.index', compact('reviews', 'pageName'));
    }
    public function show($id)
    {
        $reviews = Review::where('id', '=', $id)->select('*')->first();
        return view('/reviews/detail', compact('reviews'));
    } 
    public function addreview(Request $request, $id)
    {
        $reviewproduct = Product::findOrFail($id);
        $name_char= $reviewproduct->name_character;
        $cus = auth()->guard('customer')->user();
        $name = [];
        $newreview = Review::create([
        'username' => $cus->username,
        'name_character' => $name_char,
        'star' => $request->star,
        'description' => $request->description
        ]);
        $request->validate([
            'images' => ['required', 'image']
        ]);
    
        $path = $request->file('images')->store('public/anh_danh_gia');
        if($newreview instanceof Review) {
            toastr()->success('Đánh giá thành công');
            return redirect()->back();
        } 
        toastr()->error('Lỗi không xác định');
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
    public function showreview($id) {
            $products = Product::where('id', '=', $id)->select('*');
            $name_char = $products->name_character;
            $cus = auth()->guard('customer')->user()->username;
            $reviewss = DB::table('carts')->where('name_character', '=', $name_char)->get();
            return view('/frontend.viewproduct', compact('reviewss'));
        }    
}