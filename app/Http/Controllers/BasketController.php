<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(){
        if(!Auth::check()){
            return redirect('/login');
        }
        else{
            $id = Auth::id();
            $basket = Basket::with('stocks.product', 'stocks.size')->where('user_id', $id)->first();
            return view('basket',compact('basket'));
        }
    }
}
