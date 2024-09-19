<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{


    public $code;


    public function addToCart()
    {


        $product = Product::where('id', $this->code)->first();
        $user = Auth::user();
        if ($user instanceof User) {
            $user->cart()->create([
                'id_product' => $this->code,
                'product_quantity' => 1,
                'total_amount' => $product->price
            ]);
        }
    }


    public function render()
    {
        $product = Product::where('id', $this->code)->first();
        return view('livewire.product-detail', compact('product'));
    }
}
