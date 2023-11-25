<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productdetailcontroller extends Controller
{
    public function productdetail()
    {
        return view('product-detail');
    }
}
