<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class CustomerLoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function customerLogin()
    {
        return view('loginfrontend');
    }


    public function customerLoginPost(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (auth()->guard('customer')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            $cus = auth()->guard('customer')->user();
            
            view::share('cus', $cus);
            return view('/frontend.home', compact('cus'));
        }else{
            return back()->with('error','your username and password are wrong.');
        }
    }
}