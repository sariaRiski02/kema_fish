<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminProductController extends Controller
{
    public function index()
    {
        return view('admin.product');
    }

    public function create()
    {
        return view('admin.add-product');
    }

    public function addProduct(Request $request)
    {

        dd($request->toArray());
    }
}
