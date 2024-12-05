<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function all()
    {
        $products = Product::all();

        return view('home', compact('products'));
    }

    public function rand4()
    {
        $products = Product::inRandomOrder()->take(4)->get();

        return view('home', compact('rand_products'));
    }

    public function productsHome()
    {
        $products = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get();
        return view('home', compact('products'));
    }

    public function products3()
    {
        $products4 = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get();
        $products3 = Product::with('product_images', 'sizes')->inRandomOrder()->take(3)->get();
        return view('mens', compact('products3','products4'));
    }

    public function productSingle($id)
    {
        $products = Product::with('product_images','sizes')->inRandomOrder()->get();
        $product = Product::with('product_images','sizes')->find($id);
        return view('product', compact('product','products'));
    }
}
