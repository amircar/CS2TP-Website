<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    //validates the admin login access password and displays admin login page
    public function validateAdminPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);

        if ($request->password === 'admin123') {
            return view('auth.admin-login');
        }

        return back()->withErrors(['password' => 'The provided password is incorrect.']);
    }

}
