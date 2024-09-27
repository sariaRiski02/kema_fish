<?php

namespace App\Http\Controllers;

use Throwable;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\addProductRequest;

class adminProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        $count = $products->count();
        $entityProduct = $products->pluck('entity_product')->sum();
        $avarageProduct = $products->pluck('price')->sum() / $entityProduct;
        return view('admin.product', compact([
            'products',
            'count',
            'avarageProduct',
            'entityProduct',
        ]));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.add-product', compact('categories'));
    }

    public function addProduct(addProductRequest $request)
    {
        $data = $request->validated();
        $imageName = $request->file('image') ?
            $request->file('image')->getClientOriginalName() : '';

        try {


            $category = Category::where('id', $data['category'])->first();
            $category->product()->create([
                'name' => $data['name'],
                'entity_product' => $data['entity_product'],
                'price' => $data['price'],
                'image' => $imageName,
                'description' => $data['description'],
                'detail_description' => $data['detail_description']
            ]);
        } catch (Throwable $e) {

            return redirect()
                ->route('admin.create-product')
                ->with([
                    'error' => 'product gagal dibuat'
                ]);
        }


        return redirect()
            ->route('admin.create-product')
            ->with(['success' => 'product berhasil dibuat']);
    }


    public function searchProduct(Request $request)
    {
        $products = Product::where('name', 'like', "%$request->search%")->get();
        return view('admin.product', compact('products'));
    }
}
