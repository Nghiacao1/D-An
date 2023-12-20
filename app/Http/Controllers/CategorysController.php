<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorysController extends Controller
{
    public function index( Request $request)
    {
       
        $category = DB::table('category')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/category.index', compact('category', 'pageName'),[
            '/category' => $category
        ]);
    }
    public function show(Request $request, $id)
    {
       
    } 
    public function create()
    {
        //Hiển thị trang thêm buildings
        return view('/category.create');
    }
    public function store(Request $request)
    {
        $newcate = new Category();
        $newcate->customer_id = $request->customer_id;
        $newcate->title = $request->title;
        $newcate->image = $request->image;
        $newcate->description = $request->description;
        $newcate->created_date = $request->created_date;
        $newcate->modified = $request->modified;
        $newcate->status = $request->status;
        $newcate->color_tag = $request->color_tag;
        $newcate->locklist = $request->locklist;
        
        $newcate->save();
        if($newcate instanceof Category) {
            toastr()->success('Data add success');
            return redirect('/category');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $pageName = 'Category - Update';
        return view('category.Update', compact('category', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $categorys = Category::find($id);
        $categorys->customer_id = $request->customer_id;
        $categorys->title = $request->title;
        $categorys->image = $request->image;
        $categorys->description = $request->description;
        $categorys->created_date = $request->created_date;
        $categorys->modified = $request->modified;
        $categorys->status = $request->status;
        $categorys->color_tag = $request->color_tag;
        $categorys->locklist = $request->locklist;

        $categorys->save();
        if($categorys instanceof Category) {
            toastr()->success('Data update success');
            return redirect('/category');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $categorys = Category::find($id);

        $categorys->delete();
        if($categorys instanceof Category) {
            toastr()->success('Data delete success');
            return redirect('/category');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}
