<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productscontroller extends Controller
{
    public function products()
    {
        return view('products');
    }
}
