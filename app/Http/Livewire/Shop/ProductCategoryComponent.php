<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;
use App\Models\ProductCategory;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductCategoryComponent extends Component
{
    public $cart;
    protected $listeners = ['update-cart' => 'render'];
    public $slug;
    public $categoryProducts;
    public $productsCategory;
    public function mount($slug) {
        $this->slug = $slug;
        $this->productsCategory = ProductCategory::where('slug',$slug)->with('products')->first();
        $this->categoryProducts = $this->productsCategory->products;
        $this->cart = Cart::content();
        foreach($this->categoryProducts as $key => $item) {
            $cartItem = $this->cart->where('id',$item->id)->first();
            $item->cartItem = $cartItem;
            $this->categoryProducts[$key] = $item;
        }
    }
    public function render()
    {
        $this->cart = Cart::content();
        foreach($this->categoryProducts as $key => $item) {
            $cartItem = $this->cart->where('id',$item->id)->first();
            $item->cartItem = $cartItem;
            $this->categoryProducts[$key] = $item;
        }
        return view('livewire.shop.product-category-component')->layout('layouts.master');
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
