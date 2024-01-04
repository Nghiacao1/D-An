<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
use Illuminate\Support\Facades\DB;

class MailManagerController extends Controller
{
    public function index(Request $request)
    {
        $mails = DB::table('mails')->paginate(10);

        $pageName = 'Tên Trang - News';
        return view('/mailmanager.index', compact('mails', 'pageName'),[
            '/mailmanager' => $mails
        ]);
    }
    public function show($id)
    {
        $mails = Mail::where('id', '=', $id)->select('*')->first();
        return view('/mailmanager/detail', compact('mails'));
    } 
    public function create()
    {
        //Hiển thị trang thêm agencies
        return view('mailmanager.create');
    }
    public function store(Request $request)
    {
        $newmail = new Mail; 
        $newmail->name = $request->name;
        $newmail->title = $request->title;
        
        $newmail->save();
        if($newmail instanceof Mail) {
            toastr()->success('Data add success');
            return redirect('/mailmanager');
        } 
        toastr()->error('Data add fail');
        return back();
    }
    public function edit($id)
    {
        $mailmanager = Mail::findOrFail($id);
        $pageName = 'mailmanager - Update';
        return view('mailmanager.Update', compact('mailmanager', 'pageName'));
    }
    public function update(Request $request, $id)
    {
        
        $mailmanager = Mail::find($id);
        $mailmanager->name = $request->name;
        $mailmanager->title = $request->title;

        $mailmanager->save();
        if($mailmanager instanceof Mail) {
            toastr()->success('Data update success');
            return redirect('/mailmanager');
        } 
        toastr()->error('Data update fail');
        return back();
    }
    public function destroy($id)
    {
        $mailmanager = Mail::find($id);

        $mailmanager->delete();
        if($mailmanager instanceof Mail) {
            toastr()->success('Data delete success');
            return redirect('/mailmanager');
        } 
        toastr()->error('Data delete fail');
        return back();
    }
}