<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SampleMail;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class SendMailController extends Controller
{
    public function demomail()
    {
        $customer = DB::table("customers")->get('email');
        $content = [
            'subject' => 'This is the mail subject',
            'body' => 'This is the email body of how to send email from laravel 10 with mailtrap.'
        ];

        Mail::to($customer)->send(new SampleMail($content));

        toastr()->success('Send email success');
        return redirect('/mailmanager');

    }
}