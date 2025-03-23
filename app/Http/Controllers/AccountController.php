<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function details()
    {
        if (!Auth::check()) { //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }

        $user = Auth::user();
        return view('account/account-details', compact('user'));
    }

    public function passwordChange()
    {
        if (!Auth::check()) { //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }
        return view('account/password-change');
    }

    public function orderHistory()
    {
        if (!Auth::check()) { //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }
        return view('account/order-history');
    }

    public function paymentInfo()
    {
        if (!Auth::check()) { //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }
        return view('account/payment-info');
    }

    public function settings()
    {
        if (!Auth::check()) { //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }
        return view('account/settings');
    }

    public function shipping()
    {
        if (!Auth::check()) { //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }
        return view('account/shipping-info');


    }

    public function update(Request $request)
    {

        $user = Auth::user();

        $user->update([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);

        return view('account/account-details', compact('user'));
    }
}
