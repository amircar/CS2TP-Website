<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Stock;
use App\Models\basket_stock;
use Auth;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(){
        if(!Auth::check()){ //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }
        else{
            $id = Auth::id(); //Retrieve user's id
            $basket = Basket::with('stocks.product.product_images', 'stocks.size')->where('user_id', $id)->first(); //Create variable with linked tables basket, product and size
            return view('basket',compact('basket'));
        }
    }

    public function add(Request $request){
        if(!Auth::check()){ //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        }
        else{
            $id = Auth::id();
            $basket = Basket::firstOrCreate(['user_id', $id]); //Finds Basket of Current User or Creates one If not made
            $stock = Stock::where('product_id',$request->product_id)->where('size_id',$request->size_id)->first(); //Find Stock with requested product and size
            $user_basket = basket_stock::where('basket_id',$basket->id)->where('stock_id',$stock->id)->first();

            if($user_basket){
                $user_basket->quantity += 1;
                $user_basket->save();
            }else{
                basket_stock::create(['basket_id' => $basket->id,'stock_id' => $stock->id,'quantity' => 0]);
            }
            return view('basket');
        }
        
    }

    public function remove(Request $request){
        if(!Auth::check()){ //Check User is logged in
            return redirect('/login'); //Redirect to login if not
        }
        else{
            $id = Auth::id();
            $basket = Basket::where('user_id', $id)->first(); //Finds Basket of Current User
            $stock = Stock::where('product_id',$request->product_id)->where('size_id', $request->size_id)->first(); //Find Stock with specified product and size
            $user_basket = basket_stock::where('basket_id',$basket->id)->where('stock_id',$stock->id)->first(); //Find the correct basket_stock

            if($user_basket){ //Check basket_stock exists
                if($user_basket->quantity > 1){ //Check if quantity is greater than 1
                    $user_basket->quantity -= 1; //Decrement quantity
                    $user_basket->save(); 
                }else{
                    $user_basket->delete(); //Delete if quantity would go 0 or below
                }
            }
            return redirect()->route('basket');
        }
    }
}
