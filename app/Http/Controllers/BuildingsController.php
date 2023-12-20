<?php

namespace App\Http\Controllers;

use App\DataTables\BuildingsDataTable;
use Illuminate\Http\Request;
use App\Models\Building;
use Illuminate\Support\Facades\DB;

class BuildingsController extends Controller
{
    public function index(BuildingsDataTable $dataTable, Request $request)
    {
        $buildings = DB::table('buildings')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/buildings.index', compact('buildings', 'pageName'),[
            '/buildings' => $buildings
        ]);
    }
    public function show($id)
    {
        $buildings = Building::where('id', '=', $id)->select('*')->first();
        return view('/buildings/detail', compact('buildings'));
    } 
    public function create()
    {
        //Hiển thị trang thêm buildings
        return view('buildings.create');
    }
    public function store(Request $request)
    {
        $newbuild = new Building; 
        $newbuild->name = $request->name;
        $newbuild->hotelId = $request->hotelId;
        $newbuild->code = $request->code;
        
        $newbuild->save();
        if($newbuild instanceof Building) {
            toastr()->success('Data add success');
            return redirect('/buildings');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $buildings = Building::findOrFail($id);
        $pageName = 'Buildings - Update';
        return view('buildings.Update', compact('buildings', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $buildings = Building::find($id);
        $buildings->name = $request->name;
        $buildings->hotelId = $request->hotelId;
        $buildings->code = $request->code;

        $buildings->save();
        if($buildings instanceof Building) {
            toastr()->success('Data update success');
            return redirect('/buildings');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $buildings = Building::find($id);

        $buildings->delete();
        if($buildings instanceof Building) {
            toastr()->success('Data delete success');
            return redirect('/buildings');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}
