<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function products(){
        return view('products');
    }

    public function product_details(){
        return view('product-details');
    }
}
