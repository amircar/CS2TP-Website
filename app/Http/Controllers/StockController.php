<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use Illuminate\Support\Facades\Redirect;

class StockController extends Controller
{
    public function update()//Products for kids page
    {
        $stocks = Stock::with('product.product_images', 'size')->get();
        return view('stocks', compact('stocks'));
    }

    public function quantity(Request $request)
    {
        $stock = Stock::where('id', $request->stock_id)->first();

        $stock->quantity = $request->quantity;

        $stock->save();

        return redirect()->back();
    }
}
