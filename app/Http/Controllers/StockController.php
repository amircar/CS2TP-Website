<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Size;
use App\Models\Product;
use App\Models\Product_Image;
use Illuminate\Support\Facades\Redirect;
use Auth;

class StockController extends Controller
{
    public function isAdmin()//Check user is an admin and removes rewriting code
    {
        if (!Auth::check()) { //Check User is logged in
            return redirect()->route('login'); //Redirect to login if not
        } else {

            $user = Auth::user();

            if (!$user->isAdmin) {
                return redirect()->route('home');
            }
        }
        return null;
    }

    public function update()//Display all stocks to update
    {
        $admin = $this->isAdmin();

        if ($admin) {
            return $admin;
        }

        $stocks = Stock::with('product.product_images', 'size')->get();
        return view('stocks', compact('stocks'));
    }

    public function quantity(Request $request)//Update quantity of selected stock
    {
        $admin = $this->isAdmin();

        if ($admin) {
            return $admin;
        }

        $stock = Stock::where('id', $request->stock_id)->first();

        $stock->quantity = $request->quantity;//change quantity

        $stock->save();

        return redirect()->back()->with('message', 'Quantity Changed');
    }

    public function new()//Create new stock page
    {
        $admin = $this->isAdmin();

        if ($admin) {
            return $admin;
        }

        return view('new-product');
    }

    public function create(Request $request)//Actually create new stock
    {
        $admin = $this->isAdmin();

        if ($admin) {
            return $admin;
        }

        $product = new Product(); //Create New Product
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->average_rating = 5.00;
        $product->save();
        
        $image=$request->file('image'); //Obtain and store image in public
        $imageUrl = strtolower(str_replace(' ','-',$request->name)).'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageUrl);

        $productImage = new Product_Image(); //Store image in database
        $productImage->product_id = $product->id;
        $productImage->image_url = "images/".$imageUrl;
        $productImage->alt_text = $request->name;
        $productImage->is_primary = true;
        $productImage->save();

        foreach ($request->sizes as $size) { //Creates stock for all sizes selected
            $sizeId = Size::where('size', $size)->first();
    
            if ($sizeId) {
                Stock::create([
                    'product_id' => $product->id,
                    'size_id' => $sizeId->id,
                    'quantity' => $request->stock,
                ]);
            }
        }
    
        return redirect()->route('new');
    }
}
