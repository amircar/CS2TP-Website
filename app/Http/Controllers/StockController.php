<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function update()//Products for kids page
    {
        $stocks = Stock::with('product.product_images', 'size')->get();
        return view('stocks', compact('stocks'));
    }
}
