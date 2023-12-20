<?php

namespace App\Http\Controllers;

use App\DataTables\BannersDataTable;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class BannersController extends Controller
{
    public function index(BannersDataTable $dataTable, Request $request)
    {
       
        $banners = DB::table('banners')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/banners.index', compact('banners', 'pageName'),[
            '/banners' => $banners
        ]);
    }
    public function show(Request $request, $id)
    {
        $value = $request->session()->get('key');
        $banners = BannersController::select('id','title','path','sortOrder','status','type','datas','cateid');
    } 
    public function create()
    {
        //Hiển thị trang thêm buildings
        return view('banners.create');
    }
    public function store(Request $request)
    {
        $newbuild = new Banner;
        $newbuild->title = $request->title;
        $newbuild->path = $request->path;
        $newbuild->sortOrder = $request->sortOrder;
        $newbuild->status = $request->status;
        $newbuild->type = $request->type;
        $newbuild->datas = $request->datas;
        $newbuild->cateid = $request->cateid;
        
        $newbuild->save();
        if($newbuild instanceof Banner) {
            toastr()->success('Data add success');
            return redirect('/banners');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $banners = Banner::findOrFail($id);
        $pageName = 'Banners - Update';
        return view('banners.Update', compact('banners', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $banners = Banner::find($id);
        $banners->title = $request->title;
        $banners->path = $request->path;
        $banners->sortOrder = $request->sortOrder;
        $banners->status = $request->status;
        $banners->type = $request->type;
        $banners->datas = $request->datas;
        $banners->cateid = $request->cateid;

        $banners->save();
        if($banners instanceof Banner) {
            toastr()->success('Data update success');
            return redirect('/banners');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $banners = Banner::find($id);

        $banners->delete();
        if($banners instanceof Banner) {
            toastr()->success('Data delete success');
            return redirect('/banners');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}
