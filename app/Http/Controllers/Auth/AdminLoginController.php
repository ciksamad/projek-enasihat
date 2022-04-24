<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function showloginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        //validate form data

        $this->validate($request , [

            'email' =>'required|email',
            'password'=>'required|min:6'
        ]);

        //attempt to log user in

        if( Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){

            //if successful, redirect to intended location

            return redirect()->intended(route('temujanji.adminindex'));
        }
       
        //if unsuccessful redirect back to login

        return redirect()->back()->withInput($request->only('email','remember'));
    }

}
