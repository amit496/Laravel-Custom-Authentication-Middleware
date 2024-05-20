<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::guard('customer')->check())
        {
            return view('Customer.Dashboard');
        }
        else
        {
            return redirect()->route('customer.login');
        }
    }

    public function CustomerProfiles()
    {
        $email = Auth::guard('customer')->user()->email;
        $customerRecord = Customer::where('email', $email)->first();
        dd($customerRecord);
        return view('Customer.Auth.profile');
    }
}
