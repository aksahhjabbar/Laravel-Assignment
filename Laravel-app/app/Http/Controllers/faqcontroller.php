<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class faqcontroller extends Controller
{
    public function faq()
    {
        return view('faq');
    }
}
