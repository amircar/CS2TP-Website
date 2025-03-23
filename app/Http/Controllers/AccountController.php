<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function details()
    {
        return view('account/account-details');
    }

    public function passwordChange()
    {
        return view('account/password-change');
    }

    public function orderHistory()
    {
        return view('account/order-history');
    }

    public function paymentInfo()
    {
        return view('account/payment-info');
    }

    public function settings()
    {
        return view('account/settings');
    }

    public function shipping()
    {
        return view('account/shipping-info');
    }
}
