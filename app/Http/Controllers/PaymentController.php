<?php

namespace App\Http\Controllers;

use App\Models\basket_stock;
use App\Models\Stock;
use App\Models\Basket;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout;



class PaymentController extends Controller
{

    
    public function checkout(Request $request){

        $basket = Basket::with('stocks.product')->where('user_id', $request->user_id)->first(); //Create variable with linked tables basket, product and size

        foreach($basket->stocks as $stock){
            if($stock->pivot->quantity > $stock->quantity){
                return redirect()->back()->with('message', $stock->product->name.' only has '.$stock->pivot->quantity.' in stock');
            }
        }

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $payment = Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'gbp',
                        'product_data' => [
                            'name' => "Team 47 Clothing",
                        ],
                        'unit_amount' => $request->price,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success', ['user_id' => $request->user_id]),
            'cancel_url' => route('basket'),
            ]);

            return redirect()->away($payment->url);
    }

    public function success(Request $request){
        
        $basket = Basket::with('stocks')->where('user_id', $request->user_id)->first(); //Create variable with linked tables basket, product and size

        foreach($basket->stocks as $stockChange){
            $stock = Stock::find($stockChange->id);
            $stock->quantity -= $stockChange->pivot->quantity;
            $stock->save();
        }
        
        basket_stock::where('basket_id',$basket->id)->delete();
        session()->forget($request->key);
        return redirect()->back();
    }
}
