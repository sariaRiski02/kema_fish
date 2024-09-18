<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class Home extends Component
{
    public $idProduct;

    public function addToCart($idProduct)
    {

        if (!Auth::user()) {
            return redirect()->route('signin');
        }

        $user = Auth::user();
        $product = Product::where('id', $idProduct)->first();
        if ($user instanceof User) {
            $user->cart()->create([
                'id_product' => $idProduct,
                'product_quantity' => 1,
                'total_amount' => $product->price
            ]);
        }
    }

    public function render()
    {
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'desc')->get();


        return view('livewire.home', compact('products', 'categories'));
    }
}
