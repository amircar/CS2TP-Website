<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Auth;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket(){
        if(!Auth::check()){
            return redirect('/');
        }
        else{
            $id = Auth::id();
            $basket = Basket::with('stocks')->where('user_id', "==", $id)->get();
            return view('basket',compact('basket'));
        }
    }
}
