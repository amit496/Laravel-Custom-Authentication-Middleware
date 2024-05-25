<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;
use App\Models\Customer;
use App\Models\PasswordUpdateHistory;
use Carbon\Carbon;

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
        return view('Customer.Auth.profile', compact('customerRecord'));
    }

    public function CustomerProfilesSubmit(request $request, $id)
    {
        $customerRecord = Customer::find($id);
        if($customerRecord)
        {
            $customerRecord->name = $request->input('name');
            $customerRecord->email = $request->input('email');
            $customerRecord->dob = $request->input('dob');
            $customerRecord->contact = $request->input('contact');
            $customerRecord->update();
            if($customerRecord)
            {
                return redirect()->back()->with('success', 'Record successfully update!');
            }
            else
            {
                return redirect()->back()->with('error', 'Record not update!');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Record not found!');
        }
    }

    public function CustomerPhotoSubmit(Request $request, $id)
    {
        $request->validate([
            'profileimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $customerRecord = Customer::find($id);

        if ($customerRecord) {
            if ($request->hasFile('profileimage')) {
                $profile = $request->file('profileimage');
                $profileRename = uniqid() . '.' . $profile->getClientOriginalName();
                $profileLocation = public_path('/Customer/profile');
                $customerRecord->profile = $profileRename;
                $customerRecord->update();
                if($customerRecord)
                {
                    $profile->move($profileLocation, $profileRename);
                    return redirect()->back()->with('success', 'Profile photo update!');
                }
                else
                {
                    return redirect()->back()->with('error', 'Profile photo not update!');
                }
            }
        } else {
            return redirect()->back()->with('error', 'Customer record not found');
        }
    }

    public function CustomerPasswordUpdate(Request $request, $id)
    {
        $request->validate([
            "currentpassword" => "required|min:6",
            "newpassword" => "required|min:6",
            "confirmpassword" => "required|min:6|same:newpassword",
        ],
        [
            "currentpassword.required" => "The current password field is required.",
            "currentpassword.min" => "The current password must be at least 6 characters.",
            "newpassword.required" => "The new password field is required.",
            "newpassword.min" => "The new password must be at least 6 characters.",
            "confirmpassword.required" => "The confirmation password field is required.",
            "confirmpassword.min" => "The confirmation password must be at least 6 characters.",
            "confirmpassword.same" => "The confirmation password must match the new password.",
        ]);

        $customerRecord = Customer::find($id);
        if($customerRecord)
        {
            if(Hash::check($request->input('currentpassword'), $customerRecord->password))
            {
                $lastPassword = $customerRecord->password;
                $customerRecord->password = Hash::make($request->input('newpassword'));
                $customerRecord->update();
                if($customerRecord)
                {
                    $history = new PasswordUpdateHistory();
                    $history->customer_id = $id;
                    $history->password_update_date = Carbon::now();
                    $history->last_password = $lastPassword;
                    $history->save();
                    if($history)
                    {
                        return redirect()->back()->with('success', 'Password successfully updated!');
                    }
                    else
                    {
                        return redirect()->back()->with('error', 'Password not updated!');
                    }
                }
            }
            else
            {
                return redirect()->back()->with('error', 'Incorrect current password!');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Record not found!');
        }
    }




}
