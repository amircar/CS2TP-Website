<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ContactUsController extends Controller
{
    //displays the view for the contact us page
    public function display()
    {
        return view('contact-us');
    }

}