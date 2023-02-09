<?php

namespace App\Http\Livewire\Shop;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = [
        'update-cart' => 'render'
    ];

    public function render()
    {
        $cart_count = Cart::content()->count();
        return view('livewire.shop.cart-counter',compact('cart_count'));
    }
}
