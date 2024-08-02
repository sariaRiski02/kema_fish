<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product()
    {
        $product = Product::all();
        dd($product);
        return view('pages.home', compact('product'));
    }
}
