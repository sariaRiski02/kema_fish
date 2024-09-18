<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{


    public $code;

    public function render()
    {
        $product = Product::where('id', $this->code)->first();
        return view('livewire.product-detail', compact('product'));
    }
}
