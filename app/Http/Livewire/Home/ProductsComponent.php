<?php

namespace App\Http\Livewire\Home;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use App\Models\Product;

class ProductsComponent extends Component
{
    public $products;

    public $cart;

    protected $listeners = ['update-cart' => 'render'];

    public function mount() {
        $this->products = Product::orderBy('created_at', 'DESC')->with('discount')->limit(12)->get();
        $this->cart = Cart::content();
        foreach($this->products as $key => $item) {
            $cartItem = $this->cart->where('id',$item->id)->first();
            $item->cartItem = $cartItem;
            $this->products[$key] = $item;
        }
    }

    public function render()
    {
        $this->cart = Cart::content();
        foreach($this->products as $key => $item) {
            $cartItem = $this->cart->where('id',$item->id)->first();
            $item->cartItem = $cartItem;
            $this->products[$key] = $item;
        }
        return view('livewire.home.products-component');
    }

    public function addToCart($id, $name, $qty, $price) {
        $productDiscount = 0;
        if (isset(Product::findOrFail($id)->discount->amount)) {
            $productDiscount = Product::findOrFail($id)->discount->amount;
        }
        $product = Cart::add(
            $id,
            $name,
            $qty,
            $price
        );
        Cart::setDiscount($product->rowId, $productDiscount);
        $this->emit('update-cart');
        session()->flash('success', 'محصول با موفقیت به سبد خرید افزوده شد!');
    }

    public function incrementCart($rowId) {
        $cartProduct = Cart::get($rowId);
        if ($cartProduct->product->quantity > $cartProduct->qty) {
            if ($cartProduct->product->stock_limit > $cartProduct->qty) {
                $qty = $cartProduct->qty + 1;
                Cart::update($rowId,$qty);
                $this->emit('update-cart');
            } else {
                session()->flash('error','محدودیت خرید این کالا');
            }
        } else {
            session()->flash('error','محدودیت خرید این کالا');
        }
    }

    public function decrementCart($rowId) {
        $cartProduct = Cart::get($rowId);
        if ($cartProduct->qty > 0) {
            $qty = $cartProduct->qty - 1;
            Cart::update($rowId,$qty);
            $this->emit('update-cart');
        }
    }

    public function removeCart($rowId) {
        Cart::remove($rowId);
        $this->emit('update-cart');
    }
}
