<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupcontroller extends Controller
{
    public function signup()
    {
        return view('sign-up');
    }
}
