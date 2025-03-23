<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function orders()
    {
        return view('faq-orders');
    }

    public function other()
    {
        return view('faq-other');
    }

    public function products()
    {
        return view('faq-products');
    }

    public function promotions()
    {
        return view('faq-promotions');
    }

    public function returns()
    {
        return view('faq-returns');
    }
}
