<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $review = DB::table('reviews')->where('username', $cus->username)->get();
        $name = [];
        foreach($review as $row) {
            array_push($name, ($row->name_character));
        }
        $newreview = new Review;
        $newreview->username = $cus->username;
        $newreview->name_character = $name_char;
        $newreview->star = $request->star;
        $newreview->images = $request->images;
        $newreview->description = $request->description; 
        $newreview->save();
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