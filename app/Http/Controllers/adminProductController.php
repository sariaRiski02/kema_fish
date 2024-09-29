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
        return view('admin.product', compact([
            'products',
            'count',
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
            if ($request->hasFile('image')) {
                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('assets/productImages'), $imageName);
            }
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
        $productsBySearch = Product::where('name', 'like', "%$request->search%")->get();
        $products = Product::with('category')->get();
        $count = $products->count();
        $entityProduct = $products->pluck('entity_product')->sum();
        return view('admin.product', compact([
            'products',
            'count',
            'entityProduct',
            'productsBySearch'
        ]));
        // return view('admin.product', compact('products'));
    }


    public function updatePage($id)
    {

        $categories = Category::all();

        $product = Product::where('id', $id)->first();

        return view('admin.update-product', compact('categories', 'product', 'id'));
    }


    public function update(addProductRequest $request, $id)
    {
        $data = $request->validated();
        $imageName = '';
        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('assets/images'), $imageName);
        }
        $category = Category::where('id', $data['category'])->first();
        try {
            $products = Product::where('id', $id)->first();
            if ($products) {
                $products->update([
                    'name' => $data['name'],
                    'entity_product' => $data['entity_product'],
                    'price' => $data['price'],
                    'id_category' => $category->id,
                    'image' => $imageName,
                    'description' => $data['description'],
                    'detail_description' => $data['detail_description'],
                ]);
            } else {

                return redirect()->back()->withErrors([
                    'error' => 'data tidak ditemukan'
                ]);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors([
                'error' => "data tidak bisa di proses"
            ]);
        }


        return redirect()->back()->with([
            'success' => 'produk berhasil diperbarui'
        ]);
    }

    public function delete(Request $request)
    {

        $data = $request->input('selected_products');

        if (empty($data)) {
            return redirect()->back()->withErrors([
                'error' => "Tidak ada produk yang dipilih untuk dihapus"
            ]);
        }

        $result = Product::whereIn('id', $data)->delete();

        if (!$result) {
            return redirect()->back()->withErrors([
                'error' => "data tidak ditemukan"
            ]);
        }
        return redirect()->back()->with([
            'success' => 'Produk yang dipilih berhasil dihapus'
        ]);
    }
}
