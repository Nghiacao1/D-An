<?php

namespace App\Http\Controllers;

use App\DataTables\AgenciesDataTable;
use Illuminate\Http\Request;
use App\Models\Agencie;
use Illuminate\Support\Facades\DB;

class AgenciesController extends Controller
{
    public function index(Request $request)
    {
        $agencies = DB::table('agencies')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/agencies.index', compact('agencies', 'pageName'),[
            '/agencies' => $agencies
        ]);
    }
    public function show($id)
    {
        $newage = Agencie::where('id', '=', $id)->select('*')->first();
        return view('/agencies/detail', compact('agencies'));
    } 
    public function create()
    {
        //Hiển thị trang thêm agencies
        return view('agencies.create');
    }
    public function store(Request $request)
    {
        $newage = new Agencie; 
        $newage->name = $request->name;
        $newage->email = $request->email;
        $newage->cccd = $request->cccd;
        $newage->address = $request->address;
        
        $newage->save();
        if($newage instanceof Agencie) {
            toastr()->success('Data add success');
            return redirect('/agencies');
        } 
        toastr()->error('Data add fail');
        return back();
    }
    public function edit($id)
    {
        $agencies = Agencie::findOrFail($id);
        $pageName = 'Agencies - Update';
        return view('agencies.Update', compact('agencies', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $agencies = Agencie::find($id);
        $agencies->name = $request->name;
        $agencies->email = $request->email;
        $agencies->cccd = $request->cccd;
        $agencies->address = $request->address;

        $agencies->save();
        if($agencies instanceof Agencie) {
            toastr()->success('Data update success');
            return redirect('/agencies');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $agencies = Agencie::find($id);

        $agencies->delete();
        if($agencies instanceof Agencie) {
            toastr()->success('Data delete success');
            return redirect('/agencies');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}
