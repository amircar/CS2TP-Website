<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function orders()
    {
        return view('faq/faq-orders');
    }

    public function other()
    {
        return view('faq/faq-other');
    }

    public function products()
    {
        return view('faq/faq-products');
    }

    public function promotions()
    {
        return view('faq/faq-promotions');
    }

    public function returns()
    {
        return view('faq/faq-returns');
    }
}
