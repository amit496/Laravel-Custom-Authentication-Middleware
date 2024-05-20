<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
use Hash;
use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('Customer.Auth.register');
    }


    public function registerSubmit(Request $request){
        $request->validate([
            "name" => "required|min:3|string",
            "email" => "required|email|unique:customers,email",
            "contact" => "required|numeric",
            "password" => "required|min:6",
            "confirmpassword" => "required|min:6|same:password",
        ]);

        $customerRegister = new Customer();
        $customerRegister->name = $request->input('name');
        $customerRegister->email = $request->input('email');
        $customerRegister->contact = $request->input('contact');
        $customerRegister->password = Hash::make($request->input('password'));
        $customerRegister->save();

        if ($customerRegister) {
            if (Auth::guard('customer')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                Session::put('loggedin', true);
                Session::put($request->input('email'), true);
                return redirect()->route('customer.dashboard')->with('success', 'Registration Complete');
            } else {
                return redirect()->back()->with('error', 'Registration not complete, something wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Registration not complete, something wrong');
        }
    }

    public function login()
    {
        return view('Customer.Auth.login');
    }

    public function loginSubmit(request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6",
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            Session::put('loggedin', true);
            Session::put($request->input('email'), true);
            return redirect()->route('customer.dashboard')->with('success', 'Login Success');
        } else {
            return redirect()->back()->with('error', 'Login failed, something wrong');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        Session::forget('loggedin');

        return redirect()->route('customer.login')->with('success', 'Logged out successfully');
    }

}
