<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;

class CartItems extends Component
{
    protected $listeners = [
        'update-cart' => 'updateCart',
    ];

    public object $cartItems;

    public function mount() {

    }

    public function render()
    {
        $this->cartItems = Cart::content();
        foreach($this->cartItems as $item) {
            $product = Product::findOrFail($item->id);
            $item->product = $product;
            $this->cartItems[$item->rowId] = $item;
        }
        return view('livewire.shop.cart-items');
    }

    public function updateCart() {
        $this->cartItems = Cart::content();
        foreach($this->cartItems as $item) {
            $product = Product::findOrFail($item->id);
            $item->product = $product;
            $this->cartItems[$item->rowId] = $item;
        }
    }

    public function incrementCart($rowId) {
        $cartProduct = Cart::get($rowId);
        $product = Product::find($cartProduct->id);
        if ($product->quantity > $cartProduct->qty) {
            if ($product->stock_limit > $cartProduct->qty) {
                $qty = $cartProduct->qty + 1;
                Cart::update($rowId,$qty);
                $this->emit('update-cart');
            } else {
                session()->flash('error','محدودیت خرید این کالا');
            }
        } else {
            session()->flash('error','محدودیت خرید این کالا');
        }
        $this->emit('update-cart');
    }

    public function decrementCart($rowId) {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
        $this->emit('update-cart');
    }

    public function removeCart($rowId) {
        Cart::remove($rowId);
        $this->emit('update-cart');
    }
}
