<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Cart as CartModel;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{


    public function increment($idCart)
    {
        $cart = CartModel::find($idCart);
        $cart->product_quantity++;
        $cart->save();
    }


    public function decrement($idCart)
    {
        $cart = CartModel::find($idCart);

        if ($cart->product_quantity <= 1) {
            return;
        }
        $cart->product_quantity--;
        $cart->save();
    }

    public function deleteCart($idCart)
    {
        $cart = CartModel::find($idCart);
        if ($cart) {
            $cart->delete();
        }
    }


    public function render()
    {
        $user = Auth::user();
        $cart = CartModel::where('id_user', $user->id)->orderBy('created_at', 'desc')->get();
        if ($cart) {
            $total = $cart->map(function ($item) {

                return $item->product->price * $item->product_quantity;
            })->sum();
        }
        return view('livewire.cart', compact('cart', 'total'));
    }
}
