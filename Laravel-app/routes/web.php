<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomecontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\faqcontroller;
use App\Http\Controllers\productdetailcontroller;
use App\Http\Controllers\productscontroller;
use App\Http\Controllers\signincontroller;
use App\Http\Controllers\signupcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [welcomecontroller::class, 'index']);
Route::get('/about', [aboutcontroller::class, 'about']);
Route::get('/contact', [contactcontroller::class, 'contact']);
Route::get('/faq', [faqcontroller::class, 'faq']);
Route::get('/signin', [signincontroller::class, 'signin']);
Route::get('/signup', [signupcontroller::class, 'signup']);
Route::get('/product-detail', [productdetailcontroller::class, 'productdetail']);
Route::get('/products', [productscontroller::class, 'products']);