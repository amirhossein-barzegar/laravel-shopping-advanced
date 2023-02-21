<?php

namespace App\Http\Livewire\Shop;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShopComponent extends Component
{
    protected $listeners = [
        'brand-update' => 'productFilters',
        'only-in-stock' => 'productInStock'
    ];
    public $orderBy = 'bestSell';
    public $products;
    public $cart;

    public function mount() {
        $this->products = Product::orderBy('selled_count','DESC')->with('discount','brand')->get();
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
        $this->cart = Cart::content();
        return view('livewire.shop.shop-component')->layout('layouts.master');
    }

    public function productsOnFilter() {
        switch($this->orderBy) {
            case 'bestSell':
                $this->products = Product::orderBy('selled_count','DESC')->with('discount','brand')->get();
            break;
            case 'bestView':
                $this->products = Product::orderBy('views','DESC')->with('discount','brand')->get();
            break;
            case 'newest':
                $this->products = Product::orderBy('created_at','DESC')->with('discount','brand')->get();
            break;
            case 'inExpensive':
                $this->products = Product::orderBy('price','ASC')->with('discount','brand')->get();
            break;
            case 'expensive':
                $this->products = Product::orderBy('price','DESC')->with('discount','brand')->get();
            break;
        }
    }

    public function productFilters($brandIds) {
        $this->products = [];
        foreach($brandIds as $id) {
            $brand = Brand::where('id',$id)->with('products')->first();
            if (isset($brand->products))
            foreach($brand->products as $key=>$brandProduct) {
                $this->products[] = $brandProduct;
            }
        }
    }

    public function productInStock($status) {
        if ($status == true) {
            $products = $this->products;
            $this->products = null;
            foreach($products as $product) {
                if($product->stock_status == Product::AVAILABLE_PRODUCT) {
                    $this->products[] = $product;
                }
            }
        }
    }

    /**
     * Add to cart
     * @param number $id
     * @param string $name
     * @param number $qty
     * @param number $price
     * @return void
     */
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
