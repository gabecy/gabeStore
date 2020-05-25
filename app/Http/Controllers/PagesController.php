<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class PagesController extends Controller
{
    public function index()
    {
        $shirts=Product::all();
        return view('front.home',compact('shirts'));
    }
    

    public function shirts()
    {

        $shirts=Product::all();
        return view('front.shirts',compact('shirts'));
    }

    public function product()
    {
        return view('front.product');
    }
}
