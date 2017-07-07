<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function getIndex()
    {
        $product = Product::all();;
        return view('shop.index', ['products'=>$product]);
    }
}
