<?php

namespace App\Http\Controllers;

use App\DataTables\CustomersDataTable;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CustomersController extends Controller
{
    public function index(customersDataTable $dataTable, Request $request)
    {
        $customers = DB::table('customers')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/customers.index', compact('customers', 'pageName'),[
            '/customers' => $customers
        ]);
    }
    public function show($id)
    {
        $customers = Customer::where('id', '=', $id)->select('*')->first();
        return view('/customers/detail', compact('customers'));
    } 
    public function create()
    {
        //Hiển thị trang thêm buildings
        return view('customers.create');
    }
    public function store(Request $request)
    {
        $customerCode = request($request->code,'');
        $newcus = new Customer;
        $newcus->code = $customerCode;
        $newcus->fullname = $request->fullname;
        $newcus->email = $request->email;
        $newcus->password = $request->password;
        $newcus->username = $request->username;
        $newcus->neolock_username = $request->neolock_username;
        $newcus->phone = $request->phone;
        $newcus->address = $request->address;
        $newcus->country = $request->country;
        $newcus->district = $request->district;
        $newcus->city = $request->city;
        $newcus->avatar = $request->avatar;
        $newcus->balance = $request->balance;
        $newcus->roles = $request->roles;
        $newcus->CCCD = $request->CCCD;
        $newcus->product_type = $request->product_type;

        $newcus->save();
        if($newcus instanceof Customer) {
            toastr()->success('Data add success');
            return redirect('/customers');
        } 
        toastr()->error('Data add fail');
        return back();   
    }
    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        $pageName = 'Customers - Update';
        return view('customers.Update', compact('customers', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        $customers = Customer::find($id);
       $customers->code = $request->code;
       $customers->fullname = $request->fullname;
       $customers->email = $request->email;
       $customers->password = $request->password;
       $customers->username = $request->username;
       $customers->neolock_username = $request->neolock_username;
       $customers->phone = $request->phone;
       $customers->address = $request->address;
       $customers->country = $request->country;
       $customers->district = $request->district;
       $customers->city = $request->city;
       $customers->avatar = $request->avatar;
       $customers->balance = $request->balance;
       $customers->roles = $request->roles;
       $customers->CCCD = $request->CCCD;
       $customers->product_type = $request->product_type;
        $customers->save();
        if($customers instanceof Customer) {
            toastr()->success('Data update success');
            return redirect('/customers');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $customers = Customer::find($id);

        $customers->delete();
        if($customers instanceof Customer) {
            toastr()->success('Data delete success');
            return redirect('/customers');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}