<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Nette\Utils\DateTime;

class SpecialProductComponent extends Component
{
    protected $listeners = [
            'update-cart' => 'render',
            'update-time' => 'calculateTime'
    ];

    public $specialProducts = [];

    public $cart;

    public function mount() {
        $this->specialProducts = Product::where('discount_id','>',0)->with('discount')->inRandomOrder()->get();
        $this->cart = Cart::content();
        foreach($this->specialProducts as $key => $item) {
            $cartItem = $this->cart->where('id',$item->id)->first();
            $item->cartItem = $cartItem;
            $this->specialProducts[$key] = $item;
        }
        $this->calculateTime();
    }

    public function render()
    {
        $this->cart = Cart::content();
        foreach($this->specialProducts as $key => $item) {
            $cartItem = $this->cart->where('id',$item->id)->first();
            $item->cartItem = $cartItem;
            $this->specialProducts[$key] = $item;
        }
        return view('livewire.home.special-product-component');
    }

    public function updateCart() {
        $this->specialProducts = Product::where('discount_id','>',0)->with('discount')->get();
        $this->cart = Cart::content();
        foreach($this->specialProducts as $item) {
            $cartItem = $this->cart->where('id',$item->id)->first();
            $item->cartItem = $cartItem;
            $this->specialProducts[$item->id] = $item;
        }
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

    public function calculateTime() {
        foreach($this->specialProducts as $item) {
            $start_time = new DateTime(now());//start time
            $expire_time = new DateTime($item->discount->expire_time);//end time
            $remaining_time = $start_time->diff($expire_time);
            $item->discount->remainingTime = $remaining_time;
            $this->specialProducts[$item->id] = $item;
            $item->discount->remainingTimeMessage = $remaining_time->format('%D:%H:%i:%S');
        }
        $this->dispatchBrowserEvent('contentChanged');
    }
}
