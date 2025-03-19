<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productsHome()//Products for home page
    {
        $products = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get(); //Obtain 4 random products with their sizes and images
        return view('home', compact('products'));
    }

    public function productsMen()//Products for mens page
    {
        $products4 = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get();
        return view('men', compact('products4'));
    }

    public function productsWomen()//Products for women page
    {
        $products4 = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get();
        return view('women', compact('products4'));
    }

    public function productsKids()//Products for kids page
    {
        $products4 = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get();
        return view('kids', compact('products4'));
    }

    public function productsAccessories()//Products for accessories page
    {
        $products4 = Product::with('product_images', 'sizes')->inRandomOrder()->take(4)->get();
        return view('accessories', compact('products4'));
    }

    public function productSingle($id)//Products for product showcase page
    {
        $products = Product::with('product_images','sizes')->where('id','!=',$id)->inRandomOrder()->get(); //Retrieve 4 random items different to showcased item
        $product = Product::with('product_images','sizes')->find($id); //Find item of specified id
        return view('product', compact('product','products'));
    }

    // search function
    public function productSearch()//Return products after search bar use
    {
        if(request()->has('search')){
            $products = Product::with('product_images', 'sizes')->where('name', 'like', '%' . request()->get('search') . '%')->get();
            return view('search-results', compact('products'));
        }
    }
}
