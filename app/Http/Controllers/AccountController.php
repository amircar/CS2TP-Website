<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\Order;
use App\Models\Address;


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
        $id = Auth::id();
        $previous = Order::with('items.stock.product.product_images', 'items.stock.size')->where('user_id', $id)->get();
        return view('account/order-history', compact('previous'));
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

        $user = Auth::user();
        $address = $user->address;

        return view('account/shipping-info', compact("address"));


    }

    public function updateDetails(Request $request)
    {

        $user = Auth::user(); //Obtain User

        $user->update([ //Update users details
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);

        return view('account/account-details', compact('user'))->with('Message',"Successfully changed details"); //return with success message
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) { //Check password is old password
            return back()->with('message', 'Current password is incorrect');
        }

        if ($request->new_password !== $request->retype_password) { //Check passwords are equal
            return back()->with('message', 'New passwords do not match');
        }

        $user->update(['password' => Hash::make($request->new_password)]); //Change password

        return back()->with('message', 'Successfully changed password');
    }

    public function updateShipping(Request $request)
    {
        $user = Auth::user(); //Obtain User

        $address = Address::updateOrCreate( //Create or update users address
            ['user_id' => $user->id],
            [
                'address_line1' => $request->address1,
                'address_line2' => $request->address2,
                'city' => $request->city,
                'postcode' => $request->postcode,
                'country' => $request->country,
            ]
        );

        return back()->with('message', 'Shipping information updated successfully!');
    }

    
    public function deleteAccount()
    {
        $user = Auth::user(); //Obtain User

        if (!$user) {
            return redirect()->route('home')->with('message', 'User not found.');
        }

        Auth::logout(); //Logout

        $user->delete(); //Delete User

        return redirect()->route('home')->with('message', 'Account deleted successfully.');
    }
}
