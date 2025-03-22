<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class ProcessController extends Controller
{
    public function process()
    {
        if(!Auth::check()){ //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }

        
        else{

            $user = Auth::user();

            if (!$user->isAdmin) {
                return redirect()->route('home');
            }


            $id = Auth::id(); //Retrieve user's id
            $placed = Order::with('items.stock.product.product_images', 'items.stock.size', 'user')->where('status', 'Order Placed')->get();
            $outgoing = Order::with('items.stock.product.product_images', 'items.stock.size', 'user')->where('status', 'Outgoing')->get();
            $delivered = Order::with('items.stock.product.product_images', 'items.stock.size', 'user')->where('status', 'Delivered')->get();
            return view('process',compact('placed', 'outgoing', 'delivered'));
        }
    }

    public function processing(Request $request)
    {

        $order = Order::where('id', $request->id)->first(); //Create variable with linked tables basket, product and size

        $order->status = $request->status;

        $order->save();

        return redirect()->back();
    
    }
}
