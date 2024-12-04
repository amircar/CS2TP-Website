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

    public function products4()
    {
        $products = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get();
        return view('home', compact('products'));
    }

    public function products3()
    {
        $products = Product::with('product_images', 'sizes')->inRandomOrder()->take(3)->get();
        return view('home', compact('products'));
    }
}
