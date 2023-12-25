<?php

namespace App\Http\Controllers;

use App\DataTables\MacssDataTable;
use Illuminate\Http\Request;
use App\Models\Mac;
use Illuminate\Support\Facades\DB;

class MacsController extends Controller
{
    public function index( Request $request)
    {
        $macs = DB::table('macs')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/macs.index', compact('macs', 'pageName'),[
            '/macs' => $macs
        ]);
    }
    public function show($id)
    {
        $macs = Mac::where('id', '=', $id)->select('*')->first();
        return view('/macs/detail', compact('macs'));
    } 
    public function create()
    {
        //Hiển thị trang thêm macs
        return view('macs.create');
    }
    public function store(Request $request)
    {
        $newmac = new Mac; 
        $newmac->fullname = $request->fullname;

        $newmac->email = $request->email;
        $newmac->address = $request->address;
        $newmac->purchaseDate = $request->purchaseDate;
        $newmac->sellDate = $request->sellDate;
        $newmac->saleMan = $request->saleMan;
        $newmac->warrantyDate = $request->warrantyDate;
        $newmac->provider = $request->provider;
        $newmac->updatedDate = $request->updatedDate;
        $newmac->lockName = $request->lockName;
        $newmac->buyerName = $request->buyerName;
        $newmac->buyerEmail = $request->buyerEmail;
        $newmac->buyerPhone = $request->buyerPhone;
        $newmac->buyerAddress = $request->buyerAddress;
        
        $newmac->save();
        if($newmac instanceof Mac) {
            toastr()->success('Data add success');
            return redirect('/macs');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $macs = Mac::findOrFail($id);
        $pageName = 'Macs - Update';
        return view('macs.Update', compact('macs', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $macs = Mac::find($id);
        $macs->fullname = $request->fullname;
        $macs->email = $request->email;
        $macs->address = $request->address;
        $macs->purchaseDate = $request->purchaseDate;
        $macs->sellDate = $request->sellDate;
        $macs->saleMan = $request->saleMan;
        $macs->warrantyDate = $request->warrantyDate;
        $macs->provider = $request->provider;
        $macs->updatedDate = $request->updatedDate;
        $macs->lockName = $request->lockName;
        $macs->buyerName = $request->buyerName;
        $macs->buyerEmail = $request->buyerEmail;
        $macs->buyerPhone = $request->buyerPhone;
        $macs->buyerAddress = $request->buyerAddress;

        $macs->save();
        if($macs instanceof Mac) {
            toastr()->success('Data update success');
            return redirect('/macs');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $macs = Mac::find($id);

        $macs->delete();
        if($macs instanceof Mac) {
            toastr()->success('Data delete success');
            return redirect('/macs');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}
