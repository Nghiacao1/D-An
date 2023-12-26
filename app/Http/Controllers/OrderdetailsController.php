<?php

namespace App\Http\Controllers;

use App\DataTables\OrderdetailsDataTable;
use Illuminate\Http\Request;
use App\Models\Orderdetail;
use Illuminate\Support\Facades\DB;
class OrderdetailsController extends Controller
{
    public function index(OrderdetailsDataTable $dataTable, Request $request)
    {
       
        $orderdetails = DB::table('orderdetails')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/orderdetails.index', compact('orderdetails', 'pageName') );
    }
    public function show(Request $request, $id)
    {
        $orderdetails = Orderdetail::where('id', '=', $id)->select('*')->first();
        return view('/orderdetails/detail', compact('orderdetails'));
    } 
    public function create()
    {
        //Hiển thị trang thêm orderdetails
        return view('orderdetails.create');
    }
    public function store(Request $request)
    {
        $newoder = new Orderdetail();
        $newoder->orderId = $request->orderId;
        $newoder->code = $request->code;
        $newoder->shopId = $request->shopId;
        $newoder->status = $request->status;
        $newoder->createdDate = $request->createdDate;
        $newoder->quantity = $request->quantity;
        $newoder->price = $request->price;
        $newoder->description = $request->description;
        $newoder->macAddress = $request->macAddress;

        $newoder->save();
        if($newoder instanceof Orderdetail) {
            toastr()->success('Data add success');
            return redirect('/orderdetails');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $orderdetails = Orderdetail::findOrFail($id);
        $pageName = 'Orderdetails - Update';
        return view('Orderdetails.Update', compact('orderdetails', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $orderdetails = Orderdetail::find($id);
        $orderdetails->orderId = $request->orderId;
        $orderdetails->code = $request->code;
        $orderdetails->shopId = $request->shopId;
        $orderdetails->status = $request->status;
        $orderdetails->createdDate = $request->createdDate;
        $orderdetails->quantity = $request->quantity;
        $orderdetails->price = $request->price;
        $orderdetails->description = $request->description;

        $orderdetails->save();
        if($orderdetails instanceof Orderdetail) {
            toastr()->success('Data update success');
            return redirect('/orderdetails');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $orderdetails = Orderdetail::find($id);

        $orderdetails->delete();
        if($orderdetails instanceof Orderdetail) {
            toastr()->success('Data delete success');
            return redirect('/orderdetails');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}
