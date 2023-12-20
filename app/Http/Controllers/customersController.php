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
        $newcus = new Customer;
        $newcus->id = $request->id; 
        $newcus->code = $request->code;
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
        $newcus->status = $request->status;
        $newcus->created_date = $request->created_date;
        $newcus->avatar = $request->avatar;
        $newcus->token = $request->token;
        $newcus->point = $request->point;
        $newcus->webcloud_enable = $request->webcloud_enable;
        $newcus->security_key = $request->security_key;
        $newcus->fcm = $request->fcm;
        $newcus->social_id = $request->social_id;
        $newcus->last_login = $request->last_login;
        $newcus->access_token = $request->access_token;
        $newcus->refresh_token = $request->refresh_token;
        $newcus->open_id = $request->open_id;
        $newcus->scope = $request->scope;
        $newcus->expires_in = $request->expires_in;
        $newcus->identification_number = $request->identification_number;
        $newcus->identification_img_1 = $request->identification_img_1;
        $newcus->identification_img_2 = $request->identification_img_2;
        $newcus->balance = $request->balance;
        $newcus->receiveFcm = $request->receiveFcm;
        $newcus->roles = $request->roles;
        $newcus->emailVerify = $request->emailVerify;
        $newcus->mobileVerify = $request->mobileVerify;
        $newcus->remark = $request->remark;
        $newcus->is_deleted = $request->is_deleted;
        $newcus->commission = $request->commission;
        $newcus->parent = $request->parent;
        $newcus->CCCD = $request->CCCD;
        $newcus->product_type = $request->product_type;
        $newcus->is_receive_email = $request->is_receive_email;

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
        $customers->id = $request->id; 
       $customers->code = $request->code;
       $customers->fullname = $request->fullname;
       $customers->email = $request->email;
       $customers->password = $request->password;
       $customers->username = $request->username;
       $customers->neolock_username = $request->neolock_username;
       $customers->phone->$request->phone;
       $customers->address = $request->address;
       $customers->country = $request->country;
       $customers->district = $request->district;
       $customers->city = $request->city;
       $customers->status = $request->status;
       $customers->created_date = $request->created_date;
       $customers->avatar = $request->avatar;
       $customers->token = $request->token;
       $customers->point = $request->point;
       $customers->webcloud_enable = $request->webcloud_enable;
       $customers->security_key = $request->security_key;
       $customers->fcm = $request->fcm;
       $customers->social_id = $request->social_id;
       $customers->last_login = $request->last_login;
       $customers->access_token = $request->access_token;
       $customers->refresh_token = $request->refresh_token;
       $customers->open_id = $request->open_id;
       $customers->scope = $request->scope;
       $customers->expires_in = $request->expires_in;
       $customers->identification_number = $request->identification_number;
       $customers->identification_img_1 = $request->identification_img_1;
       $customers->identification_img_2 = $request->identification_img_2;
       $customers->balance = $request->balance;
       $customers->receiveFcm = $request->receiveFcm;
       $customers->roles = $request->roles;
       $customers->emailVerify = $request->emailVerify;
       $customers->mobileVerify = $request->mobileVerify;
       $customers->remark = $request->remark;
       $customers->is_deleted = $request->is_deleted;
       $customers->commission = $request->commission;
       $customers->parent = $request->parent;
       $customers->CCCD = $request->CCCD;
       $customers->product_type = $request->product_type;
       $customers->is_receive_email = $request->is_receive_email;

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