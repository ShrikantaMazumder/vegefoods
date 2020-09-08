<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home page
    public function home()
    {
        return view('frontend.home');
    }

    // Cart page
    public function cart()
    {
        return view('frontend.cart');
    }

    // Shop page
    public function shop()
    {
        return view('frontend.shop');
    }

    // Checkout page
    public function checkout()
    {
        return view('frontend.checkout');
    }

    // auth
    public function login()
    {
        return view('frontend.auth.login');
    }

    public function signup()
    {
        return view('frontend.auth.signup');
    }
}
